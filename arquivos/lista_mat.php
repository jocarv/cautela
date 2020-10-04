<?php
session_start();
$nivel = $_SESSION['UsuarioNivel'];

require_once('../config.php');
require_once(DBAPI);
include(HEADER_TEMPLATE);

$database = open_database();
$sql = "SELECT * FROM listamat ORDER BY tipo, descri";
$result = $database->query($sql);

$sql1 = "SELECT * FROM cautela";
$result1 = $database->query($sql1);

?>
 <style>
/* Sortable tables */
table.sortable thead {
    background-color:#eee;
    color:#666666;
    font-weight: bold;
    cursor: default;
}
 
  .mesmo-tamanho {
    width: 100%;
  white-space: normal;
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
			<div class="form-group col-md-3 text-center">
				<a href="<?php echo BASEURL;?>arquivos/add_mat.php" class="btn btn-primary align-middle"'>Adicionar Novo Material</a>
			</div>
			<div class="form-group col-md-2 text-center">
				<a href="<?php echo BASEURL;?>arquivos/calend.php" class="btn btn-primary align-middle"'>Voltar</a>
			</div>
</div>

	<table id="tabela" class="table-bordered table-hover">
		<tr style="background-color: beige">

			<th><input type="text" id="txtColuna1" size="20" /></th>
						<th><input type="text" id="txtColuna3" size="15" /></th>
			<th><input type="text" id="txtColuna2" size="4" /></th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
					</tr>

		<tr style="background-color: beige">
			<th class="text-center"><small>Descrição</th>
						<th class="text-center"><small>Tipo</th>
 			<th class="text-center"><small>Existente</th>
			<th class="text-center"><small>Cautelado</th>
			<th class="text-center"><small>Disponível</th>
			<th class="text-center"><small>Editar</th>
			<th class="text-center"><small>Excluir</th>

		</tr>
	
	<?php 
	            
	           $itens=0;
	foreach ($result as $row){
	           
	           foreach ($result1 as $row1) {
	               if($row['id']==$row1['material']){
	                   $itens = $itens + $row1['quantidade'];
	               }
	           }
	           $valor = $row['quanti'] - $itens;
	           
	           echo "<tr><td>".$row['descri']."</td><td>".$row['tipo']."</td>
                    <td class='text-right'>".$row['quanti']."</td>";
               
	           if ($itens > 0){
                 echo "<td title='Visualiza para quem esta cautelado o material' class='text-right'><a href='cautela2.php?id=" . $row['id'] . "'><button type='button'  class='btn btn-outline-primary btn-sm mesmo-tamanho' >".$itens."</button></a></td>";
	           }else{
	               echo "<td title='Visualiza para quem esta cautelado o material' class='text-right'><a href='#'><button type='button'  class='btn btn-outline-danger btn-sm mesmo-tamanho' >".$itens."</button></a></td>";
	           }
	           
	           if ($valor > 0){
                echo "<td title='Distribuir Material em grande número'  ><a href='cautela3.php?id=" . $row['id'] . "&material=" . $row['descri'] . "&dispo=" . $valor . "'  class='btn btn-outline-success btn-sm mesmo-tamanho' >".$valor."</a></td>";
	           }else{
	               echo "<td title='Distribuir Material em grande número'  ><a href='#'  class='btn btn-outline-danger btn-sm mesmo-tamanho' >".$valor."</a></td>";
	           }
                    
               echo "<td title='Edita os dados do  Material'><a href='edit_mat.php?id=" . $row['id'] . "'><img src='../images/edit.png' width='20px'></a></td>";
	           if ($nivel=='3'){
	           if ($itens==0){
	               ?>
                <td title='Exclui o  Material'><button type='button' onclick="chamamodal2(<?php echo $row['id'] ?>,'<?php echo $row['descri'] ?>')" class='btn btn-outline-danger' ><img src='../images/x.gif' width='20px'>Ecluir</button></td></tr>
            
            <?php 
	           }else{
	               echo "<td title='� Mecessario desacautelar o material antes de excluir o  Material'><a href=''><img src='../images/x1.gif' width='20px'></a></td></tr>";
	           }
                
	           }else{
	               echo "<td title='� Mecessario desacautelar o material antes de excluir o  Material'></td></tr>";
	           }
            
            $itens = 0;
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
    <h5 class="modal-title" id="exampleModalLabel2">Exclusão de Militar..</h5>
    
    <button type="button" class="close" data-dismiss="modal"
        aria-label="Excluir">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        
        
        <h5 class="modal-text" id="exampleModalLabel3">Tem certeza que quer excluir este item.</h5>
        <h5 class="modal-text" id="exampleModalLabel3">este procedimento não admite retorno.</h5>
        
        </div>
       
        <div class="modal-footer">
        <form method="post" >
         
         <input id="visualizar" type="hidden" name="customer['cnpj4']">
         <input id="visualizar1" type="hidden" name="customer['cnpj5']">
         
       	<button name="customer['cnpj1']" value="excluir"  type="submit" class="btn btn-danger" formaction="delete_mat.php">Excluir</button>
            
            <button name="customer['cnpj2']" value="cancelar" type="submit" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                </form>
                </div>
                
               
                </div>
                
                </div>
                
                </div>
   <script>

        
   function chamamodal2(id, material){
            
	$('#visualizar1').html(id); 
	document.getElementById("visualizar").value = id; 
	document.getElementById("visualizar1").value = material; 
	
	$('#modalExemplo2').modal('show');
	
}
</script>

