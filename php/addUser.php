<?php 
include 'classes/User.php';
$user = new User;

$data = filter_input_array(INPUT_POST);

if (isset($user->user_name)) {
	header('location: index.php');
}

$user->conexao();
$user->sig_in($data['user'], $data['nome'], $data['email'], $data['senha']);


 ?>