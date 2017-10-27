<?php 

require_once 'config.php';

session_start();

$nome = isset($_POST['nome']) ? $_POST['nome'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$senha = isset($_POST['senha']) ? $_POST['senha'] : null;
$cidade = isset($_POST['cidade']) ? $_POST['cidade'] : null;
$uf = isset($_POST['uf']) ? $_POST['uf'] : null;
$id = isset($_POST['id']) ? $_POST['id'] : null;

if (empty($nome) || empty($senha) || empty($cidade) || empty($uf)){
    echo "Volte e preencha todos os campos";
    exit;
}
	
$SQL = "UPDATE T_USUARIO SET nome = ?, senha = ?, cidade = ?, uf = ? WHERE id = ?";
$stmt = $conexao->prepare($SQL);
$stmt->bindParam(1, $nome);
$stmt->bindParam(2, $senha);
$stmt->bindParam(3, $cidade);
$stmt->bindParam(4, $uf);
$stmt->bindParam(5, $id, PDO::PARAM_INT);

if($stmt->execute()){
	header('Location: listar.php');
}else{
	echo "Erro ao alterar";
	print_r($stmt->errorInfo());
}

 ?>