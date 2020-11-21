<?php
   include('session.php');?>
   
<?PHP
if($user_pos == "Admin"){
$result = mysqli_query($db,"SELECT * FROM admin where username = '$login_session'");
$row = mysqli_fetch_assoc($result);
$id = $row['id'];
$uname = $row['username'];
$pass = $row['password'];
}

if($user_pos == "Doctor"){
$result = mysqli_query($db,"SELECT * FROM doctor where username = '$login_session'");
$row = mysqli_fetch_assoc($result);
$id = $row['id'];
$fname = $row['Firstname'];
$lname = $row['Lastname'];
$email = $row['Email'];
$contact = $row['Contactno'];
$location = $row['Location'];
$file = $row['File'];
$spec = $row['Specialization'];
$uname= $row['username'];
$pass = $row['password'];
 }
 
if($user_pos == "Patient"){
$result = mysqli_query($db,"SELECT * FROM patient where username = '$login_session'");
$row = mysqli_fetch_assoc($result);
$id = $row['id'];
$fname = $row['Firstname'];
$lname = $row['Lastname'];
$email = $row['Email'];
$contact = $row['Contactno'];
$location = $row['Location'];
$uname= $row['username'];
$pass = $row['password'];
 }?>
 
<html>
<head>
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<style>
.custom-file-upload {
    padding: 6px ;
    cursor: pointer;
   color: gray;
   font-size: 20px;
   font-weight: bold;
}
.container {
  position: relative;
  font-family: Arial;
}

.text-block {
  background-color: lightblue;
  color: white;
  padding-left: 20px;
  height:70px
}
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}

</style>
<script>
    function myfunction(){
	
    var firstname = document.forms["RegForm"]["Fname"];
    if(firstname.value=="")
	{
		window.alert("Please Enter Your firstName");
		firstname.focus();
		return false;
	}
	if(!isNaN(firstname.value) || !/^[a-zA-Z]*$/g.test(firstname.value))  
	{
		window.alert("Please Enter Your firstName correctly ");
		firstname.focus();
		return false;
	}
	
	var lastName = document.forms["RegForm"]["Lname"];
    if(lastName.value=="")
	{
		window.alert("Please Enter Your lastName");
		lastName.focus();
		return false;
	}
	if(!isNaN(lastName.value) || !/^[a-zA-Z]*$/g.test(lastName.value))  
	{
		window.alert("Please Enter Your lastName correctly");
		lastName.focus();
		return false;
	}

	var email = document.forms["RegForm"]["Email"];
	if (email.value == "")                                  
    {
        window.alert("Please enter e-mail address.");
        email.focus();
        return false;
    }
    if (email.value.indexOf("@", 0) < 0)                
    {
        window.alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }
    if (email.value.indexOf(".", 0) < 0)                
    {
        window.alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }
	
	var contactno = document.forms["RegForm"]["Contactno"];
	if (isNaN(contactno.value) || contactno.value.length!=10 || contactno.value < 0)
	{
	    window.alert("Please Enter contact number correctly ");
		contactno.focus();
		return false;
	}
	
	var location = document.forms["RegForm"]["Location"];
    if(location.value=="")
	{
		window.alert("Please Enter Your Location");
		location.focus();
		return false;
	}
	return true;
	}
   </script>
</head>
<body><br>
<div class="container">
  <div class="text-block">
    <h1 style="padding:20px; text-align:center;">ID : <?php print $row['id'];?></h1>
  </div>
</div>
<?PHP if($user_pos == "Admin"){?>
 <form class="contact100-form validate-form" action="thanksupdate.php?edit=<?php echo $id?>" name="RegForm" onsubmit="return myfunction()" method="POST">
<label class="label-input100" for="username">Username</label>
				<div class="wrap-input100">
					<input class="input100" type="text" name="username" value="<?php echo $uname?>" required>
					<span class="focus-input100"></span>
				</div>
				
				<label class="label-input100" for="password">Password </label>
				<div class="wrap-input100">
					<input class="input100" type="password" name="password" value="<?php echo $pass?>" required>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						UPDATE
					</button>
				</div>
			</form>
<?php } ?>

<?PHP if($user_pos == "Doctor"){?>
 <form class="contact100-form validate-form" action="thanksupdate.php?edit=<?php echo $id?>" name="RegForm" onsubmit="return myfunction()" method="POST">
				<label class="label-input100">Name </label>
				<div class="wrap-input100 rs1-wrap-input100">
					<input class="input100" type="text" name="Fname" value="<?php echo $fname?>">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100">
					<input class="input100" type="text" name="Lname" value="<?php echo $lname?>">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="email">Email </label>
				<div class="wrap-input100">
					<input class="input100" type="text" name="Email" value="<?php echo $email?>">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="phone">Phone number</label>
				<div class="wrap-input100">
					<input class="input100" type="number" name="Contactno" value="<?php echo $contact?>">
					<span class="focus-input100"></span>
				</div>
				
				<label class="label-input100" for="location">Location</label>
				<div class="wrap-input100">
					 <select class="input100" name="Location" required>
						<option value="<?php echo $location?>"><?php echo $location?></option>
						<option value="MAHARASHTRA">MAHARASHTRA</option>
						<option value="KERALA">KERALA</option>
					</select>
					<span class="focus-input100"></span>
				</div>
				
				<label class="label-input100" for="username">Username</label>
				<div class="wrap-input100">
					<input class="input100" type="text" name="username" value="<?php echo $uname?>" required>
					<span class="focus-input100"></span>
				</div>
				
				<label class="label-input100" for="password">Password </label>
				<div class="wrap-input100">
					<input class="input100" type="password" name="password" value="<?php echo $pass?>" required>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						UPDATE
					</button>
				</div>
			</form>
<?php } ?>

<?PHP if($user_pos == "Patient"){?>
 <form class="contact100-form validate-form" action="thanksupdate.php?edit=<?php echo $id?>" name="RegForm" onsubmit="return myfunction()" method="POST">
				<label class="label-input100">Name </label>
				<div class="wrap-input100 rs1-wrap-input100">
					<input class="input100" type="text" name="Fname" value="<?php echo $fname?>">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100">
					<input class="input100" type="text" name="Lname" value="<?php echo $lname?>">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="email">Email </label>
				<div class="wrap-input100">
					<input class="input100" type="text" name="Email" value="<?php echo $email?>">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="phone">Phone number</label>
				<div class="wrap-input100">
					<input class="input100" type="number" name="Contactno" value="<?php echo $contact?>">
					<span class="focus-input100"></span>
				</div>
				
				<label class="label-input100" for="location">Location</label>
				<div class="wrap-input100">
					 <select class="input100" name="Location" required>
						<option value="<?php echo $location?>"><?php echo $location?></option>
						<option value="MAHARASHTRA">MAHARASHTRA</option>
						<option value="KERALA">KERALA</option>
					</select>
					<span class="focus-input100"></span>
				</div>
				
				<label class="label-input100" for="username">Username</label>
				<div class="wrap-input100">
					<input class="input100" type="text" name="username" value="<?php echo $uname?>" required>
					<span class="focus-input100"></span>
				</div>
				
				<label class="label-input100" for="password">Password </label>
				<div class="wrap-input100">
					<input class="input100" type="password" name="password" value="<?php echo $pass?>" required>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						UPDATE
					</button>
				</div>
			</form>
<?php } ?>

</body>
</html>