
<?php
require_once('../config.php');
require_once(DBAPI);


$database= open_database();

$nome = "";
$usuario = $_POST['Usuario'];
$nivel   = $_POST['nivel'];
$senha   = $_POST['senha'];
$senhax = sha1($senha);
$confirma = $_POST['confirma'];
$email = "meuemail@eb.mil.br";
$ativo = 1;
$cadastro = date("Y-m-d H:i:s");

echo $nome. "<br>";
echo $usuario. "<br>";
echo $nivel. "<br>";
echo $senhax. "<br>";
echo $confirma. "<br>";
echo $email;
echo $ativo;
echo $cadastro;

$sql = "INSERT INTO `usuarios` (`id`, `nome`, `usuario`, `senha`, `email`, `nivel`, `ativo`, `cadastro`) VALUES (NULL, 'meu nome', '$usuario', '$senhax', '$email', '$nivel', '1', '$cadastro')";
//$sql = "INSERT INTO `empenho` (`id`, `nr`, `valor`, `req`, `data_rec`, `data_env` , `track`) VALUES (NULL, '$mat[1]', '$valor', '$mat[0]', '$mat[3]', '$mat[4]', '$mat[5]')";
//$sql = "UPDATE `requisicao` SET `nr_e` = '$mat[1]', `data_rec` = '$mat[2]', `data_env` = '$mat[3]' WHERE `requisicao`.`id` = '$mat[0]';";//
$result = $database->query($sql);//
echo $result;

header('location: login.php');
