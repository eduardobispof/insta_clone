<?php  
$dbuser = "root";
$dbpw = "";
try {
  $pdo = new PDO('mysql:host=localhost;dbname=instatop', $dbuser, $dbpw);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
?>