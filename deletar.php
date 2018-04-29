<?php
	require_once 'config.php';
	include 'grvusuario.php';
	session_start();

	if (isLoggedIn()) {
		$id = $_SESSION['user_id'];
	} else {
		$id = isset($_GET['id']) ? (int) $_GET['id'] : null;
	}

	if (empty($id)) {
		echo "ID não encontrado";
		exit;
	}

	removeUsuario($conexao, $id);

	$_SESSION['logged_in'] = false;
	session_destroy();
	header('Location: listar.php?removido=true');
	die();

 ?>
