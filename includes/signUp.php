<?php 
include "connection.php";
ob_start();
session_start();

$email = trim($_POST['email']);
$password = trim($_POST['password']);
$mdpassword = md5($password);
$count =0;

////////////////Checking For Email Is Alleredy exist or not

$checkEmail = "SELECT * FROM `users` WHERE email='$email'";
$EmailRun = mysqli_query($conn,$checkEmail);

if (mysqli_num_rows($EmailRun)>0) {
	echo "<div class='alert alert-danger' role='alert'>
  					Email Is Allready exist!
				</div>";
}else{

	
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  //echo($email."$email is a valid email address");
  $count++;
}else{
	echo "<div class='alert alert-danger' role='alert'>
  					Email Is Not Valid
				</div>";
} 
if (strlen($password)>3 && strlen($password)<16) {
	//echo $password."password is valid";
	$count++;
}else{
	echo "<div class='alert alert-danger' role='alert'>
  					Password Must Be Between 3 and 16 Characters
				</div>";
}
if ($count==2) {
	$query = "INSERT INTO `users`(`email`, `password`) VALUES ('$email','$mdpassword')";
	$run = mysqli_query($conn,$query);
	if ($run) {
		echo "<div class='alert alert-success' role='alert'>
  					You Are SuccessFully Singned Up , Login To Continue
				</div>";
	}else{
		echo "<div class='alert alert-danger' role='alert'>
  					Some Error Occured
				</div>";
	}
}


}





 ?>