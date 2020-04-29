<?php
	/* This project is dedicated to the lotus feet of my prabhu Sri Narayana & my holy mother Anondomoyee */
	include('auth.php');
	require_once('../database/server.php');
	$std_id= $_GET['std_id'];
	$uploaded_by=$_SESSION['fac_name'];
	//$sql="SELECT * FROM `submit_assignment` WHERE std_id='$std_id'";
	//$result=mysqli_query($con,$sql);
	
		$assignment_id=$_GET['assignment_id'];
	
	if(isset($_POST['submit']))
	{
		$remark=$_POST['remark'];
		$mark=$_POST['marks'];
		$sql = "INSERT INTO remarks (id,st_id,assignment_id,uploaded_by,remarks,marks)
					VALUES ('NULL','$std_id','$assignment_id','$uploaded_by','$remark','$mark')";
					mysqli_query($con,$sql);
					echo '<script language="javascript">';
					echo 'alert("MARKS UPLOAD SUCCESSFULL");';
					echo 'window.location = "view_task.php";';
					echo '</script>';
	}
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Marks | Submit</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link rel="stylesheet" href="css/style1.css" type="text/css" media="all" />
	<link href="//fonts.googleapis.com/css?family=Cuprum:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese"
	    rel="stylesheet">

</head>

<body>
	<!-- title -->
	<?php include('includes/header.php')?>
	<h1>
		<span>M</span>arks
		<span>S</span>ubmit
	</h1>
	<!-- //title -->
	<!-- content -->
	<div class="sub-main-w3">
		<form validate="true"  name="signup" action="#" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="exampleInputText">Remark</label>
				<input type="text" class="form-control" name="remark" id="exampleInputText" placeholder="Enter Remarks" required>
			</div>
			<div class="form-group">
				<label for="exampleInputText">Marks</label>
				<input type="text" class="form-control" name="marks" id="exampleInputText" placeholder="Enter Name" required>
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