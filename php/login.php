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
	<script src="../js/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<title>Entrar</title>
	<style type="text/css">

		body{
			background-color: #f5f5f5;
		}

		#login{
			margin-top: 10%;
			background-color: #fafafa;
			width: 25%;
			border-radius: 30px;
			box-shadow: 0px 0px 2px black;
		}
		.botao{
			border-radius: 10px;
		}

		#link{
			color: #8493fd;
		}
		.alertErro{
			height: 5px;
			font-size: 10px;
			color: red;
		}
	</style>
</head>
<body>
	<div class="container" id="login" >
		<br>
		<h1 align="center" >Entrar</h1>
		<form id="form-login" method="POST" action="verifLogin.php">
		  <div class="form-group">
		    <label for="inputEmail3" class=" col-form-label"><h5>usuário:</h5></label>

		      <input type="text" class="form-control" id="" name="user" required placeholder="digite seu nome de usuário">
		      <div class="alert alertErro" id="alertErro_usuario" style="display: none;" role="alert">
						ESTE USUÁRIO NÃO ESTÁ CADASTRADO!
					</div>

		  </div>
		  <div class="form-group">
		    <label for="inputPassword3" class=" col-form-label"><h5>senha:</h5></label>

		      <input type="password" class="form-control" id="inputPassword3" name="pw" required placeholder="digite sua senha">
		      <div class="alert alertErro" id="alertErro_senha" style="display: none;" role="alert">
						SENHA INCORRETA!
					</div>
		    	<a href="" class="btn-link" id="link">esqueceu a senha?</a>

		  </div>

		  <div class="form-group">

		      <button type="submit" class="btn btn-primary botao" >Entrar</button>
		</form>
		      <a href="cadastro.php" class="btn btn-outline-primary botao">Cadastre-se </a>

		  </div>
		<br>
	</div>
<script>
	function testUser(){
		$("#form-login").on("submit", function(e){
			e.preventDefault();
			$.ajax({
				type: "POST",
				dataType: "Json",
				url: $(this).attr('action'),
				data: $(this).serialize(),
				success: function(row){
					console.log(row.content);

					if (row.content == "erro-user") {
						document.getElementById('alertErro_usuario').style.display = "block";
						document.getElementById('alertErro_senha').style.display = "none";
					}else if (row.content == "erro-password") {
						document.getElementById('alertErro_senha').style.display = "block";
						document.getElementById('alertErro_usuario').style.display = "none";
					}
				}
			});
		});
	}

	testUser();
</script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>