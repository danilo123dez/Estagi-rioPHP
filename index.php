<?php

session_start();

include ("PHP/conexao.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Bem vindo à Microsoft</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="CSS/estilo.css">
</head>
<body>
	<div id="container"> <!-- Começo container -->

		<div id="topo"> <!-- Começo topo -->

			<div>
				<img class="logo" src="img/logo.png" href="index.php">
			</div>

				<div id="navegacao-esqueda">

					<ul>
						<li><a href="office.php">Office</a></li>
						<li><a href="windows.php">WIndows</a></li>
						<li><a href="xbox.php">Xbox</a></li>
						<li><a href="suporte.php">Suporte</a></li>
					</ul>

				</div>

				<div id="navegacao-direita">

					<ul>
						<li><a href="login.php">Entrar</a></li>
						<li><a href="#">Buscar</a></li>
						<li><a href="#">Carrinho</a></li>
						<li><a href="#">Toda microsoft</a></li>
					</ul>

				</div>
		</div> <!-- fim topo -->

		<div id="conteudo">

		<img src="img/xbox.jpg">

		</div>

	</div> <!-- Fim container -->
</body>
</html>