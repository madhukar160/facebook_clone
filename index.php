<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>
	<style type="text/css">
		body{

		}
		.logout{
			border: 1px solid black;
			background-color: powderblue;
			padding: 10px;
			margin-left: 1500px;
			margin-top: 20px;
			position: absolute;

		}
		p{
			font-size: 30px;
		}
	</style>
	<div class="out">
	<a class="logout" href="logout.php">Logout</a>
	

	<br>
	<p >Hello, <?php echo $user_data['user_name']; ?></p><br><br><br>
	<a href="img_index.php">upload photo</a><br><br><br>
	<a href="view.php">watch news feed</a>
    </div>
</body>
</html>