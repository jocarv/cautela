<?php
require_once('../config.php');
require_once(DBAPI);
$id = $_GET['id'];
?>
 <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">
<div class="content::before">
<div class="row">
	<div class="form-group col-md-12 text-center">
	<h1 class="title-second">Bem Vindo !</h1>
	</div>
</div>
<div class="row">
			<div class="form-group col-md-12 text-center">
				<a href="<?php echo BASEURL;?>arquivos/impe_cau.php?id=<?php echo $id;?>" class="btn btn-success align-middle">Ver Cautela</a>
			</div>
</div>			
<div class="row">
			<div class="form-group col-md-12 text-center">
				<a href="<?php echo BASEURL;?>login2/troca_senha.php?id=<?php echo $id;?>" class="btn btn-warning align-middle">Trocar Senha</a>
			</div>
</div>
<div class="row">
			<div class="form-group col-md-12 text-center">
				<a href="<?php echo BASEURL;?>" class="btn btn-danger align-middle">Sair</a>
			</div>
</div>

</div>