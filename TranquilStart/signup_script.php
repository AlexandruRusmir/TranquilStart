<?php 
include 'create.php';

include 'config.php'; 

session_start();

error_reporting(0);


	$firstname = $_POST['firstname'];
	if(!$firstname)
		echo "<script>alert('Please introduce your first name.')</script>";
	$lastname = $_POST['lastname'];
	if(!$lastname)
		echo "<script>alert('Please introduce your last name.')</script>";
	$email = $_POST['email'];
	if(!$email)
		echo "<script>alert('Please introduce your email.')</script>";



	$sql = "INSERT INTO signups (firstname, lastname, email)
		VALUES ('$firstname', '$lastname', '$email')";
			
	$result = mysqli_query($conn, $sql);
			
	if ($result) 
	{
		echo "<script>alert('Signup sent!')</script>";
				
		$username = "";
		$email = "";
		$email = "";
	} 
	else 
		echo "<script>alert('Error sending singup!')</script>";
	
	header('location:index.html');
?>