<?php 
include 'classes/User.php';
session_start();
$user = new User;

$data = filter_input_array(INPUT_POST);

if (isset($$_SESSION['user_name'])) {
	header('location: index.php');
}

$user->conexao();
$user->sig_in($data['user'], $data['nome'], $data['email'], $data['senha']);


 ?>