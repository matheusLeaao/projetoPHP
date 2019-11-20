<!DOCTYPE html>
<html>
	<head>
		<title>Cadastrar usuário</title>
		<meta charset="UTF-8">
	</head>
<body>

<h2>Cadastrar usuário</h2>
	<form action="valida_usuarioCadastrar.php" method="post">
		Login: <input type="text" name="txtLogin"><br/>
		Senha: <input type="text" name="txtSenha"><br/>
        Perfil: <input type="text" name="txtPerfil"><br/>
		<input type="submit" value="Cadastrar"/>
	</form>
<?php
	session_start();
	if(isset($_SESSION['mensagem'])){
		$msg = $_SESSION['mensagem'];
		
		echo $msg;
		unset($_SESSION['mensagem']);
	}
?>
</body>
</html>