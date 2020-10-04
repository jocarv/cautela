<?php
require_once ('../config.php');
require_once (DBAPI);
include (HEADER_TEMPLATE);

$lista = find_all("militar");
 foreach($lista as $row){
    echo $row['nome']."<br>";
}
