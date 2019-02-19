<?php 
include 'classes/User.php';
session_start();

$data = filter_input_array(INPUT_POST);
$user = new User;

if (isset($_SESSION['user_name'])) {
	header('location: index.php');
}

$user->conexao();
$user->login($data['user'], $data['pw']);
 ?>