<?php 
/**
 * 
 */
include 'Model.php';
class User extends Model{
	
	function login($user, $pw){
		global $conn;

		$user = addslashes($user);
		$pw = addslashes(md5($pw));

		$queryUser = $conn->prepare("SELECT user_name FROM users WHERE user_name = :user");
		$queryUser->bindParam(":user", $user);
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
			$queryLogin = $conn->prepare("SELECT user_name, user_real_name, user_email FROM users WHERE user_name = :user AND user_password = :pw");
			$queryLogin->bindParam(':user', $user);
			$queryLogin->bindParam(':pw', $pw);
			$queryLogin->execute();
			$dataLogin = $queryLogin->fetchALL(PDO::FETCH_ASSOC);

			$_SESSION['user_name'] = $dataLogin[0]['user_name'];
			$_SESSION['real_name'] = $dataLogin[0]['user_real_name'];
			$_SESSION['email'] = $dataLogin[0]['user_email'];
		}

		echo json_encode($answer);
	}

	function sig_in($user_name, $real_name, $email, $password){
		global $conn;

		$user_name = addslashes($user_name);
		$real_name = addslashes($real_name);
		$email = addslashes($email);
		$pw = md5(addslashes($password));


		//select para checagem de usuários
		$queryUser = $conn->prepare("SELECT user_name FROM users WHERE user_name = :user");
		$queryUser->bindParam(':user', $user_name);
		$queryUser->execute();
		$dataUser = $queryUser->fetchALL(PDO::FETCH_ASSOC);

		//select para checagem de emails
		$queryEmail = $conn->prepare("SELECT user_email FROM users WHERE user_email = :email");
		$queryEmail->bindParam(':email', $email);
		$queryEmail->execute();
		$dataEmail = $queryEmail->fetchALL(PDO::FETCH_ASSOC);

		$answer = ['error' => '', 'content' => ''];
		if (sizeof($dataUser) > 0) {
			$answer['content'] = "user-exists";
		} elseif (sizeof($dataEmail) > 0) {
			$answer['content'] = "email-exists";
		}else{
			$answer['content'] = "no-erros";
			$queryInsert = $conn->prepare("INSERT INTO users(user_name, user_real_name, user_email, user_password) VALUES (:name, :real_name, :email, :password)");
			$queryInsert->bindParam(':name', $user_name);
			$queryInsert->bindParam(':real_name', $real_name);
			$queryInsert->bindParam(':email', $email);
			$queryInsert->bindParam(':password', $pw);
			$queryInsert->execute();
		}
		// echo json_encode($answer);
		echo json_encode($answer);
	}
}


 ?>