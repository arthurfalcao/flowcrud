<?php
require_once 'config.php';
require_once 'grvusuario.php';
require_once 'logica-usuario.php';
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
 	<link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/flowcrud.css">
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
 </head>
 <body>
     <?php
     require_once __DIR__ . "/_includes/navbar.php";
    require_once 'mostra-alerta.php';

    showAlert("success");
  ?>
    <?php if ($total > 0): ?>
    <div class="container-fluid px-0">
      <div id="list">
          <div class="table-responsive col-md-12 px-0">
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
    </div>
    <?php require_once __DIR__ . "/_includes/footer.php" ?>
 </body>
 </html>
