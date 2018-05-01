<?php

function buscaUsuario($conexao, $email, $senha) {
  $senhaMd5 = md5($senha);

  $query = "SELECT * FROM T_USUARIO WHERE email = ? AND senha = ?";
  $stmt = $conexao->prepare($query);
  $stmt->bindParam(1, $email);
  $stmt->bindParam(2, $senhaMd5);
  $stmt->execute();

  return $stmt->fetch(PDO::FETCH_ASSOC);
}
