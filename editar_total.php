<?php 
require 'config.php';

$id = isset($_GET['id']) ? (int) $_GET['id'] : null;

if (empty($id)){
	echo "ID não encontrado";
	exit;
}

$SQL = "SELECT id, nome, email, senha, cidade, uf FROM T_USUARIO WHERE id = ?";
$stmt = $conexao->prepare($SQL);
$stmt->bindParam(1, $id);

$stmt->execute();

$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!is_array($user)) {
	echo "Nenhum usuário encontrado";
	exit;
}
 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Editar - Flow</title>
    <link rel="stylesheet" type="text/css" href="./css/estilo.css">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/editar.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
</head>
<body background="./img/2144.jpg">
    <?php include("includes/navbar.php");?>
    <div id="editar">
    <h1 id="fontes">Editar</h1>
        <form class="cadastro" action="confirmar_editar_total.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id ?>">
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