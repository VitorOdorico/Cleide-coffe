<?php
    include 'conexao.php';

    //recebe os parametros do formulário via Post
    $id       = $_GET["id"];
    $nome     = $_POST["nome"];
    $email    = $_POST["email"];
    $telefone = $_POST["telefone"];
    $texto    = $_POST["texto"];

    //Cria o SQL para inserir os dados do aluno no banco de dados, o ID não precisa porque é autoincrement.
    $inserireclamaçao = "insert into reclamaçao (nome, email, telefone, texto) values ('$nome', '$email', '$telefone', '$texto')";
    //Executa o SQL no banco de dados da conexão.
    mysqli_query($conexao, $inserireclamaçao);

    //Redireciona para a pagina inicial.
    header("Location: ../indextest.php");
?>