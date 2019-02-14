<?php 
include 'conn.php';
session_start();
if (isset($_SESSION['user_name'])) {
	header('location: index.php');
}

$dados = filter_input_array(INPUT_POST);

//select para checagem de usuários
$queryUser = $conn->prepare("SELECT user_name FROM users WHERE user_name = :user");
$queryUser->bindParam(':user', $dados['user']);
$queryUser->execute();
$dataUser = $queryUser->fetchALL(PDO::FETCH_ASSOC);

//select para checagem de emails
$queryEmail = $conn->prepare("SELECT user_email FROM users WHERE user_email = :email");
$queryEmail->bindParam(':email', $dados['email']);
$queryEmail->execute();
$dataEmail = $queryEmail->fetchALL(PDO::FETCH_ASSOC);

$answer = ['error' => '', 'content' => ''];
if (sizeof($dataUser) > 0) {
	$answer['erro'] = "user-exists";
} elseif (sizeof($dataEmail) > 0) {
	$answer['erro'] = "email-exists";
}else{

}
echo json_encode($answer);
?>