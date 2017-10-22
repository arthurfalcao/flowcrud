<?php 

$host = "localhost";
$db_name = "db_crud";
$username = "root";
$passaword = "";

try {
	$conexao = new PDO("mysql:host={$host}; dbname={$db_name}", $username, $passaword);
} catch (PDOException $erro) {
	echo "Erro na conexão: " . $erro->getMessage();
}

 ?>