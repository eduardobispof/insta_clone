<?php 
include 'conn.php';
session_start();
if (isset($_SESSION['user_name'])) {
	header('location: index.php');
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<title>Entrar</title>
	<style type="text/css">

		body{
			background-color: #f5f5f5;
		}

		#login{
			margin-top: 10%;
			background-color: #fafafa;
			width: 20%;
			border-radius: 30px;
			box-shadow: 0px 0px 2px black;
		}
		.botao{
			border-radius: 10px;
		}

		#link{
			color: #8493fd;
		}
	</style>
</head>
<body>
	<div class="container" id="login" >
		<br>
		<h1 align="center" >Entrar</h1>
		<form>
		  <div class="form-group">
		    <label for="inputEmail3" class=" col-form-label"><h5>usuário:</h5></label>

		      <input type="email" class="form-control" id="" placeholder="usuário">

		  </div>
		  <div class="form-group">
		    <label for="inputPassword3" class=" col-form-label"><h5>senha:</h5></label>

		      <input type="password" class="form-control" id="inputPassword3" placeholder="senha">
		    	<a href="" class="btn-link" id="link">esqueceu a senha?</a>

		  </div>

		  <div class="form-group">

		      <button type="submit" class="btn btn-primary botao" >Entrar</button>
		      <a href="cadastro.php"> <button type="submit" class="btn btn-outline-primary botao" id="botao_cadastro">Cadastre-se</button> </a>

		  </div>
		</form>
		<br>
	</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>