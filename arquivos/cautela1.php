

<?php

require_once('../config.php');
require_once(DBAPI);
include(HEADER_TEMPLATE);

$id = $_GET['id'];


$database = open_database();
$string = "SELECT * FROM listamil WHERE id= $id ";
$result = $database->query($string);



$string2 = "SELECT * FROM cautela ";
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
    $("#tabela textarea").keyup(function(){       
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
 
    $("#tabela textarea").blur(function(){
        $(this).val("");
    });
});

</script>
<div class="container">


<div class="row" >
			<div class="form-group col-md-6">
				<button type="button" class="btn btn-default btn-sm">Militar : <?php echo $row['pstgrad']."  " ?></button> <button type="button" class="btn btn-default btn-sm" > <?php echo  preg_replace($patern, '<b>\\1</b>', $nome) ?></button>
			</div>

			
			
			
		</div>

<div class="table-responsive-sx">
<form action="grava_cau.php?posto=<?php echo $row['pstgrad']."&nomeg=". $nomeg; ?>" method="post">

<table  id="tabela" class="table-bordered table-hover">

		<tr style="background-color: beige">

                    <th><textarea id="txtColuna1" style="overflow: hidden;  height: 30px;" ></textarea></th>
			<th><textarea id="txtColuna2" size="30" style="overflow: hidden;  height: 30px;" ></textarea></th>
			<th></th>
			<th></th>
			<th></th>
					</tr>

		<tr style="background-color: beige">
			<th class="text-center"><small>Material</th>
			<th class="text-center"><small>Tipo</th>
			<th class="text-center"><small>Disponivel</th>
 			<th class="text-center"><small>Quantidade</th>
			<th class="text-center"><small>Observação</th>
			
		</tr>

<?php 
$itens =0;
        
        
        $string1 = "SELECT * FROM listamat" ;
        $result1 = $database->query($string1);
        foreach($result1 as $row1){
            
            $disponivel = 0;
            $dispo = 0;
            foreach($result2 as $row2){
                if ($row2['material']==$row1['id']){
                    $disponivel = $disponivel + $row2['quantidade'];
                }
                
            }
            $dispo = $row1['quanti'] - $disponivel;
                
            echo "<tr><td >".$row1['descri']."</td><td>".$row1['tipo']."</td><td class='text-center' ><input type='text' style='text-align:right ;  height: 30px;' class='form-control' id='d".$itens."' value=".$dispo." size='5' readonly disabled></td>
<td ><input type='text' id='t".$itens."' maxlength='3' onkeypress='return onlynumber();'  onkeyup='calcular(this.id);' style='text-align:right ;  height: 30px;'	size='5' class='form-control' name='customer[q".$itens."]' ></td>
<td ><input type='text' id='o".$itens."' maxlength='30'   style='text-align:left;  height: 30px;'	size='30' class='form-control' name='customer4[o".$itens."]' ></td>
</tr>";
     
        echo "<input type='hidden' class='form-control' name='customer1[mil".$itens."]' value=".$id.">";
        echo "<input type='hidden' class='form-control' name='customer2[mat".$itens."]' value=".$row1['id'].">";
        echo "<input type='hidden' class='form-control' name='customer3[log".$itens."]' value='".$row1['descri']."'>";
        
        $itens = $itens+1;
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
	<div class="row">	
		<div class="form-group col-md-2 text-center">	
		<input type="submit" value="Salvar" class="btn-sm btn-primary align-middle" style="height:25px; padding: 2px 5px;">
		</div>
		<div class="form-group col-md-2 text-center">
				<a href="<?php echo BASEURL;?>arquivos/lista_mil.php" class="btn-sm btn-danger align-middle"'>Voltar</a>
		</div>
		</div>
</form>
</div>
	
</div>
<script>
function calcular(ala) {
	 
	 var resultado = ala;	
	 var numero = ala.substring(1,10);	
	 var nome = "d"+numero;
     var v1 = parseInt(document.getElementById(nome).value);
     var v2 = parseInt(document.getElementById(resultado).value);
     if (v2 > v1){
	 alert("O valor não pode ser maior que o disponível");
	 document.getElementById(resultado).value = "";
     }
	 
}

function onlynumber(evt) {
	   
	   var theEvent = evt || window.event;
	   var key = theEvent.keyCode || theEvent.which;
	   key = String.fromCharCode( key );
	   //var regex = /^[0-9.,]+$/;
	   var regex = /^[0-9.]+$/;
	   if( !regex.test(key) ) {
	      theEvent.returnValue = false;
	      if(theEvent.preventDefault) theEvent.preventDefault();
	   }
	   
	}
</script>