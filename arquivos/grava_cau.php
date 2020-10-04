
<?php
require_once('../config.php');
require_once(DBAPI);

$posto = $_GET['posto'];
$nomeg = $_GET['nomeg'];

$database = open_database();

//$tabela = $_POST['customer'];
$ind=0;
$ind1=0;
$ind2=0;
$ind3=0;
$ind4=0;
$ind5=0;

$hoje = date("Y-m-d");



foreach ($_POST['customer'] as $row){
     
  
  $mat1[$ind] = $row;
   
  echo $ind ." - " . $mat1[$ind]. "<br>";
    
  $ind++;
}
foreach ($_POST['customer1'] as $row1){
    
    $mat2[$ind1] = $row1;
    
    
    echo $ind1 ." - " . $mat2[$ind1]. "<br>";
    
    
    $ind1++;
}
foreach ($_POST['customer2'] as $row2){
    
    $mat3[$ind2] = $row2;
    
    
   echo $ind2 ." - " . $mat3[$ind2]. "<br>";
    
    
    $ind2++;
}
foreach ($_POST['customer3'] as $row3){
    
    $mat4[$ind4] = $row3;
    
    
    echo $ind4 ." - " . $mat4[$ind4]. "<br>";
    
    
    $ind4++;
}
foreach ($_POST['customer4'] as $row4){
    
    $mat5[$ind5] = $row4;
    
    
 echo $ind5 ." - " . $mat5[$ind5]. "<br>";
    
    
    $ind5++;
}

foreach ($mat1 as $grava ){
    if ($mat1[$ind3]>0){
   
    
    
    $sql = "INSERT INTO `cautela` (`id`, `militar`, `material`, `quantidade`, `data`,`obs`)
    VALUES (NULL, ' $mat2[$ind3]', '$mat3[$ind3]','$mat1[$ind3]','$hoje','$mat5[$ind3]')";
    
   //$sql = "INSERT INTO `cautela` (`id`, `militar`, `material`, `quantidade`, `data`) VALUES (NULL, '2', '3', '3', '2020-07-07');
    
    $result = $database->query($sql);
    
    
    //grava log
    if (!isset($_SESSION)) session_start();
    $dados['usuario']=$_SESSION['UsuarioNome'];
    $dados['acao'] = "Inclusão Mat Cautela - ". $posto ." - ". $nomeg. "- ". $mat4[$ind3]. " - " . $mat1[$ind3];
    save('log',$dados);
    
    
    
//    echo "result" . $result;
    }
$ind3++;
}





  
//$sql = "INSERT INTO `material` (`id`, `tipo`, `descri`, `quantidade`, `necessi`, `obs`)
//VALUES (NULL, '$mat[0]', '$mat[1]','$mat[2]','$mat[3]','$mat[4]')";

//$result = $database->query($sql);
//echo "result" . $result;
header('location: lista_mil.php');
 