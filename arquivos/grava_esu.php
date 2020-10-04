
<?php
require_once('../config.php');
require_once(DBAPI);


$fp = fopen($_SERVER['DOCUMENT_ROOT'] . "/novo.txt","wb");

fwrite($fp,$conteudo);

fclose($fp);

//$tabela = $_POST['customer'];
$ind=0;
foreach ($_POST['customer'] as $row){
     
  $mat[$ind] = $row;
   
  echo $ind ." - " . $mat[$ind] . "<br>";
  
  
  $ind++;
}

$fp = fopen("../dados.txt","wb");

fwrite($fp,$mat[4]."\r");
fwrite($fp,$mat[7].".gif");
fclose($fp);

$database = open_database();

//$sql = "UPDATE `material` SET `tipo` = '$mat[0]',`descri` = '$mat[1]', `quantidade` = '$mat[2]', `necessi` = '$mat[3], `obs` = '$mat[4]' WHERE `material`.`id` = '$mat[5]'";

$sql =  "UPDATE `dados` SET `Sub1` = '$mat[0]', `Sub2` = '$mat[1]', `Sub3` = '$mat[2]', `Sub4` =  '$mat[3]', `abrevsu` = '$mat[4]',`Sub5` = '$mat[5]', `cmtbia` = '$mat[6]',`imagem` = '$mat[7]', `encmat` = '$mat[8]'  ";
  
//$sql = "INSERT INTO `material` (`id`, `tipo`, `descri`, `quantidade`, `necessi`, `obs`)
//VALUES (NULL, '$mat[0]', '$mat[1]','$mat[2]','$mat[3]','$mat[4]')";

$result = $database->query($sql);
echo "result" . $result;
header('location: lista_mil.php');
