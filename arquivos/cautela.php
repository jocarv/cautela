<?php
session_start();
$nivel = $_SESSION['UsuarioNivel'];

require_once('../config.php');
require_once(DBAPI);
include(HEADER_TEMPLATE);

$id = $_GET['id'];


$database = open_database();
$string = "SELECT * FROM listamil WHERE id= $id ";
$result = $database->query($string);



$string2 = "SELECT * FROM cautela where militar = $id";
$result2 = $database->query($string2);


foreach($result as $row){
    
}

$nome  = $row['nome'];
$nomeg = $row['nomeg'];
$ng = explode(" ", $nomeg);

$patern = array();

array_push($patern,"/($ng[0])/");
if (isset($ng[1])){
    array_push($patern,"/($ng[1])/");
}
if (isset($ng[2])){
    array_push($patern,"/($ng[2])/");
}




$hoje = date("Y-m-d");


?>
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


<div class="row" >
			<div class="form-group col-md-5">
				<button type="button" class="btn btn-default btn-sm" > <?php echo $row['pstgrad']. " ".  preg_replace($patern, '<b>\\1</b>', $nome) ?></button>
			</div>

			<div class="form-group col-md-2 text-center">
				<a href="cautela1.php?id=<?php echo $row['id'] ?>" class=" btn-sm btn-primary align-middle"'>Cautelar Material</a>
			</div>
			<div class="form-group col-md-2 text-center">
				 <a href="impe_cau.php?id=<?php echo $row['id'] ?>&posto=<?php echo $row['pstgrad'] ?>" class="btn-sm btn-success align-middle"'>Gerar Cautela</a>
			</div>
			<div class="form-group col-md-2 text-center">
				<a href="<?php echo BASEURL;?>arquivos/lista_mil.php" class="btn-sm btn-danger align-middle"'>Voltar</a>
		</div>
			
		</div>

<div class="table-responsive-sx">


<table  id="tabela" class="table-bordered table-hover">

		<tr style="background-color: beige">

			<th><input type="text" id="txtColuna1" size="30" /></th>
			<th><input type="text" id="txtColuna2" size="8" /></th>
			<th><input type="text" id="txtColuna3" size="4" /></th>
                        <th></th>
			<th><input type="text" id="txtColuna4" size="10" /></th>
			<th></th>
					</tr>

		<tr style="background-color: beige">
			<th class="text-center"><small>Material</th>
			<th class="text-center"><small>Tipo</th>
 			<th class="text-center"><small>Quantidade</th>
			
                        <th class="text-center"><small>Obsv</th>
                        <th class="text-center"><small>Data</th>
			<th class="text-center"><small>Descautelar</th>
		</tr>

<?php 
$itens =0;
    foreach($result2 as $row2){
        
        
        $string1 = "SELECT * FROM listamat  where id = ". $row2['material'];
        $result1 = $database->query($string1);
        foreach($result1 as $row1){
            
        
            $controle = $row2['id'];
                
        echo "<tr><td >".$row1['descri']."</td><td>".$row1['tipo']."</td><td class='text-right'>".$row2['quantidade']."</td><td class='text-left'>".$row2['obs']."</td><td class='text-center'>".date("d/m/Y",strtotime($row2['data']))."</td>
<td class='text-center' title='desacautelar o material'>";
        if($nivel=='3'){
        ?>
<button type="button"' onclick="chamamodal2(<?php echo $row2['id'] ?>,<?php echo $row['id'] ?>,'<?php echo $row['pstgrad']?>','<?php echo $nomeg ?>','<?php echo $row1['descri'] ?>',<?php echo $row2['quantidade'] ?>,'<?php echo date('d/m/Y', strtotime($row2['data']));?>' )" class='btn btn-outline-danger btn-sm view_data' style="height: 20px; padding:1px;" id=".$row['id']."," .$nomeg.">Desacautelar</button>
</td></tr>       
       <?php     
        }else{
        echo "</td></tr>"; 
        }
        }
        $itens =0;
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
</div>

<!-- Modal -->
<div class="modal" id="modalExemplo2" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 700px;">
    <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel2">Exclusão de Material da Cautela..</h5>
    
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
         <input id="visualizar2" type="hidden" name="customer['cnpj6']">
          <input id="visualizar3" type="hidden" name="customer['cnpj7']" >
          <input id="visualizar4" type="hidden" name="customer['cnpj8']" >
          <input id="visualizar5" type="hidden" name="customer['cnpj9']" >
           <input id="visualizar6" type="hidden" name="customer['cnpj10']" >
       	<button name="customer['cnpj1']" value="excluir"  type="submit" class="btn btn-danger" formaction="delete_cau.php?id=2">Excluir</button>
            
            <button name="customer['cnpj2']" value="cancelar" type="submit" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                </form>
                </div>
                
               
                </div>
                
                </div>
                
                </div>
   <script>

        
   function chamamodal2(id, militar,posto,nome, material, quanti, datas){
            
	$('#visualizar1').html(id); 
	document.getElementById("visualizar").value = id; 
	document.getElementById("visualizar1").value = militar; 
	document.getElementById("visualizar2").value = posto;   
	document.getElementById("visualizar3").value = nome;    
	document.getElementById("visualizar4").value = material;         
	document.getElementById("visualizar5").value = quanti;
	document.getElementById("visualizar6").value = datas;
	$('#modalExemplo2').modal('show');
	
}
</script>


