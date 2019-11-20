<?php
include 'header.php';
include 'conexao.php';
$nomeAgenda=$_POST['nome'];
$celularAgenda=$_POST['telefone'];
$sql = "INSERT INTO pessoa (nome, telefone) VALUES ('$nomeAgenda', '$celularAgenda')";

//$resultado= ;
if (mysqli_query($conexao, $sql)){
    echo "Conexão efetuada!";
}
