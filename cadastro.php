<?php

session_start();

include ("PHP/conexao.php");

$botao_cadastra = filter_input(INPUT_POST, 'botao_cadastra', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

if($botao_cadastra) {
    $dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    
    $erro = false;
	$dados_st = array_map('strip_tags', $dados_rc);
    $dados = array_map('trim', $dados_rc);
    
    if (in_array('',$dados)){
		$erro = true;
		echo "<script>
	alert('É necessário preencher todos os campos');
	</script>";
	}
    else if(strstr($email, " ")){
		$erro = true;
		echo "<script>
	alert('Não pode haver espaços no email');
	</script>";
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ 
		$erro = true;
		echo "<script>
	alert('E-mail inválido');
	</script>";  
	}
    else{
        $result_usu = "SELECT id FROM Usuario WHERE email='".$dados['email']."'";
		$resultado_usu = mysqli_query($conn, $result_usu);
		if(($resultado_usu) AND ($resultado_usu -> num_rows != 0)){
			$erro = true;
			echo "<script>
	alert('Este Email já está sendo utilizado');
	</script>";
		}
    }

    if (!$erro){
        $dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);

        $Enviar_dados = "INSERT INTO Usuario (email, senha) VALUES (
            '" .$dados['email']. "',
            '" .$dados['senha']. "'
            )";
            
            $resultado_usuario = mysqli_query($conn, $Enviar_dados);
            if(mysqli_insert_id($conn)){
                echo "<script>
            alert('Cadastro feito com sucesso!');
            </script>";
            }else{
                echo "<script>
            alert('Ocorreu algum erro, tente novamente');
            </script>";
            }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Bem vindo à Microsoft</title>
	<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="CSS/cadastro.css">
</head>
<body>
	<div id="container"> <!-- Começo container -->
        
        <div id="quadrado">
            <div id="form">
                <form method="POST">
                <img class="logo" src="img/logo.png"> <br>
                <h3>Criar conta</h3>
                <input class="caixa-texto" name="email" type="text" placeholder="nome@example.com"> <br>
                <input class="caixa-texto" name="senha" type="password" placeholder="senha"> <br>
                <p class="info"><a href="cadastro.php">Usar um número de telefone</a></p> <br>
                <p class="info"><a href="#">Usar seu endereço de email</a></p>
                <input class="botao" type="submit" name="botao_cadastra" value="Cadastrar">
                </form>
            </div>
        </div>
    </div>
<body>
<html>