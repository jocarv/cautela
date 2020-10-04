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
	<form action="grava_user.php" method="post">
		<!-- area de campos do form -->

		<div class="row">

			<div class="form-group col-md-2">
				<label for="campo3">Posto / Graduacao</label> <select
					class="form-control form-control-md" name="customer['pstgrad']"
					required>
				 
				 <?php
    foreach ($result as $row) {
        echo "<option value='" . $row['pg'] . "'>" . $row['pg'] . "</option>";
    }
    ?>	
				
				</select>
			</div>
			<div class="form-group col-sm-4">
				<label for="data_val">Nome (para identificação)</label> <input
					type="text" maxlength="20" class="form-control"
					name="customer['nomeg']">
			</div>


		</div>
		<div class="row">

			<div class="form-group col-md-3">
				<label for="campo3">Usuário (para fazer Login)</label> <input
					type="text" class="form-control" name="customer['ugem']" required
					maxlength="50">
			</div>
			<div class="form-group col-md-3">
				<label for="campo3">Senha (será trocada no 1° Acesso</label> <input
					type="text" class="form-control" name="customer['senha']" value="1234" disabled
					maxlength="50">
			</div>
		</div>
		<div class="row">	
			<div class="form-group col-md-3">
				<label for="campo3">Nível de Acesso</label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<input type="radio" name="customer['r1']" value="2"
								aria-label="Botão radio para acompanhar input text" checked>
						</div>
					</div>
					<input type="text" class="form-control"
						value="2 - Operador (Consulta, Incluir) "
						aria-label="Input text com botão radio" disabled>
				</div>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<input type="radio" name="customer['r1']" value="3"
								aria-label="Botão radio para acompanhar input text">
						</div>
					</div>
					<input type="text" class="form-control" value="3 - Administrador "
						aria-label="Input text com botão radio" disabled>
				</div>



			</div>

		</div>



		
		<div class="row" >
			<input class="btn btn-primary"   type="submit" value="Salvar">
		</div>

	</form>

</div>
