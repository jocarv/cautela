<?php

require_once('../config.php');
require_once(DBAPI);
include(HEADER_TEMPLATE);
$id = $_GET['id'];
$database = open_database();
$string = "SELECT * FROM tipomat WHERE id = $id ";
$result = $database->query($string);

foreach($result as $row){
   
   
}
?>


<div class="container">
	<form action="grava_etipo_mat.php" method="post">
		<!-- area de campos do form -->
		
		<div class="row">
			
			<div class="form-group col-sm-7">
				<label for="data_val">Tipo de Material</label> 
				<input type="text" maxlength="20" value="<?php echo $row['tipo']; ?>"	class="form-control" name="customer['tipo']">
				<input type="hidden" name="customer['id']" value="<?php echo $id?>" >
			</div>

	
		</div>
				
		
				
		<div class="row">	
		<div class="form-group col-md-2 text-center">	
		<input type="submit" value="Salvar" class="btn btn-primary align-middle"'>
		</div>
		<div class="form-group col-md-2 text-center">
				<a href="<?php echo BASEURL;?>arquivos/lista_tipo_mat.php" class="btn btn-danger align-middle"'>Voltar</a>
		</div>
		</div>
	</form>

</div>
