<?php

require_once('../config.php');
require_once(DBAPI);
include(HEADER_TEMPLATE);

$id = $_GET['id'];


$database = open_database();
$string = "SELECT * FROM militar WHERE id= $id ";

$result = $database->query($string);
$string1 = "SELECT * FROM pg ";

$result1 = $database->query($string1);

foreach($result as $row){
    
}
$hoje = date("Y-m-d");


?>


<div class="container">
	<form action="grava_emil.php" method="post">
		<!-- area de campos do form -->
		
		<div class="row">
			
			<div class="form-group col-md-3">
				<label for="campo3">Posto / Graduacao</label>
				 <select class="form-control form-control-md" name="customer['pstgrad']" required>
					<?php 
				  foreach($result1 as $row1){
				      if ($row['pstgrad']==$row1[id]){
				          echo "<option value=". $row1[id]." selected >".$row1['pg']."</option>";
				          echo $row['pstgrad'];
				      }else{
				      echo "<option value=". $row1[id].">".$row1['pg']."</option>";
				      echo $row['pstgrad'];
				      }
				  }
				 ?>	
				</select>
			</div>
			<div class="form-group col-sm-3">
				<label for="data_val">Nome de Guerra</label> <input type="text" maxlength="30"	value="<?php echo $row['nomeg']?>" class="form-control" name="customer['nomeg']">
			</div>

	
		</div>
		<div class="row">

			<div class="form-group col-md-6">
				<label for="campo3">Nome Completo</label> <input type="text"
					class="form-control" name="customer['ugem']" value="<?php echo $row['nome']?>" required maxlength="50">
					<input type="hidden" name="customer['id']" value="<?php echo $row['id']?>" >
			</div>
			<div class="form-group col-md-2">
				<label for="campo3">Resetar Senha</label> <input type="checkbox"
					class="form-control" name="customer['senha']"   >
					
			</div>
			
		</div>
		
		<div class="row">	
		<div class="form-group col-md-2 text-center">	
		<input type="submit" value="Salvar" class="btn btn-primary align-middle">
		</div>
                 
		<div class="form-group col-md-2 text-center">
				<a href="<?php echo BASEURL;?>arquivos/lista_mil.php" class="btn btn-danger align-middle">Voltar</a>
		</div>
		</div>
	</form>

</div>
