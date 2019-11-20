<?php
	session_start();
	$usuario=$_SESSION['usuario'];
?>
<!DOCYTYPE html>
<html>
<head>
	<title>Pagina Principal</title>
	<meta charset="UTF-8">
</head>
<body>
	<?php
		if($usuario['perfil']!="adm"){
			echo 'Você não ter permissao!';
		}else{
	?>
	<h3>Seja bem viado, <?php print($usuario['login'])?></h3>
	<p>Voce tem perfil: <?php print ($usuario['perfil']);?></p>

	<?php
		}
	?>
</body>
</html>