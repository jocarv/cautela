<?php
require_once('../config.php');
require_once(DBAPI);
//define('FPDF_FONTPATH','../pdf/font/');
require('../pdf/pdf.php');


setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

$id = $_GET['id'];
//$posto = $_GET['posto'];

$database = open_database();
$string = "SELECT * FROM listamil WHERE id= $id ";
$result = $database->query($string);
$ind =0;
$totalg =0;





foreach($result as $row){
 
}


$nome  = $row['nome'];
$nomeg = $row['nomeg'];
$posto = $row['pstgrad'];
$ng = explode(" ", $nomeg);

$patern = array();

array_push($patern,"/($ng[0])/");
if (isset($ng[1])){
    array_push($patern,"/($ng[1])/");
}
if (isset($ng[2])){
    array_push($patern,"/($ng[2])/");
}

$string1 = "SELECT * FROM dados";
$result1 = $database->query($string1);
foreach($result1 as $row1){
 
}



$valor2 = "1";
$pdf=new PDF() ;
// $pdf->Open();
$pdf->SetMargins( 25, 8, 8, 8 );
$pdf->AddPage(); $pdf->SetFont('times','B',10);

if ($row1['imagem']!="nenhum"){
  //$pdf->Cell(280,2,"",1,1,'C');
  $pdf->Image("../images/". $row1['imagem'].".gif" , 172 ,10, 26 , 'gif');
}

 $pdf->SetFont('times','',10);
 $pdf->Ln(2);
// $pdf->Cell(0,3.5,utf8_decode($row1['Sub1']),0,1,'C');
// $pdf->Cell(0,3.5,utf8_decode($row1['Sub2']),0,1,'C');
 $pdf->Cell(0,3.5,utf8_decode($row1['Sub3']),0,1,'C');
// $pdf->Cell(0,3.5,utf8_decode($row1['Sub4']),0,1,'C');
 
 $pdf->Cell(0,3.5,utf8_decode($row1['Sub5']),0,1,'C');
 $pdf->Ln(2);
 $pdf->Cell(0,3.5,utf8_decode("FICHA DE DISTRIBUIÇÃO DE FARDAMENTO"),0,1,'C');
 $pdf->Ln(10);

 
 //VISTO
 $pdf->sety(10);
 $pdf->Cell(10,3.5,utf8_decode("Visto:"),0,1,'L');
 $pdf->Ln(10);
 $pdf->Cell(30,3.5,utf8_decode("___________"),0,1,'C');
 $pdf->Cell(30,3.5,utf8_decode("Cmt Bia"),0,1,'C');
 $pdf->Ln(3);
 $pdf->Cell(15,3.5,utf8_decode("Militar :"),0,0,'L');
 $pdf->Cell(15,3.5,utf8_decode($posto),0,0,'L');
 // $pdf->Cell(15,3.5,utf8_decode("N° :"),0,0,'L');
 //$pdf->Cell(15,3.5,utf8_decode("Nome :"),0,0,'L');
 $texto = preg_replace($patern,'*\\1#', $nome);
 $ttexto = strlen($texto);
 
 for ($i=0; $i<=$ttexto; $i++){
     
     if(substr($texto,$i,1)=="*"){
         $pdf->SetFont('times','B',10);
         $i++;
     }
     if(substr($texto,$i,1)=="#"){
         $pdf->SetFont('times','',10);
         $i++;
     }
     $pdf->Cell(2.3, 3.5,substr($texto,$i,1),0,0,"C",false);
 }

 $pdf->setx(175);
 
 $pdf->Cell(10,3.5,utf8_decode("Ano :"),0,0,'L');
 $pdf->Cell(10,3.5,date("Y"),0,1,'L');
 $pdf->Ln(2);
 

 $pdf->SetFont('times','',10);
 //Table with 20 rows and 4 columns
 $pdf->SetWidths(array(15,90,20,25,30));//CADA VALOR DESTE ARRAY SERÁ A LARGURA DE CADA COLUNA
 $pdf->SetAligns(array("C","L","C","C","C"));
 $pdf->Row(array("Ordem",utf8_decode("Especificações"),"Quantidade","Data", utf8_decode("Observação")));
 
 
 
 $pdf->SetAligns(array("C","J","C","C","R"));
 
 
 $string2 = "SELECT * FROM consultacau where caumil = $id order by tipo,descri";
 $result2 = $database->query($string2);
 $tipo2 = "";
 $ordem =1;
 foreach($result2 as $row2){
     
     $string = "SELECT * FROM tipomat where id=". $row2['tipo'];
     $result = $database->query($string);
     foreach($result as $row){
  
     }
     
        $tipo =    $row['tipo'];
     
        if ($tipo!=$tipo2){
           // $pdf->SetDrawColor(160,160,160);
            $pdf->setFillColor(230,230,230);
            $pdf->Cell(180,3.5,utf8_decode($tipo),1,1,'C',1);
        $ordem = 1;
        }
     
     $tipo2 = $tipo;
    //srand(microtime()*1000000);
     //page break
     $y1 = $pdf->GetY();
     if ($y1 > 250){
         $pdf->SetFont('times','',10);
         $pdf->AddPage();
         $pdf->AliasNbPages('tpagina');
         $pdf->Cell(0,10,utf8_decode("Continuação da FICHA DE DISTRIBUIÇÃO DE FARDAMENTO Página n° " . $pdf->PageNo() ), 0, 1,'R');
      }
  
    $pdf->Row(array($ordem,utf8_decode($row2['descri']),$row2['cauquant'],date("d/m/Y",strtotime($row2['caudata'])),utf8_decode($row2['cauobs'])));  
    $ordem++;


}
 
 $pdf->cell(170,5,"Caxias do Sul-RS,  ". strftime('%d de %B de %Y',strtotime(date('Y-m-d'))),0,0,"C",false) ;
 $pdf->ln(16);
 $pdf->Cell(110,3.5,$nome." - ".$posto,0,0,'L');
 $pdf->Cell(60,3.5,$row1['encmat'],0,1,'C');
 $pdf->Cell(110,3.5," ",0,0,'L');
 
 $pdf->Cell(60,3.5,"Encarregado de Material da ". $row1['abrevsu'],0,0,'C');

  
  $pdf->Output();
?>
