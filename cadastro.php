<?php
// require_once "config.php";
require_once 'logica-usuario.php';
// if (isLoggedIn()) {
// 	header('Location: painel.php');
// }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Cadastro - Flow</title>

	<link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/flowcrud.css">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
</head>
<body>
	<?php require_once __DIR__ . "/global.php" ?>
	<?php require_once __DIR__ . "/_includes/navbar.php" ?>

	<div id="cadastro">
		<h1 id="fontes">Cadastro</h1>
		<form name="cadastro" method="post" action="confirmar_cadastro.php">
			<input type="hidden" name="id">
			<label for="inputNome" class="sr-only">Nome</label><br>
			<input type="nome" name="name" id="inputNome" class="form-control" placeholder="Nome" required autofocus>
			<label for="inputEmail" class="sr-only">Email</label><br>
			<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required>
			<label for="inputSenha" class="sr-only">Senha</label><br>
			<input type="password" name="password" id="inputSenha" class="form-control" placeholder="Senha" required>
			<label for="inputCidade" class="sr-only">Cidade</label><br>
			<input type="text" name="city" id="inputCidade" class="form-control" placeholder="Cidade" required>
			<label for="inputUF" class="sr-only">UF</label><br>
			<input type="text" name="uf" id="inputUF" class="form-control" placeholder="UF" maxlength="2" size="2" style='text-transform:uppercase' required>
			<br>
			<button class="btn btn-lg btn-primary btn-block" type="submit" class="bt">Cadastrar</button>
		</form>
		<p>Já possui conta? <a href="login.php">Entre</a><br><br></p>
	</div>
	
	<?php require_once __DIR__ . "/_includes/footer.php" ?>
</body>
</html>
