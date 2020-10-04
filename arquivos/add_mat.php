<?php

require_once('../config.php');
require_once(DBAPI);
include(HEADER_TEMPLATE);

$hoje = date("Y-m-d");

$database = open_database();
$sql = "SELECT * FROM tipoMat ";
$result = $database->query($sql);


?>


<div class="container">
	<form action="grava_mat.php" method="post">
		<!-- area de campos do form -->
		
		<div class="row">
			
			<div class="form-group col-md-3">
				<label for="campo3">Tipo Material</label>
				 <select class="form-control form-control-md" name="customer['tipo']" required>
				 
				 <?php 
				  foreach($result as $row){
				      echo "<option value=". $row[id].">".$row['tipo']."</option>";
					
				  }
				 ?>	
				
				</select>
			</div>
			<div class="form-group col-sm-7">
				<label for="data_val">Descricao</label> <input type="text" maxlength="100"	class="form-control" name="customer['descri']" required>
			</div>

	
		</div>
		<div class="row">

			<div class="form-group col-md-3">
				<label for="campo3">Quantidade Existente</label> <input type="text"
					class="form-control" name="customer['quanti']" required maxlength="4">
			</div>
			<div class="form-group col-md-3">
				<label for="campo3">Necessario para a SU</label> <input type="text"
					class="form-control" name="customer['nece']"  required maxlength="4">
			</div>
			
			
		</div>
		<div class="row">

			<div class="form-group col-md-6">
				<label for="campo3">Observação</label> <input type="text"
					class="form-control" name="customer['obs']" >
			</div>
						
		</div>
		<div class="row">	
		<div class="form-group col-md-2 text-center">	
		<input type="submit" value="Salvar" class="btn btn-primary align-middle"'>
		</div>
		<div class="form-group col-md-2 text-center">
				<a href="<?php echo BASEURL;?>arquivos/lista_mat.php" class="btn btn-danger align-middle"'>Voltar</a>
		</div>
		</div>
	</form>

</div>
<script>

function onlynumber(evt) {
	   var theEvent = evt || window.event;
	   var key = theEvent.keyCode || theEvent.which;
	   key = String.fromCharCode( key );
	   //var regex = /^[0-9.,]+$/;
	   var regex = /^[0-9.]+$/;
	   if( !regex.test(key) ) {
	      theEvent.returnValue = false;
	      if(theEvent.preventDefault) theEvent.preventDefault();
	   }
	}


</script>
