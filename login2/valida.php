<?php
require_once('../config.php');
require_once(DBAPI);
$ind=0;
foreach ($_GET['customer'] as $row){
    $mat1[$ind] = $row;
  //  echo $ind." - " .$mat1[$ind] . " -  ";
    $ind++;
}
$nomeg = $mat1[1];

$senhax = sha1($mat1['2']);
//echo $nomeg;
//$sql = "SELECT `id`, `nomeg`,  `senha` FROM `militar` WHERE (`pstgrad' = '".$mat1['0']."') AND (`nomeg` = '".$mat1['1']."') AND (`senha` = '". sha1($mat1['2']) ."') LIMIT 1";
$sql = "SELECT * FROM `militar` WHERE `pstgrad`= $mat1[0] AND `nomeg` = '$nomeg' AND `senha` = '$senhax'";

//AND (`senha` = '". sha1($senha) ."') AND (`ativo` = 1)
$database = open_database();
$data = $database->query($sql);

foreach ($data as $row1){
   // echo $row1['id'];
}



if (empty($row1)) {
    // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
  header("Location:".BASEURL."login2/erro.php"); exit;
} else {
  header("Location:".BASEURL."login2/index.php?id=".$row1['id']); exit;
}
    