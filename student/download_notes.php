<?php
	/* This project is dedicated to the lotus feet of my prabhu Sri Narayana & my holy mother Anondomoyee */
	
	include('auth.php');
	require_once('../database/server.php');
	$year=$_SESSION['std_year'];
	if (isset($_GET['file_id'])) 
	{
		$id = $_GET['file_id'];

		// fetch file to download from database
		$sql = "SELECT * FROM `upload_notes` WHERE id=$id";
		$result = mysqli_query($con, $sql);

		$file = mysqli_fetch_assoc($result);
		$filepath = '../faculty/notes/' . $file['file'];

		if (file_exists($filepath)) 
		{
			
			header('Content-Description: File Transfer');
			header('Content-Type: application/octet-stream');
			header('Content-Disposition: attachment; filename=' . basename($filepath));
			header('Expires: 0');
			header('Cache-Control: must-revalidate');
			header('Pragma: public');
			header('Content-Length: ' . filesize('../faculty/notes/' . $file['file']));
			readfile('../faculty/notes/' . $file['file']);
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Download | Notes</title>
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
								<th class="column1">Notes Title</th>
								<th class="column1">Uploaded By</th>
								<th class="column1">File</th>
								<th class="column1">Date</th>
							</tr>
						</thead>
						<?php 
							$sql="SELECT * FROM `upload_notes` WHERE year='$year'";
							$result=mysqli_query($con,$sql);
							while ($row = mysqli_fetch_assoc($result)) 
							{
								//$_SESSION['faculty']=$row['uploaded_by'];
						?>
						<?php 
							/*$sql1="SELECT * FROM submit_assignment WHERE assignment_id=".$row['id']." AND std_id=".$_SESSION['std_id'];
							$result1=mysqli_query($con,$sql1);
							if (mysqli_num_rows($result1) > 0)
								$abhishek="disabled";
							else
								$abhishek="";*/
						?>
						<tbody>
								<tr>
									<td class="column1"><?php echo $row['title']; ?></td>
									<td class="column1"><?php echo $row['uploaded_by']; ?></td>
									<td class="column1"><a href="download_notes.php?file_id=<?php echo $row['id'] ?>"><?php echo $row['file']; ?></a></td>
									<td class="column1"><?php $timestamp = strtotime($row['uploaded_date']); $date = date('d-m-Y', $timestamp); echo $date; $d="disabled" ?></td>
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