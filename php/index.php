<?php 
include 'conn.php';
session_start();
if (!isset($_SESSION['user_name'])) {
	header('location: login.php');
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<title>Início</title>
</head>
<body>
	<div class="container">
		<h1>HOME</h1>
	</div>




<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>