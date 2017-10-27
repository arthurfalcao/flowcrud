<?php 
require_once 'config.php';
session_start();

$SQL_total = "SELECT COUNT(*) AS TOTAL FROM T_USUARIO ORDER BY id ASC";
$SQL = "SELECT id, nome, email, cidade, uf FROM T_USUARIO ORDER BY id ASC";
$stmt_total = $conexao->prepare($SQL_total);
$stmt_total->execute();
$total = $stmt_total->fetchColumn();

$stmt = $conexao->prepare($SQL);
$stmt->execute();
 ?>

 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
 	<meta charset="utf-8">
 	<title>Usuários - Flow</title>
 	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="./css/estilo.css">
    <link rel="stylesheet" type="text/css" href="./css/listar.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
 </head>
 <body background="./img/2144.jpg">
 	<?php include("includes/navbar.php");?>
    <?php if ($total > 0): ?>
    <div id="list" class="row"> 
        <div class="table-responsive col-md-12">
            <table class="table table-striped" cellspacing="0" cellpadding="0">
                <thead id="tabela">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Cidade</th>
                        <th>UF</th>
                        <th class="actions">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($user = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                    <tr>
                        <td><?php echo $user['id'] ?></td>
                        <td><?php echo $user['nome'] ?></td>
                        <td><?php echo $user['email'] ?></td>
                        <td><?php echo $user['cidade'] ?></td>
                        <td><?php echo $user['uf'] ?></td>
                        <td class="actions">
                            <a class="btn btn-success btn-xs" href="cadastro.php"p>Cadastrar</a>
                            <a class="btn btn-warning btn-xs" href="editar_total.php?id=<?php echo $user['id'] ?>">Editar</a>
                            <a class="btn btn-danger btn-xs"  href="deletar.php?id=<?php echo $user['id'] ?>" data-toggle="modal" data-target="#delete-modal">Excluir</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <?php else: ?>
                <p id="else">Nenhum usuário registrado</p> 
    <?php endif; ?>
        </div>
    </div>
 <?php include("includes/footer.html");?>
 </body>
 </html>