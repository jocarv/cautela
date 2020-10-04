
<?php
require_once('../config.php');
require_once(DBAPI);

$database= open_database();

$id = $_POST['id'];

$senha   = $_POST['senha'];
$senhax = sha1($senha);



$sql = "UPDATE `usuarios` SET `senha` = '$senhax' WHERE `usuarios`.`id` =". $id;

//$sql = "INSERT INTO `usuarios` (`id`, `nome`, `usuario`, `senha`, `email`, `nivel`, `ativo`, `cadastro`) VALUES (NULL, 'meu nome', '$usuario', '$senhax', '$email', '$nivel', '1', '$cadastro')";
//$sql = "INSERT INTO `empenho` (`id`, `nr`, `valor`, `req`, `data_rec`, `data_env` , `track`) VALUES (NULL, '$mat[1]', '$valor', '$mat[0]', '$mat[3]', '$mat[4]', '$mat[5]')";
//$sql = "UPDATE `requisicao` SET `nr_e` = '$mat[1]', `data_rec` = '$mat[2]', `data_env` = '$mat[3]' WHERE `requisicao`.`id` = '$mat[0]';";//
$result = $database->query($sql);//


header('location: ../index.html'); exit;
