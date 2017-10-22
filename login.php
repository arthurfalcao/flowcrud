<?php 
require_once "config.php"
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
		<form name="login" action="">
			<label id="l1">Email:</label><br>
			<input type="email" name="email" id="email"><br><br>
			<label id="l1">Senha:</label><br>
			<input type="password" name="senha"><br><br>
			<input type="checkbox" value="Lembrar Senha"> <label id="l1">Lembrar Senha</label>
			<br><br>
			<input type="submit" class="bt" value="Entrar">
			<input type="reset" class="bt" value="Cancelar">
		</form>
		<p>Não possui conta?</p>
		<a style="text-decoration: none; color: black; " href="cadastro.php">Cadastre-se</a><br><br>
	</div>
	<footer id="rodape">
		<p> Copyright &copy 2017</p>
	</footer>
</body>
</html>