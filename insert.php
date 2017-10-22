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