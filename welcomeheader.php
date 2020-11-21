<?php
   include('session.php');
?>
<html lang="en">
  <head>
  <title>Smart Healthcare System</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/jpg" href="images/logo.jpg"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
      <style>
.navbg{
   background-color: lightblue;
    left: 0;
   bottom: 0;
}
.logoutbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

</style>
  </head>
  <body>
  
<nav id="navbar-example2" class="navbar navbar-light navbg">
<img style="width: 100px;"src="images/logo.jpg">
  <font color='white'><h1>Welcome <?php echo $login_session;?> to <?php echo $user_pos;?> Desk </h1></font>
  <ul class="nav nav-pills">
     <li class="nav-item">&emsp;
    <a class="logoutbtn" href="logout.php"><font color='white'><strong>Log out</strong></font></a>
  </li>
    
  </ul>
</nav>	  
   </body>
   
</html>