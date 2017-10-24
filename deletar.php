<?php 

require_once 'config.php';
require_once 'check.php';

session_start();

$id = $_SESSION['user_id'];

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