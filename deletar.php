<?php 
require_once 'config.php';
session_start();

if (isLoggedIn()) {
	$id = $_SESSION['user_id'];	
}else{
	$id = isset($_GET['id']) ? (int) $_GET['id'] : null;
}

if (empty($id)){
	echo "ID não encontrado";
	exit;
}

$SQL = "DELETE FROM T_USUARIO WHERE id = ?";
$stmt = $conexao->prepare($SQL);
$stmt->bindParam(1, $id);

if ($stmt->execute()){
    header('Location: index.php');
    require_once 'logout.php';
}else{
    echo "Erro ao remover";
    print_r($stmt->errorInfo());
}

 ?>