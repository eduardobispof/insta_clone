<?php 
include 'classes/User.php';
session_start();
$user = new User;

// if (!isset($_SESSION['user_name'])) {
// 	header('location: login.php');
// }
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<title>Início</title>
</head>
<body>
	<div class="container">
		<h1>Bem vindo, <?= $_SESSION['user_name'] ?></h1>
	</div>




<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>