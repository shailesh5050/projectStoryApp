<?php 
	ob_start();
	session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Story App</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="mainBox">
			<h1>Secret Diary</h1>
			<h6 id="mainHead">Store Your Thoughts Permanently And Securly</h6>
			<!---------Message Box------------------->
			<div class="messageBox" id="msg">
				<?php if (isset($_SESSION['message'])) {
					echo $_SESSION['message'];
					  unset($_SESSION['message']);
				}else{

				} ?>
			</div>
			<!---------SignUp Form Box------------------->
			<div class="SignUpForm" id="signupForm">
				<h6>Intrested ? Sign up now</h6>
				<form  method="post" id="signFormMain">
					<div>
						<input type="text" name="email" class="form-control" placeholder="Your Email" id="semail">
					</div>
					<div>
						<input type="text" name="Password" class="form-control" placeholder="Password" id="spassword">
					</div>
					<div class="mt-2 mb-2">
						<input type="checkbox" class=""> Stay logged in
					</div>
					<button class="btn btn-success mb-1">Sign up</button><br>
					<a href="" id="login">Login</a>
				</form>
			</div>
			<!---------Login Form Box------------------->
			<div class="LoginForm" id="loginFrom">
				<h6>Login using Your username and password</h6>
				<form action="includes/login.php" method="post">
					<div>
						<input type="text" name="email" class="form-control" placeholder="Your Email">
					</div>
					<div>
						<input type="text" name="Password" class="form-control" placeholder="Password">
					</div>
					<div class="mt-2 mb-2">
						<input type="checkbox" class=""> Stay logged in
					</div>
					<button class="btn btn-success mb-1">Login</button><br>
					<a href="" id="sign">Sign up</a>
				</form>
			</div>
			</div>
		</div>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/app.js"></script>
	</body>
</html>