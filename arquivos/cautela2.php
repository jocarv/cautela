<?php

require_once('../config.php');
require_once(DBAPI);
include(HEADER_TEMPLATE);

$id = $_GET['id'];


$database = open_database();
$string = "SELECT * FROM consultacau WHERE id_mat=$id";
$result = $database->query($string);
$total=0;
foreach ($result as $row1){
    $total = $total + $row1['cauquant'];
}


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
    <div class="form-group col-md-8">
				<button type="button" class="btn btn-outline-danger btn-sm">Material : <?php echo $row1['descri']."  " ?></button> <button type="button" class="btn btn-outline-primary btn-sm" >Quantidade Existente: <?php echo $row1['quantidade']."  " ?></button>
				<button type="button" class="btn btn-outline-success btn-sm" >Cautelados: <?php echo $total  ?></button> 
				<a href="<?php echo BASEURL;?>arquivos/lista_mat.php" class="btn-sm btn-danger align-middle"'>Voltar</a>
	</div>
    
    
    <table id="tabela" class="table-bordered table-hover">
    <tr style="background-color: beige">
    
    <th><input type="text" id="txtColuna1" size="5" /></th>
    <th><input type="text" id="txtColuna3" size="40" /></th>
    <th><input type="text" id="txtColuna2" size="4" /></th>
    <th><input type="text" id="txtColuna2" size="10" /></th>
    </tr>
    
    <tr style="background-color: beige">
    <th class="text-center"><small>Post Grad</th>
    <th class="text-center"><small>Nome</th>
    <th class="text-center"><small>Quantidade</th>
    <th class="text-center"><small>Data</th>
    
    </tr>
    
    <?php
    
      foreach ($result as $row){
          
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
          
          
          
          
       
          echo "<tr><td>".$row['posto']."</td><td>".preg_replace($patern, '<b>\\1</b>', $nome)."</td>
                    <td class='text-right'>  ".$row['cauquant']."</td>
                    <td class='text-right'>".date("d/m/Y",strtotime($row['caudata']))."</td></tr>";
                   
      
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