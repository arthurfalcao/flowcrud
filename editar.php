<?php 
session_start();
require_once 'config.php';
require_once 'check.php';

$nome = isset($_POST['nome']) ? $_POST['nome'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$senha = isset($_POST['senha']) ? $_POST['senha'] : null;
$cidade = isset($_POST['cidade']) ? $_POST['cidade'] : null;
$uf = isset($_POST['uf']) ? $_POST['uf'] : null;

$id = $_SESSION['user_id'];
$nome = $_SESSION['user_name'];

if (empty($id)){
	echo "ID não encontrado";
	exit;
}

$SQL = "SELECT id, nome, email, senha, cidade, uf FROM T_USUARIO WHERE id = ?";
$stmt = $conexao->prepare($SQL);
$stmt->bindParam(1, $id);

$stmt->execute();

$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

if (!is_array($usuario)) {
	echo "Nenhum usuário encontrado";
	exit;
}
 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $_SESSION['user_name']; ?> - Editar - Flow</title>
    <link rel="stylesheet" type="text/css" href="./css/estilo.css">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/editar.css">
</head>
<body background="./img/2144.jpg">
    <?php include("includes/navbar.html");?>
    <div id="editar">
        <form class="cadastro" action="confirmar_editar.php" method="post">
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
                <input type="text" name="uf" id="inputUF" class="form-control" placeholder="UF" required>
                <br>
                <button class="btn btn-lg btn-primary btn-block" type="submit" class="bt">Alterar</button>
        </form>
    </div>
    <?php include("includes/footer.html");?>
</body>
</html>