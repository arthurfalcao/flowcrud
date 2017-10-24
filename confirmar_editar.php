<?php 

require_once 'config.php';

session_start();

$nome = isset($_POST['nome']) ? $_POST['nome'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$senha = isset($_POST['senha']) ? $_POST['senha'] : null;
$cidade = isset($_POST['cidade']) ? $_POST['cidade'] : null;
$uf = isset($_POST['uf']) ? $_POST['uf'] : null;
	
$SQL = "UPDATE T_USUARIO SET name = ?, email = ?, senha = ?, cidade = ?, uf = ? WHERE id = ?"
$stmt = $conexao->prepare($SQL);
$stmt->bindParam(1, $nome);
$stmt->bindParam(2, $email);
$stmt->bindParam(3, $senha);
$stmt->bindParam(4, $cidade);
$stmt->bindParam(5, $uf);
$stmt->bindParam(6, $id);

if($stmt->execute()){
	header('Location: painel.php');
}else{
	echo "Erro ao alterar";
	print_r($stmt->errorInfo());
}

 ?>