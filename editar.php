<?php
require_once 'config.php';
include 'grvusuario.php';
session_start();
if (isLoggedIn()) {
    $id = $_SESSION['user_id'];
    $nome = $_SESSION['user_name'];
}else{
    $id = isset($_GET['id']) ? (int) $_GET['id'] : null;
}
if (empty($id)){
	echo "ID não encontrado";
	exit;
}

$user = searchUser($conexao, $id);
 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Editar - Flow</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/estilo.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/editar.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
</head>
<body background="./assets/img/2144.jpg">
    <?php include("navbar.php");?>
    <div id="editar">
    <h1 id="fontes">Editar</h1>
        <form class="cadastro" action="confirmar_editar.php" method="post">
            <input type="hidden" name="id" value="<?=$user['id']?>">
            <label for="inputNome" class="sr-only">Nome</label><br>
            <input type="nome" name="nome" id="inputNome" class="form-control" value="<?=$user['nome']?>" placeholder="Nome" required autofocus>
            <label for="inputEmail" class="sr-only">Email</label><br>
            <input type="email" name="email" id="inputEmail" class="form-control" value="<?=$user['email']?>" placeholder="Email" required>
            <label for="inputSenha" class="sr-only">Senha</label><br>
            <input type="password" name="senha" id="inputSenha" class="form-control" placeholder="Senha" required>
            <label for="inputCidade" class="sr-only">Cidade</label><br>
            <input type="text" name="cidade" id="inputCidade" class="form-control" value="<?=$user['cidade']?>" placeholder="Cidade" required>
            <label for="inputUF" class="sr-only">UF</label><br>
            <input type="text" name="uf" id="inputUF" class="form-control" value="<?=$user['uf']?>" placeholder="UF" maxlength="2" size="2" style='text-transform:uppercase' required>
            <br>
            <button class="btn btn-lg btn-primary btn-block" type="submit" class="bt">Alterar</button>
        </form>
    </div>
    <?php include("footer.html");?>
</body>
</html>
