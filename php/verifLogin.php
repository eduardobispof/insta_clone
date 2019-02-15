<?php 
include 'conn.php';
session_start();
if (isset($_SESSION['user_name'])) {
	header('location: index.php');
}

$dados = filter_input_array(INPUT_POST);
$pw = md5($dados['pw']);

$queryUser = $conn->prepare("SELECT user_name FROM users WHERE user_name = :user");
$queryUser->bindParam(":user", $dados['user']);
$queryUser->execute();

$valUser = $queryUser->fetchALL(PDO::FETCH_ASSOC);

$queryPw = $conn->prepare("SELECT user_name FROM users WHERE user_password = :pw");
$queryPw->bindParam(":pw", $pw);
$queryPw->execute();

$valPw = $queryPw->fetchALL(PDO::FETCH_ASSOC);

$answer = ['error' => '', 'content' => ''];

if (sizeof($valUser) <= 0) {
	$answer['content'] = "erro-user";
}elseif (sizeof($valPw) <= 0) {
	$answer['content'] = "erro-password";
}else{
	$queryOk = $conn->prepare("SELECT user_id, user_name, user_real_name")
	$_SESSION['']
	header('localtion: index.php');
}

echo json_encode($answer);

 ?>