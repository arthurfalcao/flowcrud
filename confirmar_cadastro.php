<?php
require_once 'config.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];

$SQL = "INSERT INTO T_USUARIO (id, nome, email, senha, cidade, uf) VALUES (DEFAULT, ?, ?, ?, ?, ?)";
$stmt = $conexao->prepare($SQL);
$stmt->bindParam(1, $nome);
$stmt->bindParam(2, $email);
$stmt->bindParam(3, $senha);
$stmt->bindParam(4, $cidade);
$stmt->bindParam(5, $uf);

if($stmt->execute()){
    echo "<script>alert('Usuário cadastrado com sucesso');</script>";
    echo "<script language=\"javascript\">window.location=\"login.php\";</script>"; 
}else{
    echo "<script>alert('Email já cadastrado'); history.back();</script>";
}
 ?>