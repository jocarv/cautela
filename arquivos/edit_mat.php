<?php

require_once('../config.php');
require_once(DBAPI);
include(HEADER_TEMPLATE);



$id = $_GET['id'];


$database = open_database();
$string = "SELECT * FROM material WHERE id = $id ";

$result = $database->query($string);

$string1 = "SELECT * FROM tipomat ";

$result1 = $database->query($string1);

foreach($result as $row){
    
}


?>


<div class="container">
	<form action="grava_emat.php" method="post">
		<!-- area de campos do form -->
		
		<div class="row">
			
			<div class="form-group col-md-2">
				<label for="campo3">Tipo Material</label>
				 <select class="form-control form-control-md" name="customer['tipo']" required>
				 
				 <?php 
				 foreach($result1 as $row1){
				     if ($row['tipo']==$row1[id]){
				         echo "<option value=". $row1[id]." selected >".$row1['tipo']."</option>";
				         echo $row['tipo'];
				     }else{
				         echo "<option value=". $row1[id].">".$row1['tipo']."</option>";
				         echo $row['tipo'];
				     }
				 }
				 ?>	
				
				</select>
			</div>
			<div class="form-group col-sm-7">
				<label for="data_val">Descricao</label> <input type="text" maxlength="100" value="<?php echo $row['descri']?>"	class="form-control" name="customer['descri']">
			</div>

	
		</div>
		<div class="row">

			<div class="form-group col-md-2">
				<label for="campo3">Quantidade Existente</label> <input type="text" value="<?php echo $row['quantidade']?>"
					class="form-control" name="customer['quanti']" required maxlength="4">
			</div>
			<div class="form-group col-md-2">
				<label for="campo3">Necessario para a SU</label> <input type="text" value="<?php echo $row['necessi']?>"
					class="form-control" name="customer['nece']"  required maxlength="4">
			</div>
			
			
		</div>
		<div class="row">

			<div class="form-group col-md-7">
				<label for="campo3">Observação</label> <input type="text" value="<?php echo $row['obs']?>"
					class="form-control" name="customer['obs']" >
					<input type="hidden" name="customer['id']" value="<?php echo $row['id']?>" >
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
