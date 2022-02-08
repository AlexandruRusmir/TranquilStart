<?php 
$conn = mysqli_connect( "localhost", "root", "")
    or die("Eroare la conectare cu MySQL");

$createdb = mysqli_query($conn,"CREATE DATABASE IF NOT EXISTS tranquilstart");
if (!$createdb)
    echo "<br />". mysqli_errno($conn). " : ". mysqli_error($conn);
    
mysqli_close($conn);

$conn = new mysqli('localhost', 'root', '', 'tranquilstart');
if (mysqli_connect_errno()) 
  exit('Connect failed: '. mysqli_connect_error());


$sql = "CREATE TABLE IF NOT EXISTS `signups` (
	`id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	`firstname` VARCHAR(255) NOT NULL,
	`lastname` VARCHAR(255) NOT NULL,
	`email` VARCHAR(255) NOT NULL
 ) "; 
if ($conn->query($sql) === FALSE) 
  echo 'Error: '. $conn->error;


$conn->close();
?>