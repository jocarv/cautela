
<?php
require_once('../config.php');
require_once(DBAPI);



//$tabela = $_POST['customer'];
$ind=0;
foreach ($_POST['customer'] as $row){
     
  $mat[$ind] = $row;
   
  echo $ind ." - " . $mat[$ind] . "<br>";
  
  
  $ind++;
}

$database = open_database();
  
$sql = "UPDATE `tipomat` SET `tipo` = '$mat[0]' WHERE `tipomat`.`id` = '$mat[1]' ";

$result = $database->query($sql);

//grava log
if (!isset($_SESSION)) session_start();
$dados['usuario']=$_SESSION['UsuarioNome'];
$dados['acao'] = "ALTERAÇÃO tipo de  material - ". $mat[0] ;
save('log',$dados);
echo "result" . $result;
header('location: lista_tipo_mat.php');
