<?php
session_start();
require 'check.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $_SESSION['user_name']; ?> - Perfil - Flow</title>
	<link rel="stylesheet" type="text/css" href="./_INC/css/estilo.css">
	<link rel="stylesheet" type="text/css" href="./_INC/css/bootstrap.min.css">
</head>
<body background="./_IMG/2144.jpg">
	<?php include("navbar.php");?>
	<dir class="perfil">
		<div class="container-fluid well span6">
			<div class="row-fluid">
	        	<div class="span2" >
			    	<img src="_IMG/user2.png" class="img-circle">
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
	<?php include("footer.html");?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
