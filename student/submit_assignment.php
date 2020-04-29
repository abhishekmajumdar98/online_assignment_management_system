<?php
	/* This project is dedicated to the lotus feet of my prabhu Sri Narayana & my holy mother Anondomoyee */
	include('auth.php');
	require_once("../database/server.php");
	$std_id=$_SESSION['std_id'];
	$dept=$_SESSION['std_dept'];
	$std_name=$_SESSION['std_name'];
	$task_id=$_GET['task_id'];
	$sql1='SELECT * FROM task_assign where id='.$task_id;
	$result1=mysqli_query($con,$sql1);
	$row1 = mysqli_fetch_array($result1); 
	$fac_name=$row1['uploaded_by'];
	$year=$_SESSION['std_year'];
	if(isset($_POST['submit']))
	{
		$filename = $_FILES['myfile']['name'];
		$destination = 'submit_assignment/' . $filename;
		$extension = pathinfo($filename, PATHINFO_EXTENSION);
		$file = $_FILES['myfile']['tmp_name'];
		$size = $_FILES['myfile']['size'];
		if (!in_array($extension, ['zip', 'pdf', 'docx', 'doc']))  
		{
					echo '<script language="javascript">';
					echo 'alert("YOUR FILE EXTENSION MUST BE .zip, .pdf, .doc or .docx");';
					echo 'window.location = "submit_assignment.php";';
					echo '</script>';
		} 
		elseif ($_FILES['myfile']['size'] > 10000000) 
		{
					echo '<script language="javascript">';
					echo 'alert("FILE IS TO0 LARGE");';
					echo 'window.location = "submit_assignment.php";';
					echo '</script>';
		} 
		else 
		{
			if (move_uploaded_file($file, $destination)) 
			{
				$sql = "INSERT INTO submit_assignment (id,assignment_id,std_id,fac_name,submit_by,dept,year,file) 
				VALUES ('NULL', '$task_id','$std_id','$fac_name','$std_name', '$dept', '$year', '$filename')";
				if (mysqli_query($con, $sql)) 
				{
					echo '<script language="javascript">';
					echo 'alert("ASSIGNMENT SUBMIT SUCCESSFUL");';
					echo 'window.location = "show_assignment.php";';
					echo '</script>';
				}
			} 
			else 
			{
					echo '<script language="javascript">';
					echo 'alert("ASSIGNMENT SUBMIT NOT SUCCESSFUL");';
					echo 'window.location = "submit_assignment.php";';
					echo '</script>';
			}
		}
	}
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Assignment | Submit</title>
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
		<span>S</span>ubmit
		<span>A</span>ssignment
	</h1>
	<!-- //title -->
	<!-- content -->
	<div class="sub-main-w3">
		<form validate="true"  name="signup" action="#" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Chose File</label>
				<input type="file" name="myfile">
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