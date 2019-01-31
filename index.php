<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flow</title>

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

    <div class="jumbotron">
        <?php showAlert("success") ?>
        <?php if (userIsLogged()): ?>
            <h2 id="fontes">Olá, <?php echo $_SESSION['usuario_logado']; ?>!</a></h2><br>
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
    
    <?php require_once __DIR__ . "/_includes/footer.php" ?>
</body>
</html>