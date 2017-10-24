<?php 

include 'config.php';

$email = isset($_GET['email']) ? $_GET['email'] : '';
$senha = isset($_GET['senha']) ? $_GET['senha'] : '';

if (empty($email) || empty($senha)) {
	echo "Email ou senha inválidos";
	exit;
}

$stmt = $conexao->prepare("SELECT * FROM T_USUARIO WHERE email = ? AND senha = ?");
$stmt->bindParam(1, $email);
$stmt->bindParam(2, $senha);

$stmt->execute();

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (count($users) <= 0){
    echo "Email ou senha incorretos";
    exit;
}

$user = $users[0];

session_start();
$_SESSION['logged_in'] = true;
$_SESSION['user_id'] = $user['id'];
$_SESSION['user_name'] = $user['nome'];

echo "<script>alert('Usuário logado com sucesso');</script>";
echo "<script language=\"javascript\">window.location=\"painel.php\";</script>";

 ?>