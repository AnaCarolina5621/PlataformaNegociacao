
<?php
echo ("está funcionando")
$host= '';
$bd= 'plataformanegociacao';
$senhabd= '';
$conexao = mysqli_connect($host,'root',$senhabd);
$userbd = $bd;


if (!$conexao) {
    die ("Erro de conexão com localhost, o seguinte erro ocorreu -> " . mysqli_error());
//conectando com a tabela do banco de dados
    $banco = mysqli_select_db("localhost", $bd);

    if (!$banco) {
        die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> " . mysqli_error());
    }
}
$CodMercadoria = $_POST["CodMercadoria"];
$NomeMercadoria = $_POST["NomeMercadoria"];
$TipoMercadoria = $_POST["TipoMercadoria"];

$sql="INSERT INTO `tb_produtos` ('CodMercadoria', 'NomeMercadoria', 'TipoMercadoria') VALUES (NULL, '$NomeMercadoria', '$TipoMercadoria')";
mysqli_query($conexao,$sql);
if(!$sql){
echo("Ocorreu um erro durante a inserção no banco de dados").mysqli_error();
}else{
    echo ("Dados Enviados com sucesso");
}
?>

