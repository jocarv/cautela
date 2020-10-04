<?php 
require_once('../config.php');
require_once(DBAPI);

//$palavra = $_POST['palavra'];

$database = open_database();


$itens=0;
$sql1 = "SELECT * FROM pg";
$result1 = $database->query($sql1);

echo "<select class='form-control form-control-sm' id='buscar' name='customer[pstgrad]' >";
echo "<option selected >Selecione ....</option>";
   

foreach ($result1 as $row1) {
        
            echo "<option value=". $row1['id']." >".$row1['pg']."</option>";
          
              }
    ?>	
   
?>
        
   
