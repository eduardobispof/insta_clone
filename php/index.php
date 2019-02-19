<?php 
session_start();

if (!isset($_SESSION['user_name'])) {
	header('location: login.php');
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<title>Início</title>
</head>
<style type="text/css">
		body{
			background-color: #f5f5f5;
		}

	#profile-image{
		max-height: 70px;
		max-width: 70px;
		padding-right: 10px;
	}

	#search{
		padding-left: 150px;
		padding-right: 100px;
	}

	#test{
		max-width: 400px;
		max-height: 400px;
		border-radius: 10px;
	}

	.card-feed{
		max-width: 50%;
		max-height: 70%;
	}
	#card{
		background-color: #f5f5f5;
	}
</style>
<body>
<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light">
		<img src="../images/cachorro.jpg" class="rounded float-left" alt="..." id="profile-image">	 
	  <a class="navbar-brand" href="#"> <?= $_SESSION['user_name'] ?> </a>
	  <a class="navbar-brand" href="#"> perfil </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">amigos</a>
	      </li>

	    <form class="form-inline my-2 my-lg-0" id="search">
	      <input class="form-control mr-sm-2" type="search" placeholder="encontrar" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">procurar</button>
	    </form>
	  	<a class="navbar-brand" href="#" style="padding-left: 100px;"> sair </a>
	    </ul>
	  </div>
	</nav>

	<div class="row">
		<div class="col-md-6 offset-md-3">
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<div class="card">
				  <img src="../images/cachorro.jpg" class="card-img-top" alt="...">
				  <div class="card-body">
				    <h5 class="card-title">Card title</h5>
				    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				  </div>
				</div>
			</div>
		</div>
		</div>
		</div>
	
	<!-- <div class="card mb-3 card-feed">
	  <img src="../images/cachorro.jpg" class="card-img-top" alt="...">
	  <div class="card-body">
	    <h5 class="card-title">Card title</h5>
	    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
	    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
	  </div>
	</div> -->

</div>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>