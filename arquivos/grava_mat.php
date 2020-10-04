
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
  
$sql = "INSERT INTO `material` (`id`, `tipo`, `descri`, `quantidade`, `necessi`, `obs`)
VALUES (NULL, '$mat[0]', '$mat[1]','$mat[2]','$mat[3]','$mat[4]')";

$result = $database->query($sql);

//grava log
if (!isset($_SESSION)) session_start();
$dados['usuario']=$_SESSION['UsuarioNome'];
$dados['acao'] = "Incluido material - ". $mat[1] ." - ". $mat[2];
save('log',$dados);
echo "result" . $result;
header('location: lista_mat.php');
