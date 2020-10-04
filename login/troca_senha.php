<?php 
session_start();
$id = $_SESSION['UsuarioID'];
$usuario = $_SESSION['Usuario'];
?>

<link rel="stylesheet" href="../css/bootstrap.css">
<script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>




<div  class="container" style="background-image: url('../images/images.jpg'); background-size: 100%100%; background-color: #0B0B61; padding: 10px 10px; border-top: 5px solid #FFBF00; border-bottom: 5px solid #FFBF00">
		<div style="float: left">
			<img src="../images/logo.png">
		</div>
		<div style="font-size: 20; color: #FFF; padding: 0px 10px 10px 100px;">

			3° Grupo de Artilharia Antiaérea<br> Grupo Conde de Caxias <br>Almoxarifado
		</div>
</div>


<br><br><br>

<div class="container" align="center"
		style="border-radius: 20px; background-color: #A9D0F5; max-width: 500px; box-shadow: 10px 10px 5px #aaaaaa;">
	   <!-- Formulário de Login -->
		<form onsubmit="validarSenha();" class="form-inline" name="formulario" id="formulario"	action="grava_al_senha.php" method="post">
		<fieldset><legend>Trocar Senha</legend>
			<hr>
			<div class="row" >
				<div class="form-group col-md-13" style="padding-left: 120px;">
					<label for="txUsuario">Usuário -  <?php echo $usuario;?></label> 
					<input type="hidden" name="id" value=<?php echo $id;?>>
				</div>
			</div>
			
<hr>

<br>
<div class="row text-right">
	<div class="form-group col-md-13" style="padding-left: 85px;">
		<label for="txSenha">Nova Senha </label> <input type="password"
			class="form-control" name="senha" id="senha" required /> <img
			id="olho1" width="30px" src="../images/olho.png" />
	</div>

</div>
<BR>
<div class="row">
	<div class="form-group col-md-13" style="padding-left: 60px;">
		<label for="txSenha">Confirma Senha <input type="password"
			class="form-control" name="confirma" id="confirma"
			onblur="validarSenha()" required /> <img width="25px" id="olho12"
			src="../images/x.gif" /></label>
	</div>
</div>
<BR>
<div class="row" align="center">
	<div class="form-group col-md-13" style="padding-left:200px;">
		<input type="submit" class="btn btn-primary" value="Enviar" />
	</div>
</div>
<BR>

</fieldset>
</form>

</div>
<script> 

  function validarSenha(){
        senha = document.formulario.senha.value
        confirma = document.formulario.confirma.value
        if (senha == confirma) return true
        else alert("As SENHAS não Conferem!")
        document.formulario.confirma.value ="";
        return false
        }

$( "#olho1" ).mousedown(function() {
	  $("#senha").attr("type", "text");
	});

$( "#olho1" ).mouseup(function() {
	  $("#senha").attr("type", "password");
	});


   </script>
  
