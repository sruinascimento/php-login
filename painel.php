<?php
include('verifica_login.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Painel</title>
</head>
<body>
	<h1>R SYSTEM</h1>
	<h2>Bem vindo <?= $_SESSION['usuario']; ?></h2>
	<h2><a href="logout.php">Logout</a></h2>
</body>
</html>