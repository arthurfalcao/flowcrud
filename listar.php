<?php
require_once 'config.php';
include 'grvusuario.php';
session_start();
if (isLoggedIn()) {
    isLoggedOut();
    header('Location: listar.php');
}

$SQL_total = "SELECT COUNT(*) AS TOTAL FROM T_USUARIO ORDER BY id ASC";
$stmt_total = $conexao->prepare($SQL_total);
$stmt_total->execute();
$total = $stmt_total->fetchColumn();

 ?>

 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
 	<meta charset="utf-8">
 	<title>Usuários - Flow</title>
 	<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="./assets/css/estilo.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/listar.css">
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
 </head>
 <body background="./assets/img/2144.jpg">
 	<?php include("navbar.php");
        if (array_key_exists("removido", $_GET) && $_GET["removido"] == "true"):
  ?>
            <p class="alert-success text-center">Usuário apagado com sucesso.</p>
  <?php endif ?>
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
                    <?php
                      $usuarios = listaUsuarios($conexao);
                      foreach ($usuarios as $usuario):
                    ?>
                    <tr>
                        <td><?=$usuario['id']?></td>
                        <td><?=$usuario['nome']?></td>
                        <td><?=$usuario['email']?></td>
                        <td><?=$usuario['cidade']?></td>
                        <td style='text-transform:uppercase'><?=$usuario['uf']?></td>
                        <td class="actions">
                            <a class="btn btn-warning btn-xs" href="editar.php?id=<?=$usuario['id']?>">Editar</a>
                            <form class="col-lg-3" action="deletar.php" method="post">
                              <input type="hidden" name="id" value="<?=$usuario['id']?>">
                              <button class="btn btn-danger btn-xs">Excluir</button>
                            </form>
                        </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
            </table>
            <?php else: ?>
                <p id="else">Nenhum usuário registrado</p>
    <?php endif; ?>
        </div>
    </div>
 <?php include("footer.html");?>
 </body>
 </html>
