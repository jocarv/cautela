

<?php

require_once('../config.php');
require_once(DBAPI);
include(HEADER_TEMPLATE);

$id = $_GET['id'];
$material = $_GET['material'];
$dispo = $_GET['dispo'];



$database = open_database();
$string = "SELECT * FROM consultacau WHERE id_mat=$id";
$result = $database->query($string);

foreach ($result as $row1){

}
$string1 = "SELECT * FROM pg ";

$result1 = $database->query($string1);

?>



    
    <div class="container">
    <div class="row">
    		<h2 class="text-center">Distribuição de Material por Posto/Graduação</h2>
		</div>    
    	<div class="row">
    		<div class="form-group col-md-4">
    		<label for="campo3">Material a ser distribuido</label>
				<input type="text" class="form-control form-control-sm" value="<?php echo $row1['descri'] ?>" readonly> 
			</div>
			<div class="form-group col-md-3">
			<label for="campo3">Quantidade Disponível</label>
				<input id="dispo" type="text" class="btn btn-outline-primary btn-sm" value="<?php echo $dispo ?>">
				
			</div>
			
		</div>    
		
		<div class="row">
			
			<div class="form-group col-md-4">
			<form action="grava_cau_d.php" id="form1" >
				<label for="campo3">Selecione Posto / Graduacao</label>
				 <select class="form-control form-control-sm" id="buscar" name="customer['pstgrad']" required>
				 <option>Selecione ....</option>
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
			<div class="form-group col-md-3">
			<label for="campo3">Quantidade Necessária</label>
                        <input id="dados1" type="text" onchange="Verifica(this)" class="btn btn-outline-success btn-sm"  readonly>
			
			
			</div>
			 <input id="dados2" type="hidden" name="customer['material']" value="<?php echo $id?>"  >
   	 </div>
   <div class="row">
   		<div id="dados" class="form-group col-md-7" >
		<p class="p">Este procedimento ira distribuir 1 item do material para cada militar da graduação</p>
		</div>
	</div>
	<div class="row">
	  		<div id="dados3" class="form-group col-md-7" >
		
                            <button type="submit" id="botao" class="btn btn-primary btn-sm" disabled="true">Distribuir</button>
		<a href="<?php echo BASEURL;?>arquivos/lista_mat.php" class="btn btn-danger align-middle btn-sm"'>Voltar</a>
		</div>
	</form>
	</div>


	</div>
	 <script>
            function buscar(palavra)
            {
                //O método $.ajax(); é o responsável pela requisição
                $.ajax
                        ({
                            //Configurações
                            type: 'POST',//Método que está sendo utilizado.
                            dataType: 'html',//É o tipo de dado que a página vai retornar.
                            url: 'busca.php',//Indica a página que está sendo solicitada.
                            //função que vai ser executada assim que a requisição for enviada
                            beforeSend: function () {
                                $("#dados1").val(0);
                            },
                            data: {palavra: palavra},//Dados para consulta
                            //função que será executada quando a solicitação for finalizada.
                            success: function (msg)
                            {
                                $("#dados1").val(msg);
                                $("#dados1").trigger('change');
                            }
                        });
            }
            
            var valor;
            $('#buscar').change(function () {
            	valor = $("#buscar option:selected").val();
            					        	
                buscar(valor)
                
            });

            
            
            function Verifica(){
                
              var  dispo = $("#dispo").val();
              var nece = $("#dados1").val();
            	
                if (Number(nece) > 0){
                    if (Number(nece) > dispo){
                        				
                                alert("Valor Maior que o Disponivel");
                                document.getElementById("botao").disabled=true;
                    }else{
				  
                                 document.getElementById("botao").disabled=false;
                    }	
                }else{
                     document.getElementById("botao").disabled=true;
                }
                
            }
        </script>