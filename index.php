<?php
require 'config.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Flow</title>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/estilo.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
</head>
<body background="./img/2144.jpg">
    <?php include("includes/navbar.php");?>
    <div class="jumbotron">
        <?php if (isLoggedIn()): ?>
            <h2 id="fontes">Olá, <?php echo $_SESSION['user_name']; ?>!</a></h2><br>
            <p>
                <a class="btn btn-primary btn-lg" href="painel.php" role="button">Perfil</a>
                <a class="btn btn-primary btn-lg" href="logout.php" role="button">Sair</a>
            </p>
        <?php else: ?>
            <h2 id="fontes">Olá, visitante.</a></h2><br>
            <p>
                <a class="btn btn-primary btn-lg" href="login.php" role="button">Entre</a>
                <a class="btn btn-primary btn-lg" href="cadastro.php" role="button">Cadastre-se</a>
            </p>
        <?php endif; ?>
    </div>
    <?php include("includes/footer.html");?>
    </body>
</html>