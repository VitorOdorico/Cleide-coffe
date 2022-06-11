<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/css-pages/suporte.css">
    <script src="../js/mobile-navbar.js" defer></script>
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
    </header>
    <main>
        <div class="formulario">
            <div class="border">
                <form action="">
                    <p class="titulo">Faça sua reclamação aqui!</p>
                    <div class="nome">
                            <p>Nome: </p>
                        <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo">
                    </div>


                    <div class="email">
                        <p>Email: </p>
                        <input type="email" id="email" name="email" placeholder="Digite seu e-mail">
                    </div>


                    <div class="numero">
                        <p>Telefone</p>
                        <input type="text" id="telefone" name="telefone" placeholder="Digite seu telefone">
                    </div>


                    <div class="list">
                        <select name="" id="Lojas">
                            <option selected disabled value="">Selecione a loja</option>
                            <option value="">São Paulo</option>
                            <option value="">Rio de Janeiro</option>
                            <option value="">Cleide home</option>
                        </select>
                    </div>
                    <div class="area-texto">
                        <p>escreva aqui sua reclamação</p>
                        <textarea name="" id="" cols="20" rows="4"></textarea>
                    </div>
                    <div class="button">
                        <a href="./processa.php">Enviar</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
