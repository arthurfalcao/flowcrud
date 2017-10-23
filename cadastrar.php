<?php 

	include 'config.php';

		$nome = $_GET['nome'];
		$email = $_GET['email'];
		$senha = $_GET['senha'];
		$cidade = $_GET['cidade'];
		$uf = $_GET['uf'];

 		
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
	        	//echo "<meta http_equiv='refresh' content='1'; url=login.php'>";
        		echo "<script language=\"javascript\">window.location=\"login.php\";</script>";
        	}
        	
		}
 ?>