<?php

require_once('../config.php');
require_once(DBAPI);
include(HEADER_TEMPLATE);



$database = open_database();
$string = "SELECT * FROM dados";
$result = $database->query($string);
foreach($result as $row){
   
}


?>

<div class="container">
	<form action="grava_esu.php" method="post">
		<!-- area de campos do form -->
		
		<div class="row">
			<div class="form-group col-md-4">
				<label for="data_val">1ª Subordinação</label> <input type="text" maxlength="100" value="<?php echo $row['Sub1']?>"	class="form-control" name="customer['sub1']">
		
			</div>
			<div class="form-group col-md-3">
				<label for="data_val">2ª Subordinação</label> <input type="text" maxlength="100" value="<?php echo $row['Sub2']?>"	class="form-control" name="customer['sub2']">
			</div>
			<div class="form-group col-md-5">
				<label for="data_val">3ª Subordinação</label> <input type="text" maxlength="100" value="<?php echo $row['Sub3']?>"	class="form-control" name="customer['sub3']">
			</div>
  		</div>
	
		

		<div class="row">
			
			<div class="form-group col-md-4">
				<label for="data_val">4ª Subordinação</label> <input type="text" maxlength="100" value="<?php echo $row['Sub4']?>"	class="form-control" name="customer['sub4']">
			</div>
			<div class="form-group col-md-3">
				<label for="data_val">Abreviatura da Subunidade</label> <input type="text" maxlength="100" value="<?php echo $row['abrevsu']?>"	class="form-control" name="customer['subu']">
			</div>
			<div class="form-group col-md-5">
				<label for="data_val">Subunidade</label> <input type="text" maxlength="100" value="<?php echo $row['Sub5']?>"	class="form-control" name="customer['sub5']">
			</div>
			
  		</div>
  		
  		
			
		<div class="row">
			
			<div class="form-group col-md-4">
				<label for="data_val">Cmt Subunidade (Nome - Posto)</label> <input type="text" maxlength="100" value="<?php echo $row['cmtbia']?>"	class="form-control" name="customer['cmtbia']">
			</div>
			<div class="form-group col-md-3">
				<label for="select">Simbolo da SU</label> 
				 <select class="form-control form-control-md" name="customer['mascote']">
				<option <?php if ($row['imagem']=="nenhum") { echo "selected";}?> value='nenhum' >Nenhum</option>
				<option <?php if ($row['imagem']=="aguia") { echo "selected";}?>  value='aguia'>Aguia</option>
				<option <?php if ($row['imagem']=="pantera") { echo "selected";}?> value='pantera'>Pantera</option>
				<option <?php if ($row['imagem']=="morcego") { echo "selected";}?> value='morcego'>Morcego</option>
				</select>
			</div>
			
			<div class="form-group col-md-5">
				<label for="data_val">Encarreado de Material (Nome - Posto)</label> <input type="text" maxlength="100" value="<?php echo $row['encmat']?>"	class="form-control" name="customer['encmat']">
			</div>
  		</div>	
  		
  		<div class="row">	
		<div class="form-group col-md-2 text-center">	
		<input type="submit" value="Salvar" class="btn btn-primary align-middle"'>
		</div>
		<div class="form-group col-md-2 text-center">
				<a href="<?php echo BASEURL;?>arquivos/calend.php" class="btn btn-danger align-middle"'>Voltar</a>
		</div>
		</div>
	</form>

</div>
