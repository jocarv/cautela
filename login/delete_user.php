<?php
if (!isset($_SESSION)) session_start();
$dados['usuario']=$_SESSION['UsuarioNome'];
require_once('../config.php');
require_once(DBAPI);
//include(HEADER_TEMPLATE);
//$id = $_GET['id'];
//$militar = $_GET['militar'];
//$enviado = $_GET['controle'];
$ind=0;
foreach ($_POST['customer'] as $row){
    
    $mat[$ind] = $row;
    
    echo $ind ." - " . $mat[$ind] . "<br>";
    
    
    $ind++;
}

$deletar  = remove('usuarios',$mat[0]);

//grava log

$dados['acao'] = "Exclusão Usuário - " . $mat[0]   ;
save('log',$dados);

header('location: lista_user.php');
?>

