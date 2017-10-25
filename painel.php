<?php 
session_start();
require_once 'config.php';
require 'check.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $_SESSION['user_name']; ?> - Perfil</title>
	<link rel="stylesheet" type="text/css" href="./css/estilo.css">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body background="./img/2144.jpg">
	<?php include("includes/navbar.html");?>
	<dir class="perfil">
		<div class="container-fluid well span6">
			<div class="row-fluid">
	        	<div class="span2" >
			    	<img src="img/user2.png" class="img-circle">
	        	</div>
	        	<div class="span8">
	            	<h3><?php echo $_SESSION['user_name']; ?></h3>
	            	<h6>Email: <?php echo $_SESSION['user_email']; ?></h6>
	            	<h6>Cidade: <?php echo $_SESSION['user_cidade']; ?></h6>
	            	<h6>UF: <?php echo $_SESSION['user_uf']; ?></h6>
	        	</div>
	        	<div class="span2">
	            	<div class="btn-group">
	                	<a class="btn dropdown-toggle btn-info" data-toggle="dropdown" href="#">
	                    	Opções 
	                    	<span class="icon-cog icon-white"></span><span class="caret"></span>
	                	</a>
	                	<ul class="dropdown-menu">
	                    	<li><a href="editar.php"><span class="icon-wrench"></span> Editar</a></li>
	                    	<li><a href="deletar.php"><span class="icon-trash"></span> Deletar</a></li>
	                	</ul>
	            	</div>
	        	</div>
			</div>
		</div>
	</dir>
	<?php include("includes/footer.html");?>
</body>
</html>