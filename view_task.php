<?php
	/* This project is dedicated to the lotus feet of my prabhu Sri Narayana & my holy mother Anondomoyee */
	include('auth.php');
	require_once('database/server.php');
	if(isset($_GET['yr']))
		$_SESSION['year']=$_GET['yr'];
	$year=$_SESSION['year'];
	$dept=$_SESSION['fac_dept'];
	$fac_id=$_SESSION['fac_id'];
	$fac_name=$_SESSION['fac_name'];
	if (isset($_GET['file_id'])) 
	{
		$id = $_GET['file_id'];
		// fetch file to download from database
		$sql = "SELECT * FROM submit_assignment WHERE id=$id";
		$result = mysqli_query($con, $sql);

		$file = mysqli_fetch_assoc($result);
		$filepath = '../student/submit_assignment/' . $file['file'];

		if (file_exists($filepath)) 
		{
			header('Content-Description: File Transfer');
			header('Content-Type: application/octet-stream');
			header('Content-Disposition: attachment; filename=' . basename($filepath));
			header('Expires: 0');
			header('Cache-Control: must-revalidate');
			header('Pragma: public');
			header('Content-Length: ' . filesize('../student/submit_assignment/' . $file['file']));
			readfile('../student/submit_assignment/' . $file['file']);
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Submitted | Assignments</title>
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
	<div class="container">
	</div>
	<?php include('includes/header.php') ?>
	<div class="limiter">
		<div class="container-table100">
		
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Assignment Title</th>
								<th class="column1">Submitted By</th>
								<th class="column1">Roll No</th>
								<th class="column1">File</th>
								<th class="column1">Date</th>
								<th class="column1">Action</th>
							</tr>
						</thead>
						<?php 
							$sql="SELECT * FROM `submit_assignment` WHERE year='$year' and dept='$dept' and fac_name='$fac_name'";
							$result=mysqli_query($con,$sql);
							while ($row = mysqli_fetch_assoc($result)) 
							{
						?>
						<?php 
							$sql1="SELECT * FROM remarks WHERE assignment_id=".$row['assignment_id']." AND st_id=".$row['std_id'];
							$result1=mysqli_query($con,$sql1);
							if (mysqli_num_rows($result1) > 0)
								$abhishek="disabled";
							else
								$abhishek="";
						?>
						<tbody>
								<tr>
									<td class="column1"><?php $sql1="SELECT * FROM task_assign WHERE id=".$row['assignment_id']; $result1=mysqli_query($con,$sql1) ;$row1 = mysqli_fetch_array($result1); echo $row1['assignment_title']; ?></td>
									<td class="column1"><?php echo $row['submit_by']; ?></td>
									<td class="column1"><?php echo $row['std_id']; ?></td>
									<td class="column1"><a href="view_task.php?file_id=<?php echo $row['id'] ?>"><?php echo $row['file']; ?></a></td>
									<td class="column1"><?php $timestamp = strtotime($row['submit_date']); $date = date('d-m-Y', $timestamp); echo $date; ?></td>
									<td class="column1"><a href="remarks.php?std_id=<?php echo $row['std_id']; ?>&assignment_id=<?php echo $row['assignment_id']; ?>"><button class="btn btn-primary" <?php echo $abhishek ?>>Remarks</button></td>
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