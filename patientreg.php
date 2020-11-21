<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registration Form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
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
<!--===============================================================================================-->
</head>


<body>
<style>
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

	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="thanksreg.php?edit=patient" name="RegForm" onsubmit="return myfunction()" method="POST">
				<span class="contact100-form-title">
				 	Fill the Details
				</span>

				<label class="label-input100">Tell us your name *</label>
				<div class="wrap-input100 rs1-wrap-input100">
					<input class="input100" type="text" name="Fname" placeholder="First name">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100">
					<input class="input100" type="text" name="Lname" placeholder="Last name">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="email">Enter your email *</label>
				<div class="wrap-input100">
					<input class="input100" type="text" name="Email" placeholder="Eg. example@email.com">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="phone">Enter phone number *</label>
				<div class="wrap-input100">
					<input class="input100" type="number" name="Contactno" placeholder="Eg. +1 800 000000">
					<span class="focus-input100"></span>
				</div>
				
				<label class="label-input100" for="location">Enter Location *</label>
				<div class="wrap-input100">
					 <select class="input100" name="Location" required>
						<option value="">---select---</option>
						<option value="MAHARASHTRA">MAHARASHTRA</option>
						<option value="KERALA">KERALA</option>
					</select>
					<span class="focus-input100"></span>
				</div>
				
				<label class="label-input100" for="username">Enter username *</label>
				<div class="wrap-input100">
					<input class="input100" type="text" name="username" required>
					<span class="focus-input100"></span>
				</div>
				
				<label class="label-input100" for="password">Enter password *</label>
				<div class="wrap-input100">
					<input class="input100" type="password" name="password" required>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						SUMBIT
					</button>
				</div>
			</form>

			<div class="contact100-more flex-col-c-m" style="background-image: url('images/bg.jpg');">
				<div class="flex-w size1 p-b-47">

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Address
						</span>

						<span class="txt2">
							Gandhi nagar ,<br>Nehru road ,<br>Andheri (West)
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Lets Talk
						</span>

						<span class="txt3">
							+1 800 0000000
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							General Support
						</span>

						<span class="txt3">
							contact@example.com
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
