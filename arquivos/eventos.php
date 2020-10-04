<?php
require_once('../config.php');
require_once(DBAPI);


$database = open_database();
$sql = "SELECT * FROM log GROUP BY DATE(data) ORDER BY data ASC";

$result = $database->query($sql);

	        $itens = 0;
	        $eventos = [];
	       foreach ($result as $row) {
	          
            
            $eventos[] = [
                'title'=>'Atividade',
                'color'=>'ff0000',
                'start'=>date("Y-m-d",strtotime($row['data'])),
                'end'=>''
                
            ];
            $itens++;
            
	       }

	       echo json_encode($eventos);
	       ?>



