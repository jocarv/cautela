<?php
require_once('../config.php');
require_once(DBAPI);
include(HEADER_TEMPLATE);

$database = open_database();
$sql = "SELECT * FROM tipomat";
$result = $database->query($sql);


?>

 
    <script type="text/javascript" src="script.js"></script>    
<head>



<div class="container">

<div class="row">
			<div class="form-group col-md-3 text-center">
				<a href="<?php echo BASEURL;?>arquivos/add_tipo_mat.php" class="btn btn-primary align-middle"'>Adicionar Novo Tipo de Material</a>
			</div>
			<div class="form-group col-md-2 text-center">
				<a href="<?php echo BASEURL;?>arquivos/calend.php" class="btn btn-primary align-middle"'>Voltar</a>
			</div>
</div>
	<table id="tabela" class="table-bordered table-hover">
		

		<tr style="background-color: beige">
			<th class="text-center"><small>ordem</th>
						<th class="text-center"><small>Tipo</th>
 			<th class="text-center"><small>Ação</th>
			
		</tr>
	
	<?php 
	            
	           $itens=0;
	foreach ($result as $row){
	           
	         	           
	           echo "<tr><td class='text-center'>".$row['id']."</td>
                    <td class='text-left' >".$row['tipo']."</td>
                    <td title='Edita os dados do tipo de Material' class='text-center'><a href='edit_tipo_mat.php?id=" . $row['id'] . "'><img src='../images/edit.png' width='20px'></a></td></tr>";
	 }
	    ?>


	</table>


</div>
