<?php
if (!isset($_SESSION)) session_start();
$meunome  = $_SESSION['Usuario'];
require_once('../config.php');
require_once(DBAPI);
include(HEADER_TEMPLATE);

$database = open_database();
$sql = "SELECT * FROM usuarios";
$result = $database->query($sql);

?>
   <script type="text/javascript" src="script.js"></script>    
<div class="container">
<div class="row">
			<div class="form-group col-md-2 text-center">
				<a href="<?php echo BASEURL;?>login/add_user.php" class="btn btn-primary align-middle"'>Adicionar Usuário</a>
			</div>
			<div class="form-group col-md-2 text-center">
				<a href="<?php echo BASEURL;?>arquivos/calend.php" class="btn btn-primary align-middle"'>Voltar</a>
			</div>
</div>
			
	<table id="tabela" class="table-bordered table-hover">

		<tr style="background-color: beige">
			<th class="text-center"><small>Nome</th>
						<th class="text-center"><small>usuario</th>
 			
			
			<th class="text-center"><small>Nivel</th>
			<th class="text-center"><small>Ativo</th>
			<th class="text-center"><small>Data Cadastro</th>
			<th class="text-center"><small>Ação</th>

		</tr>
	
	<?php 
	       
	       foreach ($result as $row) {
	           $id = $row['id'];
	          
	          
	           if ($meunome==$row['usuario']){
	               
	               echo "<tr><td>".$row['nome']."</td><td>".$row['usuario']."</td><td>".$row['nivel']."</td><td>".$row['ativo']."</td><td>".date("d/m/Y H:i:s", strtotime($row['cadastro']))."</td>
 <td ></td><tr>";
	           }else{
	           	           
	           echo "<tr><td>".$row['nome']."</td><td>".$row['usuario']."</td><td>".$row['nivel']."</td><td>".$row['ativo']."</td><td>".date("d/m/Y H:i:s", strtotime($row['cadastro']))."</td>
 <td title='Exclui o  Usuário'><button type='button' onclick='chamamodal2($id)' class='btn btn-outline-danger' ><img src='../images/x.gif' width='20px'>Ecluir</button></td>

<tr>";
	                  
	           }
	       }
	           ?>      

	</table>


</div>

<!-- Modal -->
<div class="modal" id="modalExemplo2" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 700px;">
    <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel2">Exclusão de Usuário..</h5>
    
    <button type="button" class="close" data-dismiss="modal"
        aria-label="Excluir">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        
        
        <h5 class="modal-text" id="exampleModalLabel3">Tem certeza que quer excluir este usuário.</h5>
        <h5 class="modal-text" id="exampleModalLabel3">este procedimento não admite retorno.</h5>
        
        </div>
       
        <div class="modal-footer">
        <form method="post" >
         
         <input id="visualizar" type="hidden" name="customer['cnpj4']">
         <input id="visualizar1" type="hidden" name="customer['cnpj5']">
         
       	<button name="customer['cnpj1']" value="excluir"  type="submit" class="btn btn-danger" formaction="delete_user.php">Excluir</button>
            
            <button name="customer['cnpj2']" value="cancelar" type="submit" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
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


