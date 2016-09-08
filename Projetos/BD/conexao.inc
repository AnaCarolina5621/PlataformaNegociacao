<!DOCTYPE html>
<?php
$mysqli = new mysqli("localhost", "root", "");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";

$mysqli = new mysqli("127.0.0.1", "root", "", "plataformanegociacao", 3306);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

echo $mysqli->host_info . "\n";

/*$link= mysqli_connect('127.0.0.1','root','');
$db= mysqli_select_db($link,'plataformanegociacao');
if(!$link){
    die("não foi possivel conectar ao banco de dados");
    exit();
}else{
    echo("conectado com sucesso!");
}

$con=mysqli_connect("127.0.0.1","root","");

$Db=mysqli_select_db($con,"platafora_negociacao");

if(!$con){
    die("não foi possivel conectar ao banco de dados".mysqli_error());
}else{
    echo("conectado com sucesso!");
}
/*mysqli_query("SET NAMES'UTF8'");
mysqli_query("SET character_set_connection=utf8");
mysqli_query("SET character_set_client=utf8");
mysqli_query("SET character_set_results=utf8");*/


?>
