<?php 
require_once('../config.php');
require_once(DBAPI);

$palavra = $_POST['palavra'];

$database = open_database();


$itens=0;
$sql1 = "SELECT * FROM militar";
$result1 = $database->query($sql1);
foreach ($result1 as $row1) {
    if($palavra==$row1['pstgrad']){
        $itens++;
    }
}

echo $itens;
?>
        
   
