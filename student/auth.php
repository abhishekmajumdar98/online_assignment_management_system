<?php
	/* This project is dedicated to the lotus feet of my prabhu Sri Narayana & my holy mother Anondomoyee */

	//Start session
	session_start();
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['std_id']) || (trim($_SESSION['std_id']) == '')) {
		header("location:index.php");
		exit();
	}
?>