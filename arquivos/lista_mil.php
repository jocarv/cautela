<?php
session_start();
$nivel = $_SESSION['UsuarioNivel'];

require_once ('../config.php');
require_once (DBAPI);
include (HEADER_TEMPLATE);

$database = open_database();
$sql = "SELECT * FROM listamil ORDER BY ordem";
$result = $database->query($sql);
$result1 = find_all("cautela");

?>
<style>
/* Sortable tables */
table.sortable thead {
	background-color: #eee;
	color: #666666;
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

	<div class="row">
		<div class="form-group col-md-2 text-center">
			<a href='<?php echo BASEURL;?>arquivos/add_mil.php' class='btn btn-primary align-middle'>Adicionar Novo MIlitar</a>
		</div>
		<div class="form-group col-md-2 text-center">
			<a href="<?php echo BASEURL;?>arquivos/calend.php"
				class="btn btn-primary align-middle"'>Voltar</a>
		</div>
	</div>

	<table id="tabela" class="table-bordered table-hover">
		<tr style="background-color: beige">

			<th><input type="text" id="txtColuna1" size="4" /></th>
			<th><input type="text" id="txtColuna3" size="10" /></th>
			<th><input type="text" id="txtColuna2" size="4" /></th>
			<th></th>
			<th></th>
		</tr>

		<tr style="background-color: beige">
			<th class="text-center"><small>PST/Grad</th>
			<th class="text-center"><small>Nome Completo</th>
			<th class="text-center"><small>Itens Cautelados</th>
			<th class="text-center"><small>Editar</th>
			<th class="text-center"><small>Excluir</th>

		</tr>
	
	<?php
$itens = 0;
foreach ($result as $row) {

    $nome = $row['nome'];
    $nomeg = $row['nomeg'];
    $ng = explode(" ", $nomeg);

    $patern = array();

    array_push($patern, "/($ng[0])/");
    if (isset($ng[1])) {
        array_push($patern, "/($ng[1])/");
    }
    if (isset($ng[2])) {
        array_push($patern, "/($ng[2])/");
    }

    foreach ($result1 as $row1) {
        if ($row['id'] == $row1['militar']) {
            $itens = $itens + $row1['quantidade'];
        }
    }

    echo "<tr><td>" . $row['pstgrad'] . "</td><td><a href='cautela.php?id=" . $row['id'] . "'>" . preg_replace($patern, '<b>\\1</b>', $nome) . "</a></td><td title='Clique aqui para alterar a cautela' class='text-center'>" . $itens . "</td><td title='Edita os dados do  Militar' class='text-center'><a href='edit_mil.php?id=" . $row['id'] . "'><img src='../images/edit.png' width='18px'></a></td>";

    if ($nivel == '3') {
        if ($itens == 0) {

            ?>
                <td title='Exclui o  Militar' class='text-center'><button
				type='button'
				onclick="chamamodal2(<?php echo $row['id'] ?>,'<?php echo $row['pstgrad'].  $nomeg ?>')"
				class='btn btn-outline-danger btn-sm' style="padding: 0px 1px;">
				<img src='../images/x.gif' width='20px'>Ecluir
			</button></td>
		</tr>
            
            <?php
        } else {

            echo "<td title='É necessário desacautelar o material antes de excluir o  Militar' class='text-center'><a href=''><img src='../images/x1.gif' width='20px'></a></td></tr>";
        }
        $itens = 0;
    } else {
        echo "<td ></td></tr>";
        $itens = 0;
    }
}
?>
<tfoot>
			<tr style="background-color: beige">
				<th></th>
				<th></th>
				<th></th>
			</tr>
		</tfoot>


	</table>


</div>

<!-- Modal -->
<div class="modal" id="modalExemplo2" tabindex="-1" role="dialog"
	aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content" style="width: 700px;">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel2">Exclusão de
					Militar..</h5>

				<button type="button" class="close" data-dismiss="modal"
					aria-label="Excluir">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">


				<h5 class="modal-text" id="exampleModalLabel3">Tem certeza que quer
					excluir este item.</h5>
				<h5 class="modal-text" id="exampleModalLabel3">este procedimento não
					admite retorno.</h5>

			</div>

			<div class="modal-footer">
				<form method="post">

					<input id="visualizar" type="hidden" name="customer['cnpj4']"> <input
						id="visualizar1" type="hidden" name="customer['cnpj5']">

					<button name="customer['cnpj1']" value="excluir" type="submit"
						class="btn btn-danger" formaction="delete_mil.php">Excluir</button>

					<button name="customer['cnpj2']" value="cancelar" type="submit"
						class="btn btn-primary" data-dismiss="modal">Cancelar</button>
				</form>
			</div>


		</div>

	</div>

</div>
<script>

        
   function chamamodal2(id, militar){
            
	$('#visualizar1').html(id); 
	document.getElementById("visualizar").value = id; 
	document.getElementById("visualizar1").value = militar; 
	
	$('#modalExemplo2').modal('show');
	
}
</script>