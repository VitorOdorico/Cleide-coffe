<?php
    include 'conexao.php';

    //recebe os parametros do formulário via Post
    $id = $_GET["id"];
    $nome = $_POST["nome"];
    $preço = $_POST["preço"];
    $quantidade = $_POST["quantidade"];

    //Cria o SQL para alterar os dados do aluno no banco de dados, o ID não precisa porque é autoincrement.
    $inserir = "insert into cadastro (nome, preço, quantidade) values ('$nome', '$preço', '$quantidade')";
    //Executa o SQL no banco de dados da conexão.
    mysqli_query($conexao, $inserir);

    //Redireciona para a pagina inicial.
    header("Location: produtos.php");
?>