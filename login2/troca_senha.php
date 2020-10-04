<?php

require_once('../config.php');
require_once(DBAPI);


$id = $_GET['id'];


$database = open_database();
$string = "SELECT * FROM militar WHERE id= $id ";

$result = $database->query($string);



foreach($result as $row){
    
}

$string1 = "SELECT * FROM pg where id=".$row['pstgrad'];

$result1 = $database->query($string1);
foreach($result1 as $row1){
    
}
$hoje = date("Y-m-d");


?>
<script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
 <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.css">
<div class="container">
	<form onsubmit="validarSenha();" action="grava_al_senha.php" method="post" name="formulario" id="formulario">
		<!-- area de campos do form -->
		
		<div class="row">
			
			<div class="form-group col-md-3">
				<label for="data_val">Posto/Grad</label> <input type="text" maxlength="30"	value="<?php echo $row1['pg']?>" class="form-control" readonly >
				</select>
			</div>
			<div class="form-group col-sm-3">
				<label for="data_val">Nome de Guerra</label> <input type="text" maxlength="30"	value="<?php echo $row['nomeg']?>" class="form-control" readonly>
			</div>
		</div>

		<div class="row">

			<div class="form-group col-md-6">
				<label for="campo3">Nome Completo</label> <input type="text"
					class="form-control" value="<?php echo $row['nome']?>" readonly>
					<input type="hidden" name="id" value="<?php echo $id ?>" >
			</div>
			
			
		</div>
		<div class="row">
			
			<div class="form-group col-md-3">
				<label for="data_val">Nova Senha</label> <input type="password" maxlength="20"	name="senha" id="senha" class="form-control" >
				
			</div>
			<div class="form-group col-sm-3">
				<label for="data_val">Confirma Senha</label> <input type="password" maxlength="20"	onblur="validarSenha()" id="confirma" class="form-control" >
			</div>
		</div>
		
		<div class="row">	
		<div class="form-group col-md-2 text-center">	
		<input type="submit" id="botao" value="Salvar" class="btn btn-primary align-middle"'>
		</div>
		<div class="form-group col-md-2 text-center">
				<a href="<?php echo BASEURL;?>login2/index.php?id=<?php echo $id ?>" class="btn btn-danger align-middle"'>Voltar</a>
		</div>
		</div>		
		
	</form>

</div>
<script> 

  function validarSenha(){
	
        senha = document.formulario.senha.value;
        confirma = document.formulario.confirma.value;
       
        if (senha == confirma) {
        	 document.formulario.botao.disabled = false;
        	 return true
        }
        else alert("As SENHAS não Conferem!")
        document.formulario.confirma.value ="";
        document.formulario.botao.disabled = true;
        return false
        }



   </script>
