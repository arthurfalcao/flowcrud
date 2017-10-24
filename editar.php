<?php 

include 'config.php';

session_start();

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
         
        <form action="confirmar_editar.php" method="request">
            <label for="name">Nome: </label>
            <br>
            <input type="text" name="nome" id="nome" value="<?php echo $nome ?>">
 
            <br><br>
 
            <label for="email">Email: </label>
            <br>
            <input type="text" name="email" id="email" value="<?php echo $user['email'] ?>">
 
            <br><br>
             
            Gênero:
            <br>
            <input type="radio" name="gender" id="gener_m" value="m" <?php if ($user['gender'] == 'm'): ?> checked="checked" <?php endif; ?>>
            <label for="gener_m">Masculino </label>
            <input type="radio" name="gender" id="gener_f" value="f" <?php if ($user['gender'] == 'f'): ?> checked="checked" <?php endif; ?>>
            <label for="gener_f">Feminino </label>
             
            <br><br>
 
            <label for="birthdate">Data de Nascimento: </label>
            <br>
            <input type="text" name="birthdate" id="birthdate" placeholder="dd/mm/YYYY" value="<?php echo dateConvert($user['birthdate']) ?>">
 
            <br><br>
 
            <input type="hidden" name="id" value="<?php echo $id ?>">
 
            <input type="submit" value="Alterar">
        </form>
 
    </body>
</html>