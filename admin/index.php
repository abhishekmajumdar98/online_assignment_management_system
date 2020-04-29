<?php
	/* This project is dedicated to the lotus feet of my prabhu Sri Narayana & my holy mother Anondomoyee */
	session_start();
	unset($_SESSION['admin_id']);
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title> Admin | Login </title>
      <!-- Meta tags -->
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="keywords" content="Gaze Sign up & login Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
         />
      <script>
         addEventListener("load", function () { setTimeout(hideURLbar, 0); }, false); function hideURLbar() { window.scrollTo(0, 1); }
      </script>
      <!-- Meta tags -->
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//style sheet end here-->
      <link href="//fonts.googleapis.com/css?family=Cuprum:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese"
	    rel="stylesheet">
   </head>
   <body>
      <div class="mid-class">
         <div class="art-right-w3ls">
            <h2>Admin Login</h2>
            <form action="login.php" method="post">
               <div class="main">
                  <div class="form-left-to-w3l">
                     <input type="text" name="emailid" placeholder="Username" required="">
                  </div>
                  <div class="form-left-to-w3l ">
                     <input type="password" name="password" placeholder="Password" required="">
                     <div class="clear"></div>
                  </div>
			   </div>

               <div class="clear"></div>
               <div class="btnn">
                  <button type="submit" name="login">Sign In</button>
               </div>
            </form>
         </div>
         <div class="art-left-w3ls">
            <center><h1 class="header-w3ls">
               Admin Login
			   <!-- <img src="images/logo.png"/> -->
            </h1></center>
         </div>
      </div>
      <footer class="bottem-wthree-footer">
		 <p>
            © 2019 Online Assignment Management System | Developed By Abhishek Majumdar<br/>
         </p>
      </footer>

   </body>
</html>