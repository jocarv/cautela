

<link rel="stylesheet" href="../css/bootstrap.css">
<script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<style type="text/css">
   .block {
      display: block;
   }
   
  
   
</style>



<div  class="container" style="background-image: url('../images/images.jpg'); background-size: 100%100%; background-color: #0B0B61; padding: 10px 10px; border-top: 5px solid #FFBF00; border-bottom: 5px solid #FFBF00">
		<div style="float: left">
			<img src="../images/logo.png">
		</div>
		<div style="font-size: 20; color: #FFF; padding: 0px 10px 10px 100px;">

			3° Grupo de Artilharia Antiaérea<br> Grupo Conde de Caxias <br>
		</div>
</div>


<br><br><br>

<div class="container" align="center"
		style="border-radius: 20px; background-color: #A9D0F5; max-width: 500px; box-shadow: 10px 10px 5px #aaaaaa;">
	   <!-- Formulário de Login -->
		<form onsubmit="validarSenha();" class="form-inline" name="formulario" id="formulario"	action="grava.php" method="post">
		<fieldset><legend>Cadastrar Usuário</legend>
			<hr>
			<div class="row" >
				<div class="form-group col-md-13" style="padding-left: 120px;">
					<label for="txUsuario">Usuário</label> <input type="text" class="form-control" name="Usuario" id="Usuario" maxlength="25"	required />
				</div>
			</div>
			<div class="row">
      		<div  id="resultado" ></div>
			</div>
<hr>
<label>Nível de Acesso</label>
<div class="row " style="padding-left: 120px;">
	<input class="form-control-md" type="radio" name="nivel"
		value="1" checked="True"><label>Visualisador</label>
</div>
<div class="row " style="padding-left: 120px;">
	<label class="block"><input class="form-control-md" type="radio"
		name="nivel" value="2">Operador</label>
</div>
<div class="row " style="padding-left: 120px;">
	<label class="block"><input class="form-control-md" type="radio"
		name="nivel" value="3">Administrador </label>

</div>
<br>
<div class="row text-right">
	<div class="form-group col-md-13" style="padding-left: 130px;">
		<label for="txSenha">Senha </label> <input type="password"
			class="form-control" name="senha" id="senha" required /> 
			<img id="olho1"  src="../images/olho.png" width='30px'/>
	</div>

</div>
<BR>
<div class="row">
	<div class="form-group col-md-13" style="padding-left: 60px;">
		<label for="txSenha">Confirma Senha <input type="password"
			class="form-control" name="confirma" id="confirma"
			onkeyup="validarSenha('img')" required /> 
			
	</div>
	<div id='tooltip' style='display:block;'><img id="img"  src='../images/x.gif'  width='30px'/></div>
	
</div>
<BR>
<div class="row" align="center">
	<div class="form-group col-md-4" style="padding-left:200px;">
		<input name="botao" type="submit" class="btn btn-primary" value="Enviar" />
		
	</div>
	<div class="form-group col-md-4" style="padding-left:100px;">
		<input type="button" class="btn btn-alert" onclick='history.go(-1)'  value="Cancelar" />
	</div>
	
</div>
<BR>

</fieldset>



</form>

</div>
<script> 




  function validarSenha(objeto){
	   
	    senha = document.formulario.senha.value
        confirma = document.formulario.confirma.value
        if (senha == confirma){  
        	
        	document.getElementById(objeto).src = "../images/selec.gif";
            return true
        } else 
       // document.formulario.confirma.value ="";
	    document.getElementById(objeto).src = "../images/x.gif";
        return false
        }


$( "#olho1" ).mousedown(function() {
	  $("#senha").attr("type", "text");
	});

$( "#olho1" ).mouseup(function() {
	  $("#senha").attr("type", "password");
	});


   </script>
  
<script type="text/javascript">
 $(function(){ // declaro o início do jquery
	    $("input[name='Usuario']").blur( function(){  

	        var nomeUsuario = $("input[name='Usuario']").val();
	        //alert(nomeUsuario);

	        $.post('usuario.php',{nomeUsuario: nomeUsuario},function(data){
	                $('#resultado').html(data);//onde vou escrever o resultado
					if (data.length > 1){
	                $("#Usuario").val("");
					}
	   	     	        });
	});
 });

</script>

 
