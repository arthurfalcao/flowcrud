<?php 

require_once 'config.php';

if (!isLoggedIn()) {
	header('Location: login.php');
}

 ?>