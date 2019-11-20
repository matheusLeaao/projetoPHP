<?php
	session_start();
	$usuario = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <head>
		<title>Página Principal</title>
        <?php include 'header.php'; ?>
    <br>
    <br>
   <body>

	<?php
		if($usuario['perfil'] !="adm"){
			echo 'Você não tem permissao de acesso!';
		}else{
	>?
	<h3>Seja bem viado, <?php print($usuario['login'])?></h3>
	<p>Você tem perfil de acesso: <?php print (['perfil']);?></p>
		
	<?php
		}

	?>
    <form action ='cadastroAgenda.php'Method='post'>
        <div class="form-group">
        <fieldset>
            <legend>FORMULARIO DE CADASTRO</legend>
            <BR>
            <LABEL>Nome: </LABEL><input type ='text'name="nome" placeholder="insira seu nome aqui" class="form-control">
            <br><br>
            <LABEL>Telefone: </LABEL><input type ='number'name="telefone" placeholder="insira seu telefone aqui" class="form-control">
            <br><br>
            <input type ='submit'name="btnCadastrar"class="btn btn-primary btn-block">
        </fieldset>
            </div>
    </form>
    
    <footer>
        
         <?php include 'footer.php'; ?>
    </footer>
    </body>
</html>
