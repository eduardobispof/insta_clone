<?php 
class Model{
	public $conn;

	function conexao(){

		global $conn;
		$dbuser = "insta";
		$dbpw = "edu";
		try {
		  $conn = new PDO('mysql:host=localhost;dbname=instatop', $dbuser, $dbpw);
		  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
		  echo 'Erro: ' . $e->getMessage();
		}
	}


}

 ?>