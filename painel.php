<?php 

session_start();

require_once 'config.php';
require 'check.php';

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Painel</title>
</head>
<body>
	<h1>Painel do Usuário</h1>
	<p>Bem-vindo ao seu painel, <?php echo $_SESSION['user_name']; ?> | <a href="logout.php">Sair</a></p><br>
	<a href="editar.php">Editar</a>
	<p>Deseja deletar sua conta? <a href="deletar.php">clique aqui</a></p>
</body>
</html>