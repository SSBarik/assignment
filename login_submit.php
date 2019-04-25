<?php 
	
	require("includes/common.php");
	 
	$email = $_POST['email'];
	$email = mysqli_real_escape_string($con, $email);

	$password = $_POST['pwd'];
	$password = mysqli_real_escape_string($con, $password);
	$password = MD5($password);

	// Query checks if the email and password are present in the database.
	$query = "SELECT name, email FROM users WHERE email='" . $email . "' AND password='" . $password . "'";
	$result = mysqli_query($con, $query)or die($mysqli_error($con));
	$num = mysqli_num_rows($result);

	// If the email and password are not present in the database
	if ($num == 0) {
	  	
	  	$error = "<span style='color: red;'>Please enter correct E-mail id and Password</span>";
	  	header('location: login.php?error=' . $error);
	
	} else {  
	  		 	
	 	$row = mysqli_fetch_array($result);
	  	$_SESSION['email'] = $row['email'];
	  	$_SESSION['name'] = $row['name'];

	  	header('location: index.php');
	}

?>