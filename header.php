<?php
   include("config.php");
   session_start();
   $error="";
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
	  $mypos = mysqli_real_escape_string($db,$_POST['pos']);
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
	     
      if($mypos == "Admin"){
		$sql = "SELECT id FROM admin WHERE username = '$myusername' and password = '$mypassword'";
		$result = mysqli_query($db,$sql);
		$count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
	   if($count > 0) {
		  echo"Done successfully";
         $_SESSION['login_user'] = $myusername;
		 $_SESSION['pos'] = $mypos;
         header("location: adminwelcome.php");
      }
	  else {
         $error = "Invalid Credentials";
      }
	  }
	  if($mypos == "Doctor"){
		   $sql = "SELECT id FROM doctor WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
	  
      $count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count > 0) {
		  echo"Done successfully";
		  $_SESSION['pos'] = $mypos;
         $_SESSION['login_user'] = $myusername;
         header("location: doctorwelcome.php");
      }else {
         $error = "Invalid Credentials";
      }
	  }
	  if($mypos == "Patient"){
		  print("hi patient");
		   $sql = "SELECT id FROM patient WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
	  
      $count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count > 0) {
		  echo"Done successfully";
		  $_SESSION['pos'] = $mypos;
         $_SESSION['login_user'] = $myusername;
         header("location: patientwelcome.php");
      }else {
         $error = "Invalid Credentials";
      }
	  }
     
   }
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
</head>
<body>    
  <style>
  a {
  text-decoration: none;
  display: inline-block;
}

a:hover {
  background-color: #ddd;
  color: black;
}
.next {
  background-color:lightblue;
  color: white;
  padding:10px 10px;
}

.navbg{
   background-color: lightblue;
    left: 0;
   bottom: 0;
}
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password],select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: green;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>

<nav id="navbar-example2" class="navbar navbar-light navbg">
  <img style="width: 100px;"src="images/logo.jpg">
  <ul class="nav nav-pills">
    <li class="nav-item"><br>
      <a class="nav-link " href="indexing.php"><font color='white'><strong>Home</strong></font></a>
    </li>
    <li class="nav-item"><br>
      <a class="nav-link " href="aboutus.php"><font color='white'><strong>About Us</strong></font></a>
    </li>
    <li class="nav-item"><br>
      <a class="nav-link" href="contact.php"><font color='white'><strong>Contact Us</strong></font></a>
    </li>
	<li class="nav-item"><br>
      <a class="nav-link" href="notification.php"><font color='white'><strong>Noticeboard</strong></font></a>
    </li>&emsp;
     <li class="nav-item">
	 <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
	 <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
  </li>
    
  </ul>
</nav>
  
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
	  <label for="pos"><b>Position</b></label>
	  <select  name="pos" required> &emsp;&emsp;&emsp;
						<option value="">---select---</option>
						<option value="Admin">Admin</option>
						<option value="Doctor">Doctor</option>
						<option value="Patient">Patient</option>
					</select><br>
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit" class="cancelbtn" style="background-color:green">Login</button>
	  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
	  
    </div>
	
    <div class="container" style="background-color:#f1f1f1">
      <span class="psw">Forgot <a href="#">password</a>?</span>
	  <label><b>Not registered yet ? Click here to register : </b></label>&emsp;&emsp;<a href="doctorreg.php" class="next">Doctor</a>&emsp;&emsp;<a href="patientreg.php" class="next">Patient</a> <br>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>




