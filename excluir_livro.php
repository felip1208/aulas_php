<?php
//importando o arquivo de conexão com o BD//
require("connect.php");

//obtendo os valores dos campos
$codigo_livro = $_POST ['c_codigo'];

//inserindo os dados
$sql = " DELETE FROM 'item' WHERE codigo_item = $codigo_livro";

//executando a SQL que estava na variavel
$resultado = mysqli_query ($connect, $sqli);

echo "Livro excluido com sucesso";
?>
<p><a href = "form_cadastrar_livro.html">voltar</a>

