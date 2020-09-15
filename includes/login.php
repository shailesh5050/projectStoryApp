<?php 
	include "connection.php";
	ob_start();
	session_start();
	$email = $_POST['email'];
	$password = $_POST['Password'];

	$md5password = md5($password);

	$query = "SELECT * FROM `users` WHERE email='$email' AND password='$md5password'";
	$run = mysqli_query($conn,$query);

	if (mysqli_num_rows($run)>0) {
		echo "SuccessFully Logged In..";
		$_SESSION["email"] = $email;
		header("location:story.php");
	}else{
		$_SESSION['message'] = "<div class='alert alert-danger' role='alert'>
  					Password or Email is wrong !
				</div>";
				header("location:../index.php");
	}


 ?>