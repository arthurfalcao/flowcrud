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
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<div id="login">
		<a href="./login.php">
			<img  class="imagem"  src="./img/login.png" alt="logo" height="20px" width="80px">
		</a>
		<form name="login" action="confirmar_login.php" method="request">
			<label for="inputEmail" class="sr-only" id="l1">Email</label><br>
			<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus><br><br>
			<label for="inputSenha" id="l1" class="sr-only">Senha</label><br>
			<input type="password" name="senha" id="inputSenha" class="form-control" placeholder="Senha" required><br><br>
			<input type="checkbox" value="Lembrar"> <label id="l1">Lembre me</label>
			<br><br>
			<button class="btn btn-lg btn-primary btn-block" type="submit" class="bt"> Entrar</button>
		</form>
		<p>Não possui conta?</p>
		<a style="text-decoration: none; color: black; " href="cadastro.php">Cadastre-se</a><br><br>
	</div>
	<footer id="rodape">
		<p> Copyright &copy 2017</p>
	</footer>
</body>
</html>
