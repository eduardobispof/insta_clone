<?php 
include 'Model.php';


class Foto extends Model{
	
	function upFoto($foto, $legenda, $user_id){
		$url = '../imagens/'.$_SESSION['user_name'];
		$name = md5(0, 999);
		$arq[] = $foto;

		$ext = explode("/", $_FILES['imgs']['type']);

		$queryImg = $conn->prepare(" INSERT INTO fotos (foto_directory, foto_user_id) VALUES (:foto, :user)");
		$queryImg->bindParam(':foto', )

	}
}
 ?>