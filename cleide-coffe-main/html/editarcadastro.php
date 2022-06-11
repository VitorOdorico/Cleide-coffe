<?php
    include 'conexao.php';

    //recebe os parametros do formulário via Post
    $id = $_GET["id"];
    $nome = $_POST["nome"];
    $preço = $_POST["preço"];
    $quantidade = $_POST["quantidade"];

    //Cria o SQL para alterar os dados do aluno no banco de dados, o ID não precisa porque é autoincrement.
    $alterar = "update cadastro set nome = '$nome', preço ='$preço', quantidade ='$quantidade' where id = $id";
    //Executa o SQL no banco de dados da conexão.
    mysqli_query($conexao, $alterar);

    //Redireciona para a pagina inicial.
    header("Location: produtos.php");
?>