<?php
	/* This project is dedicated to the lotus feet of my prabhu Sri Narayana & my holy mother Anondomoyee */
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db="oams";
	// Create connection
	$con = mysqli_connect("$servername","$username","$password","$db") or die("Cannot connect database");
	// Check connection
	if (!$con) {
		die("Connection failed: " . mysqli_connect_error());
	}
?>