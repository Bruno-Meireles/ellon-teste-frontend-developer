<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'formulario';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

header("location: index.php");
exit;

?>
