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
	<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/estilo.css">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
</head>
<body>
	<?php include("navbar.php");?>
	<div id="login">
		<h1 id="fontes">Login</h1>
		<form name="login" action="confirmar_login.php" method="post">
			<label for="inputEmail" class="sr-only">Email</label><br>
			<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
			<label for="inputSenha" class="sr-only">Senha</label><br>
			<input type="password" name="senha" id="inputSenha" class="form-control" placeholder="Senha" required><br>
			<button class="btn btn-lg btn-primary btn-block" type="submit" class="bt">Entrar</button>
		</form>
		<p>Não possui conta? <a href="cadastro.php">Cadastre-se</a></p>
	</div>
	<?php include("footer.html");?>
</body>
</html>
