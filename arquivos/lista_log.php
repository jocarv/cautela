<?php
require_once('../config.php');
require_once(DBAPI);
include(HEADER_TEMPLATE);
$data = date("Y-m-d", strtotime($_GET['data']));


$database = open_database();
$sql = "SELECT * FROM log WHERE DATE(data)='$data'";
$result = $database->query($sql);


?>
 <style>
/* Sortable tables */
table.sortable thead {
    background-color:#eee;
    color:#666666;
    font-weight: bold;
    cursor: default;
}
 
</style>
 
    <script type="text/javascript" src="script.js"></script>    
<head>

<script>
$(function(){
    $("#tabela input").keyup(function(){       
        var index = $(this).parent().index();
        var nth = "#tabela td:nth-child("+(index+1).toString()+")";
        var valor = $(this).val().toUpperCase();
        $("#tabela tbody tr").show();
        $(nth).each(function(){
            if($(this).text().toUpperCase().indexOf(valor) < 0){
                $(this).parent().hide();
            }
        });
            });
 
    $("#tabela input").blur(function(){
        $(this).val("");
    });
});

</script>

<div class="container">

<div class="form-group col-md-12">
				<button type="button" class="btn btn-default btn-sm">Eventos Realizados no dia <?php echo date("d/m/Y",strtotime($data)) ?>  </button> <button type='button' onClick='history.go(-1)'  class='btn btn-outline-primary btn-sm mesmo-tamanho' >Voltar</button>
			</div>
	<table id="tabela" class="table-bordered table-hover">
		<tr style="background-color: beige">

			<th><input type="text" id="txtColuna1" size="6" /></th>
						<th><input type="text" id="txtColuna3" size="30" /></th>
			<th><input type="text" id="txtColuna2" size="10" /></th>
			<th><input type="text" id="txtColuna2" size="10" /></th>
			<th></th>
					</tr>

		<tr style="background-color: beige">
			<th class="text-center"><small>Usuário</th>
						<th class="text-center"><small>Evento</th>
 			<th class="text-center"><small>Data</th>
 			<th class="text-center"><small>Hora</th>
		</tr>
	
	<?php 
	       foreach ($result as $row) {
	           
	       echo "<tr><td>".$row['usuario']."</td><td>". $row['acao']."</td><td >".date("d/m/Y",strtotime($row['data']))."</td><td >".date("H:d:s",strtotime($row['data']))."</td></tr>";
            
	       }
	    ?>
	</table>


</div>