<?php
	/* This project is dedicated to the lotus feet of my prabhu Sri Narayana & my holy mother Anondomoyee */
	require_once('auth.php');
	require_once("../database/server.php");
	$query = 'SELECT * FROM admin WHERE id = ' . $_SESSION['admin_id'];
    $result = mysqli_query($con,$query) or die(mysqli_error($con));
	while ($row = mysqli_fetch_assoc($result)) 
	{
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Edit | Admin | Profile</title>
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
	<!-- Meta tag Keywords -->
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
	<?php include('includes/header.php') ?>
	<h1>
		<span>A</span>dmin
		<span>U</span>pdate
		<span>P</span>rofile
	</h1>
	<!-- //title -->
	<!-- content -->
	<div class="sub-main-w3">
		<form validate="true"  name="signup" action="#" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="exampleInputText">Name</label>
				<input type="text" class="form-control" value="<?php echo $row['name'] ?>" name="admin_name" id="exampleInputText" placeholder="Enter Name" required>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" class="form-control" name="email_id" value="<?php echo $row['email'] ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
				<!--<span style="color:red;font-weight:bold">hey</span>-->
			</div>
			<div class="form-group">
				<label for="exampleMobile1">Mobile Number</label>
				<input type="mobile" pattern="[6789][0-9]{9}" class="form-control" value="<?php echo $row['contact'] ?>" name="mobile_no" id="exampleMobile1" placeholder="Enter Mobile number" required>
			</div>
			<div class="form-group">
				<label>Address</label>
				<input type="text" class="form-control" name="address" value="<?php echo $row['address'] ?>" placeholder="Enter Full Address" required>
			</div>
			<div class="form-group">
				<label for="exampleMobile1">Date of Birth</label>
				<input type="date" name="dob" value="<?php echo $row['dob'] ?>"<?php }?>>
			</div>
			<div class="form-group">
				<label class="checkbox-inline">
					<input type="checkbox" value="true" required>I agree to the terms and conditions
				</label>
			</div>
			<button type="submit" name="update" class="btn btn-primary">Update</button>
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
<?php
	if(isset($_POST['update']))
	{
		$name=$_POST['admin_name'];
		$email_id=$_POST['email_id'];
		$mob_no=$_POST['mobile_no'];
		//$course=$_POST['course'];
		//$password=md5($_POST['password']);
		//$confirmpassword=md5($_POST['confirm_password']);
		$address=$_POST['address'];
		//$year=$_POST['course_year'];
		$dob=$_POST['dob'];
				$sql= 'UPDATE `admin` SET `name`="'.$name.'",`email`="'.$email_id.'",`contact`="'.$mob_no.'",`address`="'.$address.'",`dob`="'.$dob.'" WHERE id='.$_SESSION['admin_id'];
				mysqli_query($con,$sql);
				echo '<script language="javascript">';
				echo 'alert("UPDATE SUCCESSFULL");';
				$_SESSION['admin_user_name']=$email_id;
				$_SESSION['admin_name']=$name;
				echo 'window.location = "admin_home.php";';
				echo '</script>';
	}
?>