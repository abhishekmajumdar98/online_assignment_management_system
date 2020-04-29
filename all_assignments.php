<?php
	/* This project is dedicated to the lotus feet of my prabhu Sri Narayana & my holy mother Anondomoyee */
	include('auth.php');
	require_once('database/server.php');
	if (isset($_GET['file_id'])) 
	{
		$id = $_GET['file_id'];

		// fetch file to download from database
		$sql = "SELECT * FROM task_assign WHERE id=$id";
		$result = mysqli_query($con, $sql);

		$file = mysqli_fetch_assoc($result);
		$filepath = '../faculty/uploads_assignment/' . $file['file'];

		if (file_exists($filepath)) 
		{
			header('Content-Description: File Transfer');
			header('Content-Type: application/octet-stream');
			header('Content-Disposition: attachment; filename=' . basename($filepath));
			header('Expires: 0');
			header('Cache-Control: must-revalidate');
			header('Pragma: public');
			header('Content-Length: ' . filesize('../faculty/uploads_assignment/' . $file['file']));
			readfile('../faculty/uploads_assignment/' . $file['file']);
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>All | Assignments</title>
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
								<th class="column1">Course Title</th>
								<th class="column1">Assignment Title</th>
								<th class="column1">Year</th>
								<th class="column1">File</th>
								<th class="column1">Last Date Of Submission</th>
								<th class="column1">Uploaded Date</th>
							</tr>
						</thead>
						<?php 
							$fac_name=$_SESSION['fac_name'];
							$sql="SELECT * FROM `task_assign` WHERE uploaded_by='$fac_name'";
							$result=mysqli_query($con,$sql);
							while ($row = mysqli_fetch_assoc($result)) {
						?>
						<tbody>
								<tr>
									<td class="column1"><?php echo $row['course_title']?></td>
									<td class="column1"><?php echo $row['assignment_title']?></td>
									<td class="column1"><?php echo $row['year']?></td>
									<td class="column1"><a href="all_assignments.php?file_id=<?php echo $row['id'] ?>"><?php echo $row['file']; ?></a></td>
									<td class="column1"><?php $timestamp = strtotime($row['last_date']); $date = date('d-m-Y', $timestamp); echo $date; ?></td>
									<td class="column1"><?php $timestamp = strtotime($row['assign_date']); $date = date('d-m-Y', $timestamp); echo $date; ?></td>
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