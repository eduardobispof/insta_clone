<?php  
$dbuser = "root";
$dbpw = "ifpe";
try {
  $conn = new PDO('mysql:host=localhost;dbname=instatop', $dbuser, $dbpw);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
?>