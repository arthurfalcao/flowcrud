<?php

include 'config.php';

$nome = $_GET['nome'];
$email = $_GET['email'];
$senha = $_GET['senha'];
$cidade = $_GET['cidade'];
$uf = $_GET['uf'];

/* Otimização em andamento
if (empty($nome) || empty($email) || empty($senha) || empty($cidade) || empty($uf)){
    echo "Volte e preencha todos os campos";
    exit;
}

$SQL = "INSERT INTO T_USUARIO (id, nome, email, senha, cidade, uf) VALUES (DEFAULT, ?, ?, ?, ?, ?)";
$stmt = $conexao->prepare($SQL);
$stmt->bindParam(1, $nome);
$stmt->bindParam(2, $email);
$stmt->bindParam(3, $senha);
$stmt->bindParam(4, $cidade);
$stmt->bindParam(5, $uf);

if($stmt->execute()){
    echo "<script>alert('Usuário cadastrado com sucesso.');</script>";
    echo "<script language=\"javascript\">window.location=\"login.php\";</script>"; 
}else{
    echo "Erro ao cadastrar";
    print_r($stmt->erroInfo());
}
*/ 		
if(empty($nome)){
	echo "<script>alert('Preencha todos os campos para se cadastrar!'); history.back();</script>";
}elseif(empty($email)){
	echo "<script>alert('Preencha todos os campos para se cadastrar!'); history.back();</script>";
}elseif(empty($senha)){
	echo "<script>alert('Preencha todos os campos para se cadastrar!'); history.back();</script>";
}elseif(empty($cidade)){
	echo "<script>alert('Preencha todos os campos para se cadastrar!'); history.back();</script>";
}elseif(empty($uf)){
	echo "<script>alert('Preencha todos os campos para se cadastrar!'); history.back();</script>";
}else{
	$SQL = "SELECT email FROM T_USUARIO";
	$existe = 0;
    foreach ($conexao->query($SQL) as $row) {
        if ($row['email'] == $email) {
        	echo "Email já exite.";
        	$existe = 1;
        }
    }
    if ($existe != 1) {
        $conexao->query("INSERT INTO T_USUARIO (id, nome, email, senha, cidade, uf) VALUES (DEFAULT, '$nome','$email','$senha','$cidade','$uf')");
	    echo "<script>alert('Usuário cadastrado com sucesso.');</script>";
        echo "<script language=\"javascript\">window.location=\"login.php\";</script>";
    }       	
}
 ?>