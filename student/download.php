<?
	/* This project is dedicated to the lotus feet of my prabhu Sri Narayana & my holy mother Anondomoyee */
	include('auth.php');
	require_once('../database/server.php');
	if (isset($_GET['file_id'])) 
	{
		$id = $_GET['file_id'];
		$

		// fetch file to download from database
		$sql = "SELECT * FROM task_assign WHERE id=$id";
		$result = mysqli_query($con, $sql);

		$file = mysqli_fetch_assoc($result);
		$filepath = 'uploads/' . $file['file'];

		if (file_exists($filepath)) 
		{
			header('Content-Description: File Transfer');
			header('Content-Type: application/octet-stream');
			header('Content-Disposition: attachment; filename=' . basename($filepath));
			header('Expires: 0');
			header('Cache-Control: must-revalidate');
			header('Pragma: public');
			header('Content-Length: ' . filesize('uploads/' . $file['file']));
			readfile('uploads/' . $file['file']);
			header('location:show_assignment.php');
		}
	}
?>