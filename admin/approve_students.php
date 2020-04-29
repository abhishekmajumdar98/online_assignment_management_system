<?php
	/* This project is dedicated to the lotus feet of my prabhu Sri Narayana & my holy mother Anondomoyee */
	include('auth.php');
	require_once('../database/server.php');
	$id=$_GET['st_id'];
	$page=$_GET['p_name'];
	$sql="update st_details set status='1' where id=".$id;
	mysqli_query($con,$sql);
	header('Location: '.$page);
 ?>