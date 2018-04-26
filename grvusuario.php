<?php

function listaUsuarios($conexao) {
  $usuarios = [];

  $query = "SELECT id, nome, email, cidade, uf FROM T_USUARIO ORDER BY id ASC";
  $stmt = $conexao->prepare($query);
  $stmt->execute();

  while ($usuario = $stmt->fetch(PDO::FETCH_ASSOC)) {
    array_push($usuarios, $usuario);
  }
  return $usuarios;
}
