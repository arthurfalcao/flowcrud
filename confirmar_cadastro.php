<?php
require_once 'config.php';
include 'grvusuario.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];

if(insertUser($conexao, $nome, $email, $senha, $cidade, $uf)) {
    echo "<script>alert('Usuário cadastrado com sucesso');</script>";
    echo "<script language=\"javascript\">window.location=\"login.php\";</script>";
} else {
    echo "<script>alert('Email já cadastrado'); history.back();</script>";
}
 ?>
