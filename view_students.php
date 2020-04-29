<?php
	/* This project is dedicated to the lotus feet of my prabhu Sri Narayana & my holy mother Anondomoyee */
	include('auth.php');
	require_once('database/server.php');
	$yr=$_GET['yr'];
	$dept=$_SESSION['fac_dept'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $yr?> | Year | Students</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="//fonts.googleapis.com/css?family=Cuprum:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<?php include('includes/header.php') ?>
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Student ID</th>
								<th class="column1">Profile Image</th>
								<th class="column1">Name</th>
								<th class="column1">Contact Number</th>
								<th class="column1">Email ID</th>
								<th class="column1">Date of Birth</th>
								<th class="column1">Marks</th>
							</tr>
						</thead>
						<?php 
							$sql="SELECT * FROM `st_details` WHERE year='$yr' and status='1' and course='$dept'";
							$result=mysqli_query($con,$sql);
							while ($row = mysqli_fetch_assoc($result)) {
						?>
						<tbody>
								<tr>
									<td class="column1"><?php echo "RICIS-BCA ".$row['id']?></td>
									<td class="column1"><img src="../student/uploads/<?php echo $row['img']?>" style="width:50px;height:50px;"></td>
									<td class="column1"><?php echo $row['name']?></td>
									<td class="column1"><?php echo $row['contact']?></td>
									<td class="column1"><?php echo $row['email']?></td>
									<td class="column1"><?php $timestamp = strtotime($row['dob']); $date = date('d-m-Y', $timestamp); echo $date; ?></td>
									<td class="column1"><a href="view_students_marks.php?st_id=<?php echo $row['id']; ?>">Click Here</a></td>
								</tr>
								
						</tbody>
							<?php } ?>
					</table>
				</div>
			</div>
		</div>
	</div>
<div class="footer">
		<p>
			 © 2019 Online Assignment Management System | Developed By Abhishek Majumdar
		</p>
	</div>
</body>
</html>