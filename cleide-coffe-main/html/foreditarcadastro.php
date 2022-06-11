<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/test.css">
    <script src="./js/mobile-navbar.js" defer></script>
</head>

<body>
    <header>
        <nav>
            <a href="../indextest.php" class="logo">Cleide Coffee</a>
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-list">
                <li>
                    <a href="../indextest.php">Inicio</a>
                    <a href="../html/produtos.php">produtos</a>
                    <a href="../html/servicos.php">Serviços</a>
                    <a href="../html/sobre.php">Sobre</a>
                    <a href="../html/suporte.php">Suporte</a>

                </li>
            </ul>
        </nav>
        <main>
        <div>
            <h2>Editar produtos</h2>
                <?php 
                    $id = $_GET["id"];
                    $nome = $_GET["nome"];
                    $preço = $_GET["preço"];
                    $quantidade = $_GET["quantidade"];
                ?>
            <form action="editarcadastro.php?id=<?php echo $id; ?>" method="post">
                Nome:       <input type="text" id="nome" name="nome" value="<?php echo $nome; ?>" /><br/>        
                Preço:      <input type="text" id="preço" name="preço" value="<?php echo $preço; ?>" /><br/>
                Quantidade: <input type="text" id="quantidade" name="quantidade" value="<?php echo $quantidade; ?>" /><br/>
                <input type="submit" value="Salvar"/>
            </form>
        </div>
        </main>
    </header>
</body>