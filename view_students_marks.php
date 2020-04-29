<?php
	/* This project is dedicated to the lotus feet of my prabhu Sri Narayana & my holy mother Anondomoyee */
	include('auth.php');
	require_once('database/server.php');
	$st_id=$_GET['st_id'];
	$fac_name=$_SESSION['fac_name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Students | Marks</title>
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
								<th class="column1">Student Name</th>
								<th class="column1">Assignment ID</th>
								<th class="column1">Assignment Topic</th>
								<th class="column1">Remarks</th>
								<th class="column1">Marks</th>
							</tr>
						</thead>
						<?php 
							$sql="SELECT * FROM `remarks` WHERE st_id='$st_id' and uploaded_by='$fac_name'";
							$result=mysqli_query($con,$sql);
							while ($row = mysqli_fetch_assoc($result)) {
						?>
						<tbody>
								<tr>
									<td class="column1"><?php $sql1="SELECT * FROM st_details WHERE id=".$row['st_id']; $result1=mysqli_query($con,$sql1) ;$row1 = mysqli_fetch_array($result1); echo $row1['name']; ?></td>
									<td class="column1"><?php echo $row['assignment_id']?></td>
									<td class="column1"><?php $sql2="SELECT * FROM task_assign WHERE id=".$row['assignment_id']; $result2=mysqli_query($con,$sql2) ;$row2 = mysqli_fetch_array($result2); echo $row2['assignment_title']; ?></td>
									<td class="column1"><?php echo $row['remarks']?></td>
									<td class="column1"><?php echo $row['marks']?></td>
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