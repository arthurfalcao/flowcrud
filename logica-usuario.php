<?php
session_start();
function userIsLogged() {
  return isset($_SESSION["usuario_logado"]);
}

function verifyUser() {
  if (!userIsLogged()) {
    $_SESSION["danger"] = "Você não tem acesso a esta funcionalidade.";
    header("Location: index.php");
    die();
  }
}

function userLogged() {
  return $_SESSION["usuario_logado"];
}

function loginUser($email) {
  $_SESSION["usuario_logado"] = $email;
}

function logout() {
  session_destroy();
  session_start();
}
