<?php
session_start();

if(isset($_SESSION['usr_id'])) {
	header("Location: login.php");
}

include_once 'dbconnect.php';

//set validation error flag as false
$error = false;

//check if form is submitted
if (isset($_POST['signup'])) {
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
	
	//name can contain only alpha characters and space
	if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
		$error = true;
		$name_error = "Name must contain only alphabets and space";
	}
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
		$error = true;
		$email_error = "Please Enter Valid Email ID";
	}
	if(strlen($password) < 6) {
		$error = true;
		$password_error = "Password must be minimum of 6 characters";
	}
	if($password != $cpassword) {
		$error = true;
		$cpassword_error = "Password and Confirm Password doesn't match";
	}
	if (!$error) {
		if(mysqli_query($con, "INSERT INTO users(name,email,password) VALUES('" . $name . "', '" . $email . "', '" . md5($password) . "')")) {
		header("Location: index.php");
		} else {
			$errormsg = "Error in registering...Please try again later!";
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<link rel="stylesheet" href="css/estilo.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<script src="validar.js"> </script>
</head>
<body>
<div>
	<img src="images/logo2.png" alt="Daily Driver" title="Daily Driver">
	<form action="" method="post" onsubmit="return validar();">
	<h2>Create Account</h2>
		<div class="conteudo-inputs">
			<input type="text" id="name" name="name" placeholder="&#128104; Full Name" class="input-100" required>
			<input type="emai" id="email" name="email" placeholder="&#128231; Email" class="input-100" required>
			<input type="password" id="password" name="password" placeholder="&#128273; Password" class="input-50" required>
			<input type="password" id="cpassword" name="cpassword" placeholder="&#128273; Confirm Password" class="input-50" required>
			<input type="submit" name="signup" value="Register" class="btn btn-primary" />
				<p>
				 <a href="login.php">Already have an account?</a>
				</p>
		</div>

	</form>
	</div>
</body>
</html>


