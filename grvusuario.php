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

function insertUser($conexao, $nome, $email, $senha, $cidade, $uf) {
  $query = "INSERT INTO T_USUARIO (id, nome, email, senha, cidade, uf) VALUES (DEFAULT, ?, ?, ?, ?, ?)";
  $stmt = $conexao->prepare($query);
  $stmt->bindParam(1, $nome);
  $stmt->bindParam(2, $email);
  $stmt->bindParam(3, $senha);
  $stmt->bindParam(4, $cidade);
  $stmt->bindParam(5, $uf);
  return $stmt->execute();
}

function removeUsuario($conexao, $id) {
  $query = "DELETE FROM T_USUARIO WHERE id = ?";
  $stmt = $conexao->prepare($query);
  $stmt->bindParam(1, $id);
  return $stmt->execute();
}
