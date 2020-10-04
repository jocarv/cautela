
<?php
if (!isset($_SESSION)) session_start();
require_once('../config.php');
require_once(DBAPI);

$dados['usuario']=$_SESSION['UsuarioNome'];
$hoje = date("Y-m-d h:i:s");

//$tabela = $_POST['customer'];
$ind=0;
foreach ($_POST['customer'] as $row){
     
  $mat[$ind] = $row;
   
  echo $ind ." - " . $mat[$ind] . "<br>";
  
  
  $ind++;
}
$nome =$mat[0]. " ".  strtoupper($mat[1]);
$senhax = sha1("1234");

$database = open_database();
//INSERT INTO `usuarios` (`id`, `nome`, `usuario`, `senha`, `email`, `nivel`, `ativo`, `cadastro`) VALUES (NULL, 'etet', 'etrete', '1234', '13213', '2', '1', '2020-08-10 00:00:00');

$sql = "INSERT INTO `usuarios` (`id`, `nome`, `usuario`, `senha`, `email`, `nivel`, `ativo`, `cadastro`)
VALUES (NULL, '$nome', '$mat[2]', '$senhax','1','$mat[3]','1','$hoje' )";

$dados['acao'] = "incluiu Usuário - " . $nome;
save('log',$dados);

$result = $database->query($sql);
echo "result" . $result;

header('location: lista_user.php');
