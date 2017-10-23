<?php 

include 'config.php';

$email = $_GET['email'];
$senha = $_GET['senha'];

$stmt = $conexao->prepare("SELECT * 
	FROM T_USUARIO 
	WHERE email = ? AND senha = ?");
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

echo "Usuário logado.";

//header('Location: index.php');

 ?>