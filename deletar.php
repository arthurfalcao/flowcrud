<?php
	require_once 'config.php';
	require_once 'grvusuario.php';
	require_once 'logica-usuario.php';

	$id = $_POST["id"];

	removeUsuario($conexao, $id);
	$_SESSION["success"] = "Usuário removido com sucesso.";
	header("Location: listar.php");
	die();

 ?>
