<?php 
include 'Model.php';


class Foto extends Model{
	
	function upFoto($foto, $legenda, $user_id){

		//define o destino do arquivo

		//recebe a extensao do arquivo
		$ext = explode("/", $foto['imgs']['type']);

		//define o nome do arquivo
		$hash = 'test';

		// une o nome do arquivo com extensao
		$hash = $hash . "." . $ext[1];

		$caminho = '../../images/' . $_SESSION['user_name'] . '/' . $hash;
		// var_dump($hash);

		// var_dump($foto);

		if ($ext[1] == "png" || $ext[1] == "jpeg" || $ext[1] == "jpg") {
			move_uploaded_file($foto['imgs']['tmp_name'], $hash);
		} else {
			echo "n é imagem";
		}

	}

}
 ?>