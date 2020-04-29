<?php
	/* This project is dedicated to the lotus feet of my prabhu Sri Narayana & my holy mother Anondomoyee */
	include('auth.php');
	require_once('database/server.php');
	if(isset($_POST['submit']))
	{
		$yr=$_POST['yr'];
		$title=$_POST['title'];
		$uploaded_by=$_SESSION['fac_name'];
		$filename = $_FILES['myfile']['name'];
		$destination = 'notes/' . $filename;
		$extension = pathinfo($filename, PATHINFO_EXTENSION);
		$file = $_FILES['myfile']['tmp_name'];
		$size = $_FILES['myfile']['size'];
		if($yr=="none")
		{
				echo '<script language="javascript">';
				echo 'alert("PLEASE SELECT NOTES FOR WHICH YEAR");';
				echo 'window.location = "upload_notes.php";';
				echo '</script>';
		}
		if (!in_array($extension, ['zip', 'pdf', 'docx', 'doc'])) 
		{
					echo '<script language="javascript">';
					echo 'alert("YOUR FILE EXTENSION MUST BE .zip, .pdf, .doc or .docx");';
					echo 'window.location = "upload_notes.php";';
					echo '</script>';
		} 
		elseif ($_FILES['myfile']['size'] > 10000000) 
		{
					echo '<script language="javascript">';
					echo 'alert("FILE IS TO0 LARGE");';
					echo 'window.location = "upload_notes.php";';
					echo '</script>';
		} 
		else 
		{
			if (move_uploaded_file($file, $destination)) 
			{
				$sql = "INSERT INTO upload_notes (id,title,year,uploaded_by,file) 
				VALUES ('NULL', '$title','$yr','$uploaded_by','$filename')";
				if (mysqli_query($con, $sql)) 
				{
					echo '<script language="javascript">';
					echo 'alert("NOTES UPLOAD SUCCESSFUL");';
					echo 'window.location = "upload_notes.php";';
					echo '</script>';
				}
			} 
			else 
			{
					echo '<script language="javascript">';
					echo 'alert("NOTES UPLOAD NOT SUCCESSFUL");';
					echo 'window.location = "upload_notes.php";';
					echo '</script>';
			}
		}
	}
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Upload | Notes</title>
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
		<span>U</span>pload
		<span>N</span>otes
	</h1>
	<!-- //title -->
	<!-- content -->
	<div class="sub-main-w3">
		<form validate="true"  name="signup" action="#" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="exampleInputText">Title</label>
				<input type="text" class="form-control" name="title" id="exampleInputText" placeholder="Enter Notes Title" required>
			</div>
			<div class="form-group">
				<select name="yr" required="" style="width: 100%; color: #fff; outline: none;font-size: 14px;letter-spacing: 1px;padding: 12px 13px;box-sizing: border-box;border: none;border: 1px solid black;background: rgba(14, 14, 14, 0.54);">
					<option value="none">Select Year</option>
					<option value="1st">1st Year</option>
					<option value="2nd">2nd Year</option>
					<option value="3rd">3rd Year</option>
				</select>
			</div>
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