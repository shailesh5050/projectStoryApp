<?php 
	ob_start();
	session_start();

	if (isset($_SESSION['email'])) {
		session_unset();

		// destroy the session
		session_destroy();
		header("location:../index.php");
	}else{
		header("location:../index.php");
	}



 ?>