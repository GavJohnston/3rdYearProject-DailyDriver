<?php
session_start();

if(isset($_SESSION['usr_id'])!="") {
	header("Location: index.php");
}

include_once 'dbconnect.php';

//check if form is submitted
if (isset($_POST['login'])) {

	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$result = mysqli_query($con, "SELECT * FROM users WHERE email = '" . $email. "' and password = '" . md5($password) . "'");

	if ($row = mysqli_fetch_array($result)) {
		$_SESSION['usr_id'] = $row['id'];
		$_SESSION['usr_name'] = $row['name'];
		header("Location: index.php");
	} else {
		$errormsg = "Incorrect Email or Password!!!";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<link rel="stylesheet" href="css/estilo.css">
	<script type="text/javascript" src="validar.js"></script>
</head>
<body>
<div>
	<img src="images/logo2.png" alt="Daily Driver" title="Daily Driver">
	<form action="" method="post">
		<h2>Daily Driver Login</h2>
		<input type="text" id="email" placeholder="&#128104; email" name="email" required>
		<input type="password" id="password" placeholder="&#128273; Password" name="password" required>
		<input type="submit" name="login" value="Login" class="btn btn-primary" />
		<a href="register.php">Not Registered yet?</a>
	</form>
	</div>
</body>
</html>