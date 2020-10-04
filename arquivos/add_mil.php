<?php

require_once('../config.php');
require_once(DBAPI);
include(HEADER_TEMPLATE);

$hoje = date("Y-m-d");

$database = open_database();
$sql = "SELECT * FROM pg ";
$result = $database->query($sql);


?>


<div class="container">
	<form action="grava_mil.php" method="post">
		<!-- area de campos do form -->
		
		<div class="row">
			
			<div class="form-group col-md-2">
				<label for="campo3">Posto / Grad</label>
				 <select class="form-control form-control-md" name="customer['pstgrad']" required>
				 
				 <?php 
				  foreach($result as $row){
				      echo "<option value=". $row[id].">".$row['pg']."</option>";
					
				  }
				 ?>	
				
				</select>
			</div>
			<div class="form-group col-sm-3">
				<label for="data_val">Nome de Guerra</label> <input type="text" maxlength="20"	class="form-control" name="customer['nomeg']">
			</div>

	
		</div>
		<div class="row">

			<div class="form-group col-md-5">
				<label for="campo3">Nome Completo</label> <input type="text"
					class="form-control" name="customer['ugem']" required maxlength="50">
			</div>
			
			
		</div>
		
		<div class="row">	
		<div class="form-group col-md-2 text-center">	
		<input type="submit" value="Salvar" class="btn btn-primary align-middle"'>
		</div>
		<div class="form-group col-md-2 text-center">
				<a href="<?php echo BASEURL;?>arquivos/lista_mil.php" class="btn btn-danger align-middle"'>Voltar</a>
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
