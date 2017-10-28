<?php
require_once "config.php";
session_start();
if (isLoggedIn()) {
	header('Location: painel.php');
}
 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Login - Flow</title>
	<link rel="stylesheet" type="text/css" href="css/login2.css">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./css/estilo.css">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
</head>
<body background="./img/2144.jpg">
	<?php include("includes/navbar.php");?>
	<div id="login">
		<h1 id="fontes">Login</h1>
		<form name="login" action="confirmar_login.php" method="post">
			<label for="inputEmail" class="sr-only" id="l1">Email</label><br>
			<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
			<label for="inputSenha" id="l1" class="sr-only">Senha</label><br>
			<input type="password" name="senha" id="inputSenha" class="form-control" placeholder="Senha" required><br>
			<button class="btn btn-lg btn-primary btn-block" type="submit" class="bt">Entrar</button>
		</form>
		<p></p>
		<p>Não possui conta? <a href="cadastro.php">Cadastre-se</a></p>
	</div>
	<?php include("includes/footer.html");?>
</body>
</html>
