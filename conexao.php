<?PHP
 
/* Arquivo de coenexão com o banco de dados */
 

$servidor = "mysql.hostinger.com.br";
$usuario = "u895246398_root";

$senha = "123456";
$banco = "u895246398_pn";
 
$conexao = mysql_connect($servidor,$usuario,$senha) ;
 
$db = mysql_select_db($banco,$conexao) or die("Erro ao conectar ao bando de dados");
 
 
/*para fechar uma conexao com o banco utilizade a função mysql_close($conexao); */
 
 
?>
 