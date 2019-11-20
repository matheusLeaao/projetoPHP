<?php
	require_once('conexao.php');
	session_start();
	$login = $_POST['txtLogin'];
    $senha = $_POST['txtSenha'];
    $perfil = $_POST['txtPerfil'];

	if(empty($login)){
		$_SESSION['mensagem']="Preencha o campo Login";
		header("location: login_usuario.php");

	}else if (empty($senha)){
		$_SESSION['mensagem']="Preencha o campo Senha";
        header("location: login_usuario.php");
    
    }else if (empty($senha)){
		$_SESSION['mensagem']="Preencha o campo perfil";
		header("location: login_usuario.php");

	}else{
        $sql = "INSERT INTO usuario(login,senha,perfil) VALUES('$login','$senha','$perfil');";
		$resultado = mysqli_query($conexao,$sql);
        $dados = mysqli_fetch_assoc($resultado);
        header("location: login_usuario.php");
	}
?>