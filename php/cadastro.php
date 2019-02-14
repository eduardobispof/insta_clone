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
	<link rel="stylesheet" type="text/css"  href="../css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<title>Cadastro</title>
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
		#alertErro_senha{
			height: 5px;
			font-size: 10px;
			color: red;
		}
	</style>
</head>
<body>
	<div class="container" id="login" >
		<br>
		<h1 align="center" >Crie sua conta</h1>
		<form method="POST" action="addUser.php" id="form-cadastro">
		  <div class="form-group">
		    <label for="inputEmail3" class=" col-form-label"><h5>digite seu nome:</h5></label>
		      <input type="text" class="form-control" id="nome" name="nome" required placeholder="digite seu nome">
				</label>
		    <label for="inputEmail3" class=" col-form-label"><h5>escolha seu usuário:</h5></label>
		      <input type="text" class="form-control" id="user" name="user" required placeholder="escolha seu nome de usuário">
		      <div class="alert " id="alertErro_usuario" style="display: none;" role="alert">
						ESTE USUÁRIO JÁ ESTÁ SENDO USADO!
					</div>
				</label>
		    <label for="inputEmail3" class=" col-form-label"><h5>digite seu e-mail:</h5></label>
		      <input type="email" class="form-control" id="" name="email" required placeholder="digite seu e-mail">
		      <div class="alert " id="alertErro_email" style="display: none;" role="alert">
						ESTE E-MAIL JÁ ESTÁ SENDO USADO POR OUTRA CONTA!
					</div>
				</label>
		  </div>
		  <div class="form-group">
		    <label for="inputPassword3" class=" col-form-label"><h5>escolha sua senha:</h5></label>
		      <input type="password" class="form-control" id="pw1" name="senha" required placeholder="digite sua senha">
		      <div class="alert " id="alertErro_senha" style="display: none;" role="alert">
						AS SENHAS DEVEM SER IGUAIS!
					</div>
				</label>
		    <label for="inputPassword3" class=" col-form-label"><h5>digite novamente sua senha:</h5></label>
		      <input type="password" class="form-control" id="pw2" required placeholder="digite novamente sua senha">
				</label>
		  </div>
		  <div class="form-group">
		  	<input type="submit" id="test" class="btn btn-primary botao" value="Cadastrar">
				<div class="alert alert-success" role="alert" id="success" style="display: none;">
				  Cadastro feito com sucesso <a href="#" class="alert-link">clique aqui</a> para entrar.
				</div>
		      Já tem uma conta? 
		      <a href="cadastro.php" id="botao_cadastro">Entre</a>
		  </div>
		</form>
		<br>
	</div>
<script>
	function testSenha(){
		$('#form-cadastro').on('submit', function(e) {
			var pw1 = document.getElementById('pw1');
			var pw2 = document.getElementById('pw2');
			if (pw1.value != pw2.value){
				e.preventDefault();
				//exibe a mensagem de erro das senhas
				document.getElementById('pw1').className = "form-control is-invalid";
				document.getElementById('pw2').className = "form-control is-invalid";
				document.getElementById('alertErro_senha').style.display = "block";
			} else {
				e.preventDefault();
				$.ajax({
					type: "POST",
					dataType: 'json',
					url: $(this).attr('action'),
					data: $(this).serialize(),
					success:function(row){
						row = JSON.parse(row);
						console.log(row);
						/*
						if (row[0].erro == "user-exists") {
							document.getElementById('user').className = "form-control is-invalid";
							document.getElementById('alertErro_usuario').style.display = "block";
						}else if (row[0].erro == "email-exists") {
							document.getElementById('user').className = "form-control is-invalid";
							document.getElementById('alertErro_email').style.display = "block";
						}else{
							document.getElementById('success').style.display = "block";
						}
						*/
			
					}
				});
			}
		});
	}
</script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>