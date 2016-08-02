<?php
	//Start session
session_start();



	//Include database connection details
	require_once('connection.php');
	
	// Clean out session-based error message
	$_SESSION['ERRMSG_ARR'] = null;
 
	//Array to store validation errors
	$errmsg_arr = array();
 
	//Validation error flag
	$errflag = false;
 
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
 
	//Sanitize the POST values
	$email = clean($_POST['email']);
	$password = md5(clean($_POST['password']));
	
	//Input Validations
	if($email == '') {
		$errmsg_arr[] = 'email missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
 
	//If there are input validations, redirect back to the login form
	if($errflag) {
		// Error message is stored in this SESSION var.
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: login_error");
		exit();
	}
 
	//Create query
	$qry="SELECT * FROM users WHERE email='$email' OR username='$email' AND password='$password'";

	$result=mysql_query($qry);
 
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) > 0) {

			//Login Successful
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			
			// Set session var so we know a user is logged in.
			
			$_SESSION["user"] = $member;
			
			session_write_close();
			header("location: home/index.php");
			exit();
		}else {
			//Login failed
			$errmsg_arr[] = 'email and password not found';
			$errflag = true;
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location: index.php");
				exit();
			}
		}
	}else {
		die("Query failed");
	}


?>
