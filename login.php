<?php

session_start();

include ("PHP/conexao.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Bem vindo à Microsoft</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="CSS/login.css">
</head>
<body>
	<div id="container"> <!-- Começo container -->
        
        <div id="quadrado">
            <div id="form">
                <form method="POST" action="PHP/validalogin.php">
                <img class="logo" src="img/logo.png"> <br>
                <h3>Entrar</h3>
                <input class="caixa-texto" type="email" name="email" placeholder="Email"> <br>
                <input class="caixa-texto" type="password" name="senha" placeholder="Senha"> <br>
                <p class="info">Não tem uma conta? <a href="cadastro.php">Crie uma!</a></p> <br>
                <p class="info"><a href="#">Esqueceu o nome de usuário</a></p>
                <input class="botao" type="submit" name="btnLogin" id="" value="Entrar">
                </form>
            </div>
        </div>
        
    </div>
<body>
<html>