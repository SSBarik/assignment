<?php 
	
	require("includes/common.php");
	 
	$name = $_POST['name'];
	$name = mysqli_real_escape_string($con, $name);

	$email = $_POST['email'];
	$email = mysqli_real_escape_string($con, $email);
	
	$password = $_POST['pwd'];
	$password = mysqli_real_escape_string($con, $password);
	$password = MD5($password);

	// Query checks if the email and password are present in the database.
	$query = "SELECT email FROM users WHERE email='" . $email . "'";
	$result = mysqli_query($con, $query)or die($mysqli_error($con));
	$num = mysqli_num_rows($result);

	if ($num == 0) {
	
		$query = "INSERT INTO users(name, email, password)VALUES('" . $name . "','" . $email . "', '" . $password ."')";
		mysqli_query($con, $query) or die(mysqli_error($con));

		header('location: login.php'); //rediect to the login page

  	} else {
  		
  		$error = "<span style='color: red;'>Already a registered User !</span>";
	  	header('location: register.php?error=' . $error);
  	}

 ?>

