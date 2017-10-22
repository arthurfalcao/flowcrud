<?php 
require_once "config.php"
 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Cadastro</title>
</head>
<body>
	<div id="cadastro">
		<form method="post" action="?go=cadastrar">
			<table id="tabela_cad">
				<tr>
					<td>Nome:</td>
					<td><input type="text" name="nome" id="nome" class="txt"></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="text" name="email" id="email" class="txt"></td>
				</tr>
				<tr>
					<td>Senha:</td>
					<td><input type="password" name="senha" id="senha" class="txt"></td>
				</tr>
				<tr>
					<td>Cidade:</td>
					<td><input type="text" name="cidade" id="cidade" class="txt"></td>
				</tr>
				<tr>
					<td>UF: </td>
					<td><input type="text" name="uf" id="uf" class="txt"></td>
				</tr>
			</table>
			<br>
			<input type="submit" value="Cadastrar">
		</form>
	</div>
	<footer id="rodape">
		<p> Copyright &copy 2017</p>
	</footer>
</body>
</html>