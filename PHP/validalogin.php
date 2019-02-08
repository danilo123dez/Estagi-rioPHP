<?php

session_start();
include_once("conexao.php");

$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);

if ($btnLogin) {
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

	if (!empty ($email) and (!empty($senha))){

        $result_usuario = "SELECT id, nome, email, senha FROM Usuario WHERE email = '$email' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
        $row_usu = mysqli_fetch_assoc($resultado_usuario);
        
        if ($resultado_usuario) {
			if(password_verify($senha, $row_usu['senha'])){
                $_SESSION['id'] = $row_usu['id'];
                $_SESSION['nome'] = $row_usu['nome'];
				$_SESSION['email'] = $row_usu['email'];
				
				header("Location: ../index_log.php");
			}else{
    echo "<script>
            alert('Email ou senha errados, tente novamente4');
            </script>";

    }
}else{
echo "<script>
            alert('Email ou senha errados, tente novamente5');
            </script>";
}
}
    }else {
        echo "<script>
            alert('Email ou senha errados, tente novamente');
            </script>";
    }
?>