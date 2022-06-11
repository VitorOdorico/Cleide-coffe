<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Visualizar Produtos</title>
	<link rel="stylesheet" href="../css/css-pages/visualizar.css">
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
		<main>
			<table class="tabela" border='1' align='center'>
				<tr align='center'>
					<td><b>Código</b></td>
					<td><b>Nome</b></td>
					<td><b>Preço</b></td>
					<td><b>Quantidade</b></td>
					<td><b>Editar</b></td>
					<td><b>Excluir</b></td>
				</tr>
				<!-- A partir daqui inicia a busca no banco de dados para trazer os alunos nas linhas da tabela -->
				<?php
					//cria uma conexão com o banco de dados
					include 'conexao.php';
					//executa uma query buscando todos os alunos do banco de dados e atribui a variável "resultado"
					$resultado = mysqli_query($conexao, "select * from cadastro");
					//quebra o resultado em linhas e faz um laço de repetição para cada linha do resultado.
					while($row = mysqli_fetch_array($resultado)){
						//cada linha do resultado de aluno possui os atributos id, nome e ra, no qual estão sendo recuperados e atribuídos a nova variáveis locais.
						$id = $row["id"];
						$nome = $row["nome"];
						$preço = $row["preço"];
						$quantidade = $row["quantidade"];

						//imprime na página uma nova linha dentro da tabela com os dados do aluno e um link para excluir o aluno passando o ID por parametro via GET.
						echo "<tr>
								<td>$id</td>
								<td>$nome</td>
								<td>$preço</td>    			
								<td>$quantidade</td>    			
								<td><a href='foreditarcadastro.php?id=$id&nome=$nome&preço=$preço&quantidade=$quantidade'>Editar</a></td>
								<td><a href='excluircadastro.php?id=$id'>Excluir</a></td>
							</tr>";
					}
				?>    
			</table>
		</main>
	</body>
</html>

