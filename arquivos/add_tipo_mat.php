<?php

require_once('../config.php');
require_once(DBAPI);
include(HEADER_TEMPLATE);



?>


<div class="container">
	<form action="grava_tipo_mat.php" method="post">
		<!-- area de campos do form -->
		
		<div class="row">
			
			<div class="form-group col-sm-7">
				<label for="data_val">Tipo de Material</label> <input type="text" maxlength="20"	class="form-control" name="customer['tipo']">
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
