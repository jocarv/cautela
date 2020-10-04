
<?php
require_once('../config.php');
require_once(DBAPI);



$database = open_database();

$ind=0;
$ind1=0;
$hoje = date("Y-m-d");
foreach ($_GET['customer'] as $row){
    
    $mat[$ind] = $row;
    
    echo $ind ." - " . $mat[$ind] . "<br>";
    
    
    $ind++;
}

$sql = "SELECT * FROM militar WHERE pstgrad=".$mat['0'];
$result = $database->query($sql);

foreach($result as $row1){
    
    echo $row1['id'] . "  - grad" . $mat['0'] ." - material " . $mat['1'] . "<br>";
    $ind1++;
    $sql = "INSERT INTO `cautela` (`id`, `militar`, `material`, `quantidade`, `data`)
    VALUES (NULL, ' $row1[id]', '$mat[1]','1','$hoje')";
    $result = $database->query($sql);

}
  
    
 //   $sql = "INSERT INTO `cautela` (`id`, `militar`, `material`, `quantidade`, `data`)
 //   VALUES (NULL, ' $mat2[$ind3]', '$mat3[$ind3]','$mat1[$ind3]','$hoje')";
    
   //$sql = "INSERT INTO `cautela` (`id`, `militar`, `material`, `quantidade`, `data`) VALUES (NULL, '2', '3', '3', '2020-07-07');
    
  //  $result = $database->query($sql);
   
    
    //grava log
    if (!isset($_SESSION)) session_start();
     $dados['usuario']=$_SESSION['UsuarioNome'];
     $dados['acao'] = "Inclusão Mat Cautela Automatico - ";
        save('log',$dados);
    
    
    
//    echo "result" . $result;






  
//$sql = "INSERT INTO `material` (`id`, `tipo`, `descri`, `quantidade`, `necessi`, `obs`)
//VALUES (NULL, '$mat[0]', '$mat[1]','$mat[2]','$mat[3]','$mat[4]')";

//$result = $database->query($sql);
//echo "result" . $result;
header('location: lista_mil.php');
 