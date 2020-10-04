
<?php
if (!isset($_SESSION)) session_start();
require_once('../config.php');
require_once(DBAPI);

$dados['usuario']=$_SESSION['UsuarioNome'];


//$tabela = $_POST['customer'];
$ind=0;
foreach ($_POST['customer'] as $row){
     
  $mat[$ind] = $row;
   
  echo $ind ." - " . $mat[$ind] . "<br>";
  
  
  $ind++;
}
$nome = strtoupper($mat[2]);
$nomeg = strtoupper($mat[1]);

$senha = sha1($nomeg);
$database = open_database();

$sql = "INSERT INTO `militar` (`id`, `nome`, `nomeg`, `pstgrad`, `ant`, `senha`)
VALUES (NULL, '$nome', '$nomeg', '$mat[0]','1', '$senha')";

$dados['acao'] = "incluiu militar - ". $mat[0]." - ". $nomeg;
save('log',$dados);

$result = $database->query($sql);
echo "result" . $result;

header('location: lista_mil.php');
