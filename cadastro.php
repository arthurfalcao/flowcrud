<?php 
require_once "config.php"
 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Cadastro</title>
	<link rel="stylesheet" type="text/css" href="css/cadastro.css">
</head>
<body>
	<div id="cadastro">
		<a href="./cadastro.php">
			<img  class="imagem"  src="./img/registro.png" alt="logo" height="20px" width="80px">
		</a>
		<form name="cadastro" method="request" action="cadastrar.php">
			<input type="hidden" name="id">
			<pre id="txt">
Nome:	<input type="text" name="nome" id="nome" class="txt">
Email:	<input type="email" name="email" id="email" class="txt">
Senha:	<input type="password" name="senha" id="senha" class="txt">
Cidade:	<input type="text" name="cidade" id="cidade" class="txt">
UF: 	<input type="text" name="uf" id="uf" class="txt">
			</pre>
			<input type="submit" value="Cadastrar" class="bt">
		</form>
		<p>Já possui conta?</p>
		<a href="login.php">Entre</a><br><br>
		</div>
	<footer>
		<p> Copyright &copy 2017</p>
	</footer>
</body>
</html>