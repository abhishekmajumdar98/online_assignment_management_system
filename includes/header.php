<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">AM</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="faculty_home.php">Home</a></li>
	  <ul class="nav navbar-nav">
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Students <span class="caret"></span></a>
                 <ul class="dropdown-menu">
					<li><a href="view_students.php?yr=1st"> First Year </a></li>
                    <li><a href="view_students.php?yr=2nd"> Second Year </a></li>
					<li><a href="view_students.php?yr=3rd"> Third Year </a></li>
				</ul>
			</li>
        </ul>
      <li><a href="assign_task.php">Upload Assignment</a></li>
	  <li><a href="all_assignments.php">All Assignments</a></li>
      <ul class="nav navbar-nav">
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Submitted Assignments <span class="caret"></span></a>
                 <ul class="dropdown-menu">
					<li><a href="view_task.php?yr=1st"> First Year </a></li>
                    <li><a href="view_task.php?yr=2nd"> Second Year </a></li>
					<li><a href="view_task.php?yr=3rd"> Third Year </a></li>
				</ul>
			</li>
        </ul>
	<li><a href="upload_notes.php">Upload Notes</a></li>
    </ul>
	<div class="pull-right">
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, <?php echo $_SESSION['fac_name'] ?> <span class="caret"></span></a>
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