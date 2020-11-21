<?php
   include('session.php');?>
   
<?PHP
 $error="";
 if($_SERVER["REQUEST_METHOD"] == "POST") {
	 $id=$_POST['id'];
	$weight = $_POST['Weight'];
	$height = $_POST['Height'];
	$temp =$_POST['Temperature'];
	$bp = $_POST['BloodPressure'];
	$pulse = $_POST['Pulserate'];
    $sdetail="UPDATE medical SET Weight = '$weight', Height = '$height', Temperature='$temp', BloodPressure='$bp',Pulserate='$pulse' WHERE id = '$id'";
	$result1=mysqli_query($db,$sdetail);
	if($result1){
         $error = "Updated sucessfully";
      }
     
   }
if($user_pos == "Patient"){
$result = mysqli_query($db,"SELECT * FROM medical where username = '$login_session'");
$row = mysqli_fetch_assoc($result);
$id = $row['id'];
$uname= $row['username'];
$weight = $row['Weight'];
$height = $row['Height'];
$temp = $row['Temperature'];
$bp = $row['BloodPressure'];
$pulse = $row['Pulserate'];

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
</head>
<body><br>
<div class="container">
  <div class="text-block">
    <h1 style="padding:20px; text-align:center;">ID : <?php print $row['id'];?></h1>
  </div>
</div>

<?PHP if($user_pos == "Patient"){?>
 <form class="contact100-form validate-form" action="" name="RegForm" onsubmit="return myfunction()" method="POST">
    <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
				<label class="label-input100" for="phone">Weight</label>
				<div class="wrap-input100">
					<input class="input100" type="number" name="Weight" value="<?php echo $weight?>">
					<span class="focus-input100"></span>
				</div>
				
				<label class="label-input100" for="phone">Height</label>
				<div class="wrap-input100">
					<input class="input100" type="number" name="Height" value="<?php echo $height?>">
					<span class="focus-input100"></span>
				</div>
				
				<label class="label-input100" for="phone">Temperature</label>
				<div class="wrap-input100">
					<input class="input100" type="number" name="Temperature" value="<?php echo $temp?>">
					<span class="focus-input100"></span>
				</div>
				
				<label class="label-input100" for="phone">BloodPressure</label>
				<div class="wrap-input100">
					<input class="input100" type="number" name="BloodPressure" value="<?php echo $bp?>">
					<span class="focus-input100"></span>
				</div>
				
				<label class="label-input100" for="phone">Pulserate</label>
				<div class="wrap-input100">
					<input class="input100" type="number" name="Pulserate" value="<?php echo $pulse?>">
					<span class="focus-input100"></span>
				</div>
				<input type="hidden" name="id" value="<?php print $row['id'];?>">
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						UPDATE
					</button>
				</div>
			</form>
<?php } ?>

</body>
</html>