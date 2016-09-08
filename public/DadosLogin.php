
<?php
include_once ("conexao.php"); 

if (isset($_POST["postar"])){
  $Usuario = $_POST["login"];
$senha = $_POST["senha"];

}


   $sqlinsert ="INSERT INTO `tb_usuario` ('CodUsuario','Usuario','Senha') VALUES (NULL, $Usuario, $senha)";
$insercao = mysql_connect ($sqlinsert) or die ("Não foi possível inserir os dados");

  echo "Inseridos na Tabela DADOS <br/>";
?>