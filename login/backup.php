<?php
require_once('../config.php');
require_once(DBAPI);
//define os parâmetros de conexão do banco
$dbname = "almox"; //nome do banco
$dbhost = "localhost"; //geralmente localhost
$dbuser = "root"; //usuário do banco
$dbpass = ""; //senha do banco

//define o nome do arquivo e onde será salvo o backup
$filename = date('Ymdhms').$dbname;
$path = "";

echo $filename . " - " . $path;
//cria a pasta onde os backups serão salvos caso ela não exista
//if(!is_dir($path)){
 //   mkdir($path, 0751); //cria a pasta
//}

$database = open_database();
// conectando ao banco
// gerando um arquivo sql. Como?
// a função fopen, abre um arquivo, que no meu caso, será chamado como: nomedobanco.sql
// note que eu estou concatenando dinamicamente o nome do banco com a extensão .sql.
$back = fopen($path.$filename.".sql","w");

// aqui, listo todas as tabelas daquele banco selecionado acima
$query = "SHOW TABLES";

$result = $database->query($query);
$ind = 0;
var_dump($result);


foreach ($result as $dados){

   
}
/*
//Em seguida, vamos, verificar quais são as tabelas daquela base, lista-las, e em um laço for, vamos mostrar cada uma delas, e resgatar as funções descriação da tabela, para serem gravadas no arquivo sql mais adiante.
// resgato cada uma das tabelas, num loop
foreach ($result as $key => $value) {
    
    $table = $value;
    // usando a função SHOW CREATE TABLE do mysql, exibo as funções de criação da tabela,
    // exportando também isso, para nosso arquivo de backup
    $string = "SHOW CREATE TABLE". $table;
    $res2 = $database->query($string);
    // digo que o comando acima deve ser feito em cada uma das tabelas
    foreach ($res2 as $come){
        
        // instruções que serão gravadas no arquivo de backup
        fwrite($back,"\n#\n# Criacao da Tabela : $table\n#\n\n");
        fwrite($back,"$lin[1] ;\n\n#\n# Dados a serem incluidos na tabela\n#\n\n");
        
        //Teremos então de pegar os dados que estão dentro de cada campo de cada tabela, e abri-los também para serem gravados no nosso arquivo de backup.
        // seleciono todos os dados de cada tabela pega no while acima
        // e depois gravo no arquivo .sql, usando comandos de insert
        $res3 = mysqli_query($con, "SELECT * FROM $table");
        while($r=mysqli_fetch_row($res3)){
            $sql="INSERT INTO $table VALUES (";
            //Agora vamos pegar cada dado do campo de cada tabela, e executar tarefas como, quebra de linha, substituição de aspas, espaços em branco, etc. Deixando o arquivo confiável para ser importado em outro banco de dados.
            // este laço irá executar os comandos acima, gerando o arquivo ao final,
            // na função fwrite (gravar um arquivo)
            // este laço também irá substituir as aspas duplas, simples e campos vazios
            // por aspas simples, colocando espaços e quebras de linha ao final de cada registro, etc
            // deixando o arquivo pronto para ser importado em outro banco
            
            for($j=0; $j<mysqli_num_fields($res3);$j++)
            {
                if(!isset($r[$j]))
                    $sql .= " \"\",";
                    elseif($r[$j] != "")
                    $sql .= " \"".addslashes($r[$j])."\",";
                    else
                        $sql .= " \"\",";
            }
            $sql = preg_replace("~,$~", "", $sql);
            $sql .= ");\n";
            fwrite($back,$sql);
        }
    }
    
}

//E finalmente, vamos fechar (internamente, no servidor) o arquivo que geramos, dando um nome para o mesmo, e gerando o arquivo que será então disponibilizado para download.

// fechar o arquivo que foi gravado
fclose($back);

// gerando o arquivo para download, com o nome do banco e extensão sql.
$arquivo = $path.$filename.".sql";

ob_start();

//zipa o arquivo
$zip = new ZipArchive();
if( $zip->open( $path.$filename.".zip" , ZipArchive::CREATE )  === true){
    $zip->addFile( $path.$arquivo ) ;
    $zip->close();
}

//deleta o arquivo .sql e mantém somente o zipado
unlink($arquivo);

?>*/
   
                    