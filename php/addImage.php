<?php 
include 'classes/Foto.php';
session_start();

$foto = new Foto;
// recebe o id do usuario logado
$user_id = addslashes($_SESSION['user_id']);

// recebe dos dados do forumlá de postagem
$dados  = filter_input_array(INPUT_POST);

$foto -> conexao();
$foto -> upFoto($_FILES, $dados['legenda'], $user_id);
 ?>