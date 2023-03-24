<?php

if(isset($_POST['enviar']))
{

include_once('config.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];


$result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,mensagem)
VALUES ('$nome','$email','$telefone','$mensagem')");
}


?>








