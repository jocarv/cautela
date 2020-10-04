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

$deletar  = remove('cautela',$mat[0]);

//grava log

$dados['acao'] = "Exclusão Mat Cautela - " . $mat[2] . " - " . $mat[3] . " - " . $mat[4] . " - " . $mat[5]. " - " . $mat[6]  ;
save('log',$dados);

header('location: cautela.php?id='.$mat[1]);
   ?>

