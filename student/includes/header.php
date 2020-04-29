<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">AM</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="student_home.php">Home</a></li>
	   <li><a href="view_faculty.php">Faculties</a></li>
      <li><a href="show_assignment.php">All Assignments</a></li>
	  <li><a href="download_notes.php">All Notes</a></li>
      <li><a href="view_marks.php">Marks Report</a></li>
    </ul>
	<div class="pull-right">
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, <?php echo $_SESSION['std_name'] ?> <span class="caret"></span></a>
                 <ul class="dropdown-menu">
                    <li><a href="edit_profile.php">Edit My Profile</a></li>
                    <li><a href="edit_password.php">Edit My Password</a></li>
                    <li><a href="index.php">Logout</a></li>
				</ul>
			</li>
        </ul>
    </div>
  </div>

</nav>