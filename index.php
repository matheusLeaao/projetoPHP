<!DOCTYPE html>

<html>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <head>
        <?php include 'header.php'; ?>
    <br>
    <br>
   
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
