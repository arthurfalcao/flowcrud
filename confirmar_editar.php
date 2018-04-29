<?php
require_once 'config.php';
session_start();

$nome = isset($_POST['nome']) ? $_POST['nome'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$senha = isset($_POST['senha']) ? md5($_POST['senha']) : null;
$cidade = isset($_POST['cidade']) ? $_POST['cidade'] : null;
$uf = isset($_POST['uf']) ? $_POST['uf'] : null;

if (isLoggedIn()) {
	$id = $_SESSION['user_id'];
} else {
	$id = isset($_POST['id']) ? $_POST['id'] : null;
}

if(altertUser($conexao, $id, $nome, $email, $senha, $cidade, $uf)) {
	if (isLoggedIn()) {
		$_SESSION['user_name'] = $nome;
		$_SESSION['user_cidade'] = $cidade;
		$_SESSION['user_uf'] = $uf;
		header('Location: painel.php');
	} else {
		header('Location: listar.php');
	}
} else {
	echo "Erro ao alterar";
	print_r($stmt->errorInfo());
}

 ?>
