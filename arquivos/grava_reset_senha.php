
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
$nome = strtoupper($mat[2]);
$nomeg = strtoupper($mat[1]);

$database = open_database();

$sql = "UPDATE `militar` SET `pstgrad` = '$mat[0]',`nome` = '$nome', `nomeg` = '$nomeg' WHERE `militar`.`id` = '$mat[3]'";


$result = $database->query($sql);
//grava log
if (!isset($_SESSION)) session_start();
$dados['usuario']=$_SESSION['UsuarioNome'];
$dados['acao'] = "editou dados militar - ". $mat[0]." - ". $nomeg;
save('log',$dados);

echo "result" . $result;
header('location: lista_mil.php');
