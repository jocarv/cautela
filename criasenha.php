<?php
require_once('config.php');
require_once(DBAPI);


$database = open_database();
$sql = "SELECT * FROM militar";
$result = $database->query($sql);

foreach($result as $row){
    $id = $row['id'];
    echo $id ." - ". $row['nomeg']." -  ";
   
    $senhax = sha1($row['nomeg']);
   
    echo $senhax;
    $sql = "UPDATE `militar` SET `senha` = '$senhax' WHERE `militar`.`id` =". $id;
    
    $result2 = $database->query($sql);
   echo " - " . $result2 ." <br>";
    
    
}