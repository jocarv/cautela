<?php
require_once('../config.php');
require_once(DBAPI);
//envio o charset para evitar problemas

$nome = $_POST['nomeUsuario'];
$database = open_database();

$string = "SELECT * FROM `usuarios` WHERE usuario='".$nome."' ";

$result = $database->query($string);
$row = array();


foreach ($result as $row){
   
}

if (count($row)>0){
   
    echo "Usuário ". $nome ." Já existe!";
    
}



     ?>