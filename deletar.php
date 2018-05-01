<?php
	require_once 'config.php';
	include 'grvusuario.php';
	include 'logica-usuario.php';

	$id = $_POST["id"];

	removeUsuario($conexao, $id);
	$_SESSION["success"] = "Usuário removido com sucesso.";
	header("Location: listar.php");
	die();

 ?>
