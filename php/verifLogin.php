<?php 
include 'classes/User.php';

$data = filter_input_array(INPUT_POST);
$user = new User;

if (isset($user->user_name)) {
	header('location: index.php');
}

$user->conexao();
$user->login($data['user'], $data['pw']);
 ?>