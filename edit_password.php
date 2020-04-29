<?php
	/* This project is dedicated to the lotus feet of my prabhu Sri Narayana & my holy mother Anondomoyee */
	require_once('auth.php');
    require_once("database/server.php");
	$sql='SELECT password from `fac_details` WHERE id='.$_SESSION['fac_id'];
	$result = mysqli_query($con,$sql) or die(mysqli_error($con));
	while ($row = mysqli_fetch_assoc($result)) 
	{
		$old_password=$row['password'];
	}
	if(isset($_POST['submit']))
	{
		$old=md5($_POST['old_password']);
		$new=md5($_POST['new_password']);
		$confirm=md5($_POST['confirm_password']);
		if($new!=$confirm)
		{
			echo '<script language="javascript">';
			echo 'alert("NEW PASSWORD AND CONFIRM PASSWORD NOT MATCHED");';
			echo 'window.location = "edit_password.php";';
			echo '</script>';
		}
		else if($old!=$old_password)
		{
			echo '<script language="javascript">';
			echo 'alert("OLD PASSWORD NOT MATCHED");';
			echo 'window.location = "edit_password.php";';
			echo '</script>';
		}
		else
		{
			$sql= 'UPDATE `fac_details` SET `password`="'.$new.'" WHERE id='.$_SESSION['fac_id'];
			mysqli_query($con,$sql);
			echo '<script language="javascript">';
			echo 'alert("PASSWORD UPDATE SUCCESSFULL");';
			echo 'window.location = "faculty_home.php";';
			echo '</script>';
		}
	}
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Faculty | Edit | Password</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- css file -->
	<link rel="stylesheet" href="css/style1.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<!-- //css file -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Cuprum:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //web-fonts -->

</head>

<body>
	<!-- title -->
	<?php include('includes/header.php')?>
	<h1>
		<span>F</span>aculty
		<span>E</span>dit
		<span>P</span>assword
	</h1>
	<!-- //title -->
	<!-- content -->
	<div class="sub-main-w3">
		<form validate="true"  name="signup" action="#" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="exampleInputPassword1">Old Password</label>
				<input minlength="5" type="password" name="old_password" class="form-control" id="exampleInputPassword1" placeholder="Old Password"
				    required>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">New Password</label>
				<input minlength="5" type="password" name="new_password" class="form-control" id="exampleInputPassword1" placeholder="New Password"
				    required>
			</div>
			<div class="form-group">
				<label for="exampleConfirmPassword1">Confirm Password</label>
				<input type="password" class="form-control" id="exampleConfirmPassword1" name="confirm_password" placeholder="Confirm Password" required data-match="password"
				    data-match-field="#exampleInputPassword1">
			</div>
			<div class="form-group">
				<label class="checkbox-inline">
					<input type="checkbox" value="true" required>I agree to the terms and conditions
				</label>
			</div>
			<div class="form-group">
				<label class="checkbox-inline">
					<a href="index.php">Goto Login?</a>
				</label>
			</div>
			<button type="submit" name="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
	<!-- //content -->

	<!-- copyright -->
	<div class="footer">
		<p>
			 © 2019 Online Assignment Management System | Developed By Abhishek Majumdar
		</p>
	</div>
	<!-- //copyright -->

	<!-- Jquery -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //Jquery -->
	<!-- Jquery -->
	<script src="js/jquery-simple-validator.min.js"></script>
	<!-- //Jquery -->

</body>

</html>