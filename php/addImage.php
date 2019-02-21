<?php 
// include 'classes/Foto.php';
session_start();

// $foto = new Foto;

$dados  = filter_input_array(INPUT_POST);


$ext = explode("/", $_FILES['imgs']['type']);

var_dump($ext);

$user_id = addslashes($_SESSION['user_id']);

echo $ext;


// $foto -> conexao();

// $foto -> uoFoto($_FILES, $dados['legenda'], )
 ?>