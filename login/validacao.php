<?php

// Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
    header("Location: ../index.php"); exit;
}

// Tenta se conectar ao servidor MySQL
require_once('../config.php');
require_once(DBAPI);

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$database = open_database(); 



// Validação do usuário/senha digitados
$sql = "SELECT `id`, `nome`, `nivel`, `usuario` FROM `usuarios` WHERE (`usuario` = '".$usuario ."') AND (`senha` = '". sha1($senha) ."') AND (`ativo` = 1) LIMIT 1";

$data = $database->query($sql);

foreach ($data as $row){
    
}


if (empty($row)) {
    // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
    echo "Login inválido!"; exit;
} else {
    // Se a sessão não existir, inicia uma
    if (!isset($_SESSION)) session_start();
    
    // Salva os dados encontrados na sessão
    $_SESSION['UsuarioID'] = $row['id'];
    $_SESSION['UsuarioNome'] = $row['nome'];
    $_SESSION['UsuarioNivel'] = $row['nivel'];
    $_SESSION['Usuario'] = $row['usuario'];
    // Redireciona o visitante
    header("Location: ../arquivos/lista_mil.php"); exit;
   
}

?>