<?php
	/* This project is dedicated to the lotus feet of my prabhu Sri Narayana & my holy mother Anondomoyee */
	include('auth.php');
	require_once('../database/server.php');
	$page_name=basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Disapprove | Faculties</title>
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
								<th class="column1">Faculty Name</th>
								<th class="column1">Profile Image</th>
								<th class="column1">Contact Number</th>
								<th class="column1">Email ID</th>
								<th class="column1">Qualification</th>
								<th class="column1">Action</th>
							</tr>
						</thead>
						<?php 
							$sql="SELECT * FROM `fac_details` WHERE status='0'";
							$result=mysqli_query($con,$sql);
							while ($row = mysqli_fetch_assoc($result)) {
						?>
						<tbody>
								<tr>
									<td class="column1"><?php echo $row['name']?></td>
									<td class="column1"><img src="../faculty/uploads/<?php echo $row['img']?>" style="width:50px;height:50px;"></td>
									<td class="column1"><?php echo $row['contact']?></td>
									<td class="column1"><?php echo $row['email']?></td>
									<td class="column1"><?php echo $row['qualification']?></td>
									<td class="column1"><a href="approve_faculties.php?fac_id=<?php echo $row['id']; ?>&p_name=<?php echo $page_name; ?>"><button class="btn btn-success">Approve</button></a></td>
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