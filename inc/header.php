<?php 
if (!isset($_SESSION)) session_start();
//require_once('./config.php');

// Verifica se nÃ£o hÃ¡ a variÃ¡vel da sessÃ£o que identifica o usuÃ¡rio

if (!isset($_SESSION['UsuarioID'])) {
    // DestrÃ³i a sessÃ£o por seguranÃ§a
    session_destroy();
    // Redireciona o visitante de volta pro login
   // header("Location: ../login/login.php"); exit;
    
    $nivel=0;
}else{
    $nivel = $_SESSION['UsuarioNivel'];
    $usuario = $_SESSION['Usuario'];
  
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Reserva de Material</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.css">
    <script type="text/javascript" src="<?php echo BASEURL; ?>js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo BASEURL; ?>js/bootstrap.min.js"></script>
    
    <style>
        body {
            padding-top: 5px;
            padding-bottom: 20px;
        }
    </style>
       
</head>
<body>

	<div class="container" style="  background-size: 100%100%; background-color: #0B0B61; padding: 10px 10px; border-top: 5px solid #FFBF00; border-bottom: 5px solid #FFBF00">
		<div style="float: left">
			<img src="<?php echo BASEURL; ?>images/logo.png">
		</div>
		<div style="font-size: 20; color: #FFF; padding: 0px 10px 10px 100px;">

			3° Grupo de Artilharia Antiaérea<br> Grupo Conde de Caxias <br>Bateria de Comando e Serviços - Reserva de Material ver 1.567
		</div>
	</div>
		
<div class="container" style="height: 30px; padding: 1px 1px 1px 1px">
	
	<nav class="navbar navbar-expand-sm navbar-light bg-warning" style="height: 20px;">
       
        <button class="navbar-toggler navbar-expand-sm" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"  style="font-size: 0.75rem;">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse navbar-expand-sm" id="navbarSupportedContent" >
           <a class="navbar-brand" href="#" style="font-size: 0.75rem;">Home</a>
        
           <ul class="navbar-nav  ml-auto topnav">
<?php If ($nivel == 3){              
           echo "
<li class='nav-item active'><a class='nav-link' href='".BASEURL."arquivos/calend.php'  style='font-size: 0.75rem;'>Eventos<span class='sr-only'>(current)</span></a></li>

<li class='nav-item'><a class='nav-link' href='".BASEURL."arquivos/lista_mil.php'  style='font-size: 0.75rem;'>Militares</a></li>

<li class='nav-item'><a class='nav-link' href='".BASEURL."arquivos/lista_mat.php'  style='font-size: 0.75rem;'>Material</a></li>
<li class='nav-item dropdown'><a class='nav-link dropdown-toggle'  href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'  style='font-size: 0.75rem;'>Configurar</a>
<div class='dropdown-menu' aria-labelledby='navbarDropdown'><a class='dropdown-item' href='../login/lista_user.php'  style='font-size: 0.75rem;' >Usuários</a>
<a class='dropdown-item' href='edit_su.php' style='font-size: 0.75rem;'>Alterar Dados</a>
<a class='dropdown-item' href='lista_tipo_mat.php' style='font-size: 0.75rem;'>Tipo de Material</a>

<a class='dropdown-item'  href='../login/troca_senha.php' style='font-size: 0.75rem;'>Trocar Senha</a>
<div class='dropdown-divider'  style='font-size: 0.75rem;'></div><a class='dropdown-item' href='#'  style='font-size: 0.75rem;'></a></div></li>";
}
If ($nivel == 2){
    echo "<li class='nav-item active'><a class='nav-link' href='calend.php'  style='font-size: 0.75rem;'>Eventos<span class='sr-only'>(current)</span></a></li>

<li class='nav-item'><a class='nav-link' href='lista_mil.php'  style='font-size: 0.75rem;'>Militares</a></li>

<li class='nav-item'><a class='nav-link' href='lista_mat.php'  style='font-size: 0.75rem;'>Material</a></li>
<li class='nav-item dropdown'><a class='nav-link dropdown-toggle'  href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'  style='font-size: 0.75rem;'>Configurar</a>
<div class='dropdown-menu' aria-labelledby='navbarDropdown'>
<a class='dropdown-item' href='lista_tipo_mat.php' style='font-size: 0.75rem;'>Tipo de Material</a>

<a class='dropdown-item'  href='../login/troca_senha.php' style='font-size: 0.75rem;'>Trocar Senha</a>
<div class='dropdown-divider'  style='font-size: 0.75rem;'></div><a class='dropdown-item' href='#'  style='font-size: 0.75rem;'></a></div></li>";



}

?>                
	           <li class="nav-item">
                    <a class="nav-link" href="../deslogar.php"  style="font-size: 0.75rem;">Sair</a>
                </li>
                
            </ul>
        
        
        
        </div>

      </nav>
</div>
    
</body>
</html>    