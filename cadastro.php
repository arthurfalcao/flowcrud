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
	<title>Cadastro - Flow</title>
	<link rel="stylesheet" type="text/css" href="./assets/css/cadastro2.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/estilo.css">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
</head>
<body background="./assets/img/2144.jpg">
	<?php include("navbar.php");?>
	<div id="cadastro">
		<h1 id="fontes">Cadastro</h1>
		<form name="cadastro" method="post" action="confirmar_cadastro.php">
			<input type="hidden" name="id">
			<label for="inputNome" class="sr-only">Nome</label><br>
			<input type="nome" name="nome" id="inputNome" class="form-control" placeholder="Nome" required autofocus>
			<label for="inputEmail" class="sr-only">Email</label><br>
			<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required>
			<label for="inputSenha" class="sr-only">Senha</label><br>
			<input type="password" name="senha" id="inputSenha" class="form-control" placeholder="Senha" required>
			<label for="inputCidade" class="sr-only">Cidade</label><br>
			<input type="text" name="cidade" id="inputCidade" class="form-control" placeholder="Cidade" required>
			<label for="inputUF" class="sr-only">UF</label><br>
			<input type="text" name="uf" id="inputUF" class="form-control" placeholder="UF" maxlength="2" size="2" style='text-transform:uppercase' required>
			<br>
			<button class="btn btn-lg btn-primary btn-block" type="submit" class="bt">Cadastrar</button>
		</form>
		<p>Já possui conta? <a href="login.php">Entre</a><br><br></p>
		</div>
	<?php include("footer.html");?>
</body>
</html>
