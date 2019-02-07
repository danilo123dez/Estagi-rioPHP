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
						<li class="margin-left-header"><a href="windows.php">WIndows</a></li>
						<li class="margin-left-header"><a href="xbox.php">Xbox</a></li>
						<li class="margin-left-header"><a href="suporte.php">Suporte</a></li>
					</ul>

				</div>

				<div id="navegacao-direita">

					<ul>
					<li><img style="width: 35px; margin-top: 5px; padding-top: 15px; margin-left: 3px;" src="img/perfil.png" alt="Compras"></li>
						<li><a href="login.php">Entrar</a></li>
						<li><img style="width: 1em; margin-top: 16px; padding-top: 15px;" src="img/carrinho.png" alt="Compras"></li>
						<li><a href="#">Carrinho</a></li>
						<li><img style="width: 1em; margin-top: 16px; padding-top: 15px;" src="img/lupa.png" alt="Compras"></li>
						<li><a href="#">Buscar</a></li>
						<li><img style="width: 1em; margin-top: 20px; padding-top: 15px; margin-left: 2px;" src="img/seta.png" alt="Compras"></li>
						<li><a href="#">Toda microsoft</a></li>
					</ul>

				</div>
		</div> <!-- fim topo -->

		<div id="conteudo">

		<img class="img1" src="img/xbox.jpg" alt="" id="banner">

			<div id="noticias">

				<div class="not">
					<img class="lateral" src="img/halo.jpg" alt="Halo">
					<p>
						<span style="font-weight: bold; font-size: 20px;">Xbox One S</span><br>
						O melhor sistema de jogos Online.<br>
						<span style="font-weight: bold;"><a href="#">SAIBA MAIS ></a></span>
					</p>
				</div>

				<div class="not margin-left">
					<img src="img/pessoa.jpg" alt="Halo">
					<p>
						<span style="font-weight: bold; font-size: 20px;">Atualização do windows 10</span><br>
						A atualização de outubro permite que vc tire o <br>
						máximo de proveito do seu tempo<br>
						<span style="font-weight: bold;"><a href="#">SAIBA MAIS ></a></span>
					</p>
				</div>

				<div class="not margin-left">
					<img src="img/note.jpg" alt="Halo">
					<p>
						<span style="font-weight: bold; font-size: 20px;">Microsoft Store</span><br>
						Encontre o que você precisa para a sua casa, <br>
						escola, trabalho e diversão <br>
						<span style="font-weight: bold;"><a href="#">SAIBA MAIS ></a></span>
					</p>
				</div>

				<div class="not margin-left">
					<img src="img/gamepass.jpg" alt="Halo">
					<p>
						<span style="font-weight: bold; font-size: 20px;">Xbox Game Pass</span><br>
						Jogue os novos e exclusivos títulos do Xbox One <br>
						e mais de 100 outros jogos incríveis. <br>
						<span style="font-weight: bold;"><a href="#">SAIBA MAIS ></a></span>
					</p>
				</div>

			</div>

		</div>

		<div id="footer">

			<div class="conteudos-footer margin-left-footer">

			<ul>
				<li><h4>Novidades</h4></li>
				<li><a href="#">Xbox One X</a></li>
				<li><a href="#">Aplicativos do Windows 10</a></li>
				<li><a href="#">Aplicativos do Office</a></li>
			</ul>

			</div>

			<div class="conteudos-footer">

			<ul>
				<li><h4>Store e Suporte</h4></li>
				<li><a href="#">Perfil da conta</a></li>
				<li><a href="#">Centro de Download</a></li>
				<li><a href="#">Vendas e suporte</a></li>
				<li><a href="#">Devoluções</a></li>
				<li><a href="#">Acompanhamento de pedidos</a></li>
				<li><a href="#">Suporte</a></li>
			</ul>

			</div>

			<div class="conteudos-footer">

			<ul>
				<li><h4>Educação</h4></li>
				<li><a href="#">Microsoft na educação</a></li>
				<li><a href="#">Office para estudantes</a></li>
				<li><a href="#">Office 365 para escolas</a></li>
				<li><a href="#">Microsoft Azure na Educação</a></li>
			</ul>

			</div>

			<div class="conteudos-footer">

			<ul>
				<li><h4>Corporativo</h4></li>
				<li><a href="#">Microsoft Azure</a></li>
				<li><a href="#">Corporativo</a></li>
				<li><a href="#">Plataforma de dados</a></li>
				<li><a href="#">Recursos para parceiros da Microsoft</a></li>
				<li><a href="#">Produção e recursos</a></li>
				<li><a href="#">Serviços financeiros</a></li>
			</ul>

			</div>

			<div class="conteudos-footer">

			<ul>
				<li><h4>Desenvolvedor</h4></li>
				<li><a href="#">Microsoft Visual Studio</a></li>
				<li><a href="#">Centro de Desenvolvimento do Windows</a></li>
				<li><a href="#">Rede de Desenvolvedores</a></li>
				<li><a href="#">TechNet</a></li>
				<li><a href="#">Programa de desenvolvedores da microsoft</a></li>
				<li><a href="#">CHannel 9</a></li>
				<li><a href="#">Centro de Desenvolvimento do Office</a></li>
			</ul>

			</div>

			<div class="conteudos-footer">

			<ul>
				<li><h4>Empresa</h4></li>
				<li><a href="#">Carreiras</a></li>
				<li><a href="#">SObre a Microsoft</a></li>
				<li><a href="#">Notícias da Empresa</a></li>
				<li><a href="#">Privacidade na Microsoft</a></li>
				<li><a href="#">Investidores</a></li>
				<li><a href="#">Diversidade e inclusão</a></li>
				<li><a href="#">Segurança</a></li>
			</ul>

			</div>

		</div>

	</div> <!-- Fim container -->

	<script src="slide.js">
	


	</script>
</body>
</html>