<?php
require_once "config.php";
if (isLoggedIn()) {
	header('Location: painel.php');
}
 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Login - Flow</title>
	<link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/flowcrud.css">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
</head>
<body>
	<?php
		require_once 'logica-usuario.php';
		require_once 'mostra-alerta.php';
	?>
	<?php require_once __DIR__ . "/_includes/navbar.php" ?>
	<div id="login">
		<h1 id="fontes">Login</h1>
		<form name="login" action="confirmar_login.php" method="post">
			<label for="inputEmail" class="sr-only">Email</label><br>
			<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
			<label for="inputSenha" class="sr-only">Senha</label><br>
			<input type="password" name="senha" id="inputSenha" class="form-control" placeholder="Senha" required><br>

			<?php
				showAlert("success");
				showAlert("danger");
			?>

			<button class="btn btn-lg btn-primary btn-block" type="submit" class="bt">Entrar</button>
		</form>
		<p>Não possui conta? <a href="cadastro.php">Cadastre-se</a></p>
	</div>
	<?php require_once __DIR__ . "/_includes/footer.php" ?>
</body>
</html>
