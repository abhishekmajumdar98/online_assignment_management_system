<?php
	/* This project is dedicated to the lotus feet of my prabhu Sri Narayana & my holy mother Anondomoyee */
	
	//Start session
	session_start();
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	include("database/server.php");
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysqli_real_escape_string($con,$str);
	}
	
	//Sanitize the POST values
	$login = $_POST['emailid'];
	$password = md5($_POST['password']);
	
	//Input Validations
	if($login == '') 
	{
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location:index.php");
		exit();
	}
	//Create query
	$qry="SELECT * FROM fac_details WHERE email='$login' AND password='$password' and status='1'";
	$result=mysqli_query($con,$qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) > 0) 
		{
			//Login Successful
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['fac_id'] = $member['id'];
			$_SESSION['fac_user_name'] = $member['email'];
			$_SESSION['fac_name']=$member['name'];
			$_SESSION['fac_user_image'] = $member['img'];
			$_SESSION['fac_dept']=$member['dept'];
			session_write_close();
			header("location: faculty_home.php");
			exit();
		}else {
			//Login failed
			header("location: index.php");
			exit();
		}
	}else {
		die("Query failed");
	}
?>