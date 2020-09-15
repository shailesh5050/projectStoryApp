<?php 
	include "connection.php";
	ob_start();
	session_start();
	if (isset($_SESSION['email'])){
		$email = $_SESSION['email'];
		$data = $_POST['input'];
		$query = "UPDATE `users` SET story='$data' WHERE email='$email'";
		$run = mysqli_query($conn,$query);
		
		
	}else{
		header("location:../index.php");
	}

 ?>