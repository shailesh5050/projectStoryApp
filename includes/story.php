<?php 
ob_start();
session_start();
include "connection.php";
$email= $_SESSION['email'];
$query = "SELECT `story` FROM `users` WHERE email='$email'";
$run = mysqli_query($conn,$query);
$data = mysqli_fetch_assoc($run);
if (isset($_SESSION['email'])) {
?>	
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Story App</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	
		<div class="mainStoryBox">
			<div class="strip">
				<div class="container">
					<h2>Story Diary</h2>
				<a href="logout.php" class="btn btn-outline-success mt-2">Logout</a>
				</div>
			</div>
			<div class="container mt-5">
				<textarea name="storyInput" id="storyInput"><?php echo $data['story']; ?></textarea>
			</div>
		</div>

		<script src="../js/jquery.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/app.js"></script>
</body>
</html>
<?php	
}else{
	header("location:../index.php");
	$_SESSION['mesage'] =  "<div class='alert alert-danger' role='alert'>
  					You have to login For access Story Page !
				</div>";;
}
?>
