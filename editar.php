<?php 

require_once 'config.php';
require_once 'check.php';

session_start();

$nome = isset($_POST['nome']) ? $_POST['nome'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$senha = isset($_POST['senha']) ? $_POST['senha'] : null;
$cidade = isset($_POST['cidade']) ? $_POST['cidade'] : null;
$uf = isset($_POST['uf']) ? $_POST['uf'] : null;

$id = $_SESSION['user_id'];

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
 
        <title>Edição de Usuário</title>
    </head>
 
    <body>
 
        <h1>Sistema de Cadastro</h1>
 
        <h2>Edição de Usuário</h2>
         
        <form action="confirmar_editar.php" method="post">
            <label for="nome">Nome: </label>
            <br>
            <input type="text" name="nome" id="nome" value="<?php echo $nome ?>">
 
            <br><br>
             
            <label for="senha">Senha: </label>
            <br>
            <input type="password" name="senha" id="senha" value="<?php echo $senha ?>">
             
            <br><br>
 
            <label for="cidade">Cidade: </label>
            <br>
            <input type="text" name="cidade" id="cidade" value="<?php echo $cidade ?>">
 
            <br><br>

            <label for="cidade">UF: </label>
            <br>
            <input type="text" name="uf" id="uf" value="<?php echo $uf ?>">
 
            <br><br>
 
            <input type="hidden" name="id" value="<?php echo $id ?>">
 
            <input type="submit" value="Alterar">
        </form>
 
    </body>
</html>