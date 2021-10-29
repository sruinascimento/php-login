<?php
session_start(); 
require('conexao-bd.php');


if (empty($_POST['usuario']) || empty($_POST['senha']) ) {
	header('Location: index.php');
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "SELECT id_usuario, usuario FROM usuario WHERE usuario = '{$usuario}' AND senha = md5('{$senha}')";
$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

echo $row . PHP_EOL;

if($row == 1) {
	$_SESSION['usuario'] = $usuario;
	header("Location: painel.php");
} else {
	$_SESSION['nlogged'] = True;
	header("Location: index.php");
}