<?php
    //Importando o arquivo de conexão com o BD(connect)//
    require("connect.php");

    //Obtendo os valores dos campos
    $descricao = $_POST['c_descricao'];
    $quantidade = $_POST['c_quantidade'];
    $autor = $_POST['c_autor'];
    $tipo_capa = $_POST['tipo_capa'];
    $categoria_livro = $_POST['categoria_livro'];
    $termo = $_POST['c_termo'];
    $data_nascimento = $_POST['data_nascimento'];    

    //Armazenando a SQL em uma variável
    $sql = "INSERT INTO `livro`(`descricao`,`quantidade`, `autor`,`tipo_capa`,`categoria`,`data_nascimento`)
    VALUES ('$quantidade','$descricao','$autor','$tipo_capa','$categoria_livro','$termo','$data_nascimento')";

    //Executando SQL que esta na variável
    $resultado = mysqli_query($conexao, $sql);

    //Imprimindo na tela
    echo "Livro inserindo com sucesso";
?>
<p><a href = "form_cadastrar_livro.html">Voltar</a>