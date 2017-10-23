<?php 
	if ($_POST) {
		
		include 'config.php';

		try{
			$query = "INSERT INTO T_USUARIO SET nome=:nome, email=:email, senha=:senha, cidade=:cidade, uf=:uf";

			$stmt = $conexao->prepare($query);

			$nome=htmlspecialchars(strip_tags($_POST['nome']));
			$email=htmlspecialchars(strip_tags($_POST['email']));
			$senha=htmlspecialchars(strip_tags($_POST['senha']));
			$cidade=htmlspecialchars(strip_tags($_POST['cidade']));
			$uf=htmlspecialchars(strip_tags($_POST['uf']));

			$stmt->bindParam(':nome', $nome);
			$stmt->bindParam(':email', $email);
			$stmt->bindParam(':senha', $senha);
			$stmt->bindParam(':cidade', $cidade);
			$stmt->bindParam(':uf', $uf);

			$criado=date('Y-m-d H:i:s');
			$stmt->bindParam(':criado', $criado);

			if ($stmt->execute()) {
				echo"<div class='alert alert-success'>Record was saved.</div>";
			}else{
				echo "<div class='alert alert-danger'>Unable to save record.</div>";
			}
		}

		catch (PDOException $erro) {
			echo "Erro: " . $erro->getMessage();
		}
	}

 ?>

<?php 

include 'config.php';

$email = $_GET['email'];
$senha = $_GET['senha'];

$confirmacao = "SELECT * FROM T_USUARIO WHERE email = '$email' AND senha = '$senha'";
$existe = 0;
foreach ($conexao->query($confirmacao) as $row) {
	if ($row['email'] == $email && $row['senha'] == $senha) {
		setcookie("email", $email);
		setcookie("senha", $senha);
		echo "Usuário logado.";
	}else{
		echo "Login ou senha inválidos. <a href=javascript:history.go(-1)>Clique aqui para voltar.</a>";
	}
}
?>