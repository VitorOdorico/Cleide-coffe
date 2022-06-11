<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/css-pages/cadastro.css">
    <script src=../js/mobile-navbar.js " defer></script>
</head>

<body>
    <header>
        <nav>
            <a href="../indextest.php " class="logo ">Cleide Coffee</a>
            <div class="mobile-menu ">
                <div class="line1 "></div>
                <div class="line2 "></div>
                <div class="line3 "></div>
            </div>
            <ul class="nav-list ">
                <li>
                    <a href="../indextest.php ">Inicio</a>
                    <a href="../html/produtos.php ">produtos</a>
                    <a href="../html/servicos.php ">Serviços</a>
                    <a href="../html/sobre.php ">Sobre</a>
                    <a href="../html/suporte.php ">Suporte</a>

                </li>
            </ul>
        </nav>
    </header>
    <main class="form">

    <div>
        <form action="inserircadastro.php" method="post">
            Nome:       <input type="text" id="nome" name="nome"/><br/>        
            Preço:      <input type="text" id="preço" name="preço"/><br/>
            Quantidade: <input type="text" id="quantidade" name="quantidade"/><br/>
            <input type="submit" value="Salvar"/>
        </form>

    </div>

    </main>
    <!-- <footer>
        <div class="social-media ">
            <div class="logos ">
                <img src=" " alt=" ">
                <img src=" " alt=" ">
                <img src=" " alt=" ">
                <img src=" " alt=" ">

            </div>
        </div>

        <div class="text-footer ">
            <p class="texto-copy ">
                All direct's reserved to license, 
            </p>

            <h2 class="name-contributions ">
                Feito por Vitor
            </h2>

        </div>

    </footer> -->
</body>

</html>