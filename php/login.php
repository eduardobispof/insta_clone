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
		#login{
			margin-top: 10%;
			background-color: gray;
			width: 30%;
			border-radius: 30px;
		}
		#botao_entrar{
			border-radius: 10px;
		}
		#botao_cadastro{
			background-color: blue;
		}
	</style>
</head>
<body>
	<div class="container" id="login" align="center">
		<br>
		<h1 >Entrar</h1>
		<form>
		  <div class="form-group">
		    <label for="inputEmail3" class="col-sm-2 col-form-label">usuário</label>
		    <div class="col-sm-10">
		      <input type="email" class="form-control" id="inputEmail3" placeholder="usuário">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputPassword3" class="col-sm-2 col-form-label">senha</label>
		    <div class="col-sm-10">
		      <input type="password" class="form-control" id="inputPassword3" placeholder="senha">
		    	<a href="" id="link">esqueceu a senha?</a>
		    </div>
		  </div>

		  <div class="form-group">
		    <div class="col-sm-10">
		      <button type="submit" class="btn btn-primary" id="botao_entrar">Entrar</button>
		      <a href="#"> <button type="submit" class="btn" id="botao_cadastro">Cadastre-se</button> </a>
		    </div>
		  </div>
		</form>
		<br>
	</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>