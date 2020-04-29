<?php
	/* This project is dedicated to the lotus feet of my prabhu Sri Narayana & my holy mother Anondomoyee */
	require_once('auth.php');
    require_once("../database/server.php");
	$email=$_SESSION['std_user_name'];
	$sql="select * from st_details where email='$email' and status='1'";
	$result=mysqli_query($con,$sql);
	$count=mysqli_num_rows($result);
	if($count>0)
	{
		foreach($result as $key)
		{
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student | Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="css/style1.css" type="text/css" media="all" />
	<link href="//fonts.googleapis.com/css?family=Cuprum:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese"
	    rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

  <style>
  a {
    color: white;
}
a.dropdown-toggle:hover
{
	none;
}
  </style>
</head>
<body>

<?php include('includes/header.php') ?>
  
<div class="container">
<div class="row panel panel-primary" style="margin-top:2%;">
            <div class="panel-heading lead">
                <div class="row">
                    <div class="col-lg-8 col-md-8"><i class="fa fa-user"></i> My Details</div>
                    <div class="col-lg-4 col-md-4 text-right">
                    </div>
                </div>
            </div>
            <div class="panel-body">                                    
                    <div class="row">
                        <div class="col-lg-12 col-md-12">

                            <div class="row">
                                <div class="col-lg-3 col-md-3">
                                    <center>
                                        <span class="text-left">
                                        <img src="<?php echo "uploads/".$key['img'] ?>" class="img-thumbnail" alt="narayana" style="width:180px;height:217px;">                   
                                    </span></center>
                                  

                                    
                                </div>
                                <div class="col-lg-9 col-md-9">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#Summery" class="text-success">Basic Details</a></li>
                                        <li><a data-toggle="tab" href="#Contact" class="text-success"> Contact Info</a></li>
                                        <li><a data-toggle="tab" href="#General" class="text-success"> General Info</a></li>	
                                    </ul>

                                    <div class="tab-content">
                                        <div id="Summery" class="tab-pane fade in active">

                                            <div class="table-responsive panel">
                                                <table class="table table-hover">
                                                    <tbody>
    
                                                            <tr>
                                                                <td class="text-info"><b>Full Name</b></td>
                                                                <td><?php echo $key['name'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-info"><b>Date Of Birth</b></td>
                                                                <td><?php $timestamp = strtotime($key['dob']); $date = date('d-m-Y', $timestamp); echo $date; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-info"><b>Course</b></td>
                                                                <td><?php echo $key['course'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-info"><b>Year</b></td>
                                                                <td><?php echo $key['year'] ?></td>
                                                            </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div id="Contact" class="tab-pane fade">
                                            <div class="table-responsive panel">
                                                <table class="table table-hover">
                                                    <tbody>
    										
                                                            <tr>
                                                                <td class="text-info"><b>Contact No</b></td>
                                                                <td><?php echo $key['contact'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-info"><b>Email Id</b></td>
                                                                <td><?php echo $key['email'] ?></td>
                                                            </tr>	
															<tr>
                                                                <td class="text-info"><b>Address</b></td>
                                                                <td><?php echo $key['address'] ?></td>
                                                            </tr>															
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
										<div id="General" class="tab-pane fade">
                                            <div class="table-responsive panel">
                                                <table class="table table-hover">
                                                    <tbody>
                                                            <tr>
                                                                <td class="text-info"><b>Student Id</b></td>
                                                                <td><?php echo "RICIS-BCA ".$key['id'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-info"><b>User Name</b></td>
                                                                <td><?php echo $key['email'] ?></td>
                                                            </tr>	
                                                            <tr>
                                                                <td class="text-info"><b>Date of Registration</b></td>
																	<td><?php $timestamp = strtotime($key['reg_date']); $date = date('d-m-Y', $timestamp); echo $date; }}?></td>
                                                            </tr>															
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                <!-- /.table-responsive -->
                
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
