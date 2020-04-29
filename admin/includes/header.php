<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
     <a class="navbar-brand" href="#">AM</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="admin_home.php">Home</a></li>
	  <ul class="nav navbar-nav">
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Students <span class="caret"></span></a>
                 <ul class="dropdown-menu">
                    <li><a href="all_disapprove_students.php"> Disapprove </a></li>
					<li><a href="all_pending_students.php"> Pending </a></li>
				</ul>
			</li>
        </ul>
		<ul class="nav navbar-nav">
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Faculties <span class="caret"></span></a>
                 <ul class="dropdown-menu">
					<li><a href="all_approve_faculties.php"> Approve </a></li>
                    <li><a href="all_disapprove_faculties.php"> Disapprove </a></li>
					<li><a href="all_pending_faculties.php"> Pending </a></li>
				</ul>
			</li>
        </ul>
		<ul class="nav navbar-nav">
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">BCA Students <span class="caret"></span></a>
                 <ul class="dropdown-menu">
					<li><a href="view_bca_students.php?yr=1st"> 1st Year </a></li>
                    <li><a href="view_bca_students.php?yr=2nd"> 2nd Year </a></li>
					<li><a href="view_bca_students.php?yr=3rd"> 3rd Year </a></li>
				</ul>
			</li>
        </ul>
		<ul class="nav navbar-nav">
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">BBA Students <span class="caret"></span></a>
                 <ul class="dropdown-menu">
					<li><a href="view_bba_students.php?yr=1st"> 1st Year </a></li>
                    <li><a href="view_bba_students.php?yr=2nd"> 2nd Year </a></li>
					<li><a href="view_bba_students.php?yr=3rd"> 3rd Year </a></li>
				</ul>
			</li>
        </ul>
    </ul>
	<div class="pull-right">
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, <?php echo $_SESSION['admin_name'] ?> <span class="caret"></span></a>
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