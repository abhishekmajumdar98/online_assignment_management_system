<?php
	/* This project is dedicated to the lotus feet of my prabhu Sri Narayana & my holy mother Anondomoyee */
	require_once("database/server.php");
	if(isset($_POST['submit']))
	{
		$name=$_POST['fac_name'];
		$email_id=$_POST['email_id'];
		$mob_no=$_POST['mobile_no'];
		$dept=$_POST['dept'];
		$password=md5($_POST['password']);
		$confirmpassword=md5($_POST['confirm_password']);
		$address=$_POST['address'];
		//$year=$_POST['course_year'];
		$dob=$_POST['dob'];
		$qualification=$_POST['qualification'];
			$sql = "SELECT * FROM `fac_details` WHERE `email` = '$email_id' OR `contact` = '$mob_no' "; 
			$result = mysqli_query($con,$sql); 
			//$result->execute(); 
			$number_of_rows = mysqli_num_rows($result);
			if( $number_of_rows > 0 ) 
			{
				echo '<script language="javascript">';
				echo 'alert("EMAIL ID OR MOBILE NUMBER ALREADY EXIST");';
				echo 'window.location = "signup.php";';
				echo '</script>';
			}
			else if($password!=$confirmpassword)
			{
				echo '<script language="javascript">';
				echo 'alert("PASSWORD AND CONFIRM PASSWORD NOT MATCHED");';
				echo 'window.location = "signup.php";';
				echo '</script>';
			}
			else if($dept=="none")
			{
				echo '<script language="javascript">';
				echo 'alert("PLEASE SELECT DEPARTMENT");';
				echo 'window.location = "signup.php";';
				echo '</script>';
			}
			else
			{
				$folder ="uploads/"; 
				$image = $_FILES['image']['name']; 
				$path = $folder . $image ; 
				$target_file=$folder.basename($_FILES["image"]["name"]);
				$imageFileType=pathinfo($target_file,PATHINFO_EXTENSION); 
				$allowed=array('jpeg','png' ,'jpg'); $filename=$_FILES['image']['name']; 
				$ext=pathinfo($filename, PATHINFO_EXTENSION); 
				if(!in_array($ext,$allowed)) 
				{ 
					echo '<script language="javascript">';
					echo 'alert("PLEASE CHOOSE ONLY JPG/JPEG/PNG FILES");';
					echo 'window.location = "../index.php";';
					echo '</script>';
				}
				else
				{ 
					move_uploaded_file( $_FILES['image'] ['tmp_name'], $path); 
					$sql = "INSERT INTO fac_details (id, name,email, contact,qualification, password, status,img,address,dept,dob)
					VALUES ('NULL', '$name', '$email_id', '$mob_no', '$qualification', '$password', '2', '$image', '$address', '$dept', '$dob')";
					mysqli_query($con,$sql);
					echo '<script language="javascript">';
					echo 'alert("REGISTRATION SUCCESSFULL");';
					echo 'window.location = "signup.php";';
					echo '</script>';
				}
			}
	}
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Faculty | Signup</title>
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
	<h1>
		<span>F</span>aculty
		<span>S</span>ignup
		<span>F</span>orm
	</h1>
	<!-- //title -->
	<!-- content -->
	<div class="sub-main-w3">
		<form validate="true"  name="signup" action="#" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="exampleInputText">Name</label>
				<input type="text" class="form-control" name="fac_name" id="exampleInputText" placeholder="Enter Name" required>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" class="form-control" name="email_id" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
				<!--<span style="color:red;font-weight:bold">hey</span>-->
			</div>
			<div class="form-group">
				<label for="exampleMobile1">Mobile Number</label>
				<input type="mobile" pattern="[6789][0-9]{9}" class="form-control" name="mobile_no" id="exampleMobile1" placeholder="Enter Mobile number" required>
			</div>
			<div class="form-group">
				<label>Address</label>
				<input type="text" class="form-control" name="address"  placeholder="Enter Full Address" required>
			</div>
			<div class="form-group">
				<label>Qualification</label>
				<input type="text" class="form-control" name="qualification"  placeholder="Enter Qualification" required>
			</div>
			<div class="form-group">
				<select name="dept" required>
					<option value="none">Select Department</option>
					<option value="BCA(Hons)">BCA(Hons)</option>
					<option value="BCA(Hons)">BBA(Hons)</option>
				</select>
			</div>
			<div class="form-group">
				<label for="exampleMobile1">Date of Birth</label>
				<input type="date" name="dob">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
				    required>
			</div>
			<div class="form-group">
				<label for="exampleConfirmPassword1">Confirm Password</label>
				<input type="password" class="form-control" id="exampleConfirmPassword1" name="confirm_password" placeholder="Confirm Password" required data-match="password"
				    data-match-field="#exampleInputPassword1">
			</div>
			<div class="form-group">
				<label>Chose Profile Image</label>
				<input type="file" name="image" required>
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