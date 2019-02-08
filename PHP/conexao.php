<?php

$Servidor = "172.17.0.3";
$usuario = "danilo123dez";
$senhaaa = "banana pijama";
$bd = "EstagioPHP";

// Criando a conexão com o banco 
$conn = mysqli_connect($Servidor, $usuario, $senhaaa, $bd);

// checando a conexão com o banco

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 

?>