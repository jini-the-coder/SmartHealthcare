<?php
   include('config.php');
   $id=0;
   $name="";
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$id= $_POST['id'];
	$name= $_POST['name'];
   }?>

<html>
<head>
<style>
.container {
  position: relative;
  font-family: Arial;
}

.text-block {
  border: 2px solid red;
  padding-left: 20px;
  height:60px;
}
.text-block1 {
  background-color: #ddd;
  color: green;
  padding-left: 40px;
  height:50px;
}
.avatar {
 display: block;
  margin-left: auto;
  margin-right: auto;
  width: 300px;
  height: 300px;
  border-radius: 50%;
}
.btn{
  background-color: green; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
input[type=text] {
  margin: 4px 2px;
  height:50px;
  background-color: #ddd;
  text-align: center;
  text-size:20px;
}
</style>
</head>
<body>
  <div class="text-block">
  <form action="" method="POST">
    <input type="text" name="id" style="width:150px;" placeholder="Enter patient's id">
	<input type="text" name="name" style="width:400px;" placeholder="Enter patient's username">
   <button type="submit" class="btn">View</button>
  </form>
  </div>
 <?PHP
$result = mysqli_query($db,"SELECT * FROM patient where id ='$id' and username='$name'");
$row = mysqli_fetch_assoc($result)?>
<img src="images/avatar.jpg" alt="Avatar" class="avatar">
<div class="container">
<div class="text-block1">
    <h4 style="padding:20px;">First name : <?php print $row['Firstname'];?></h4>
  </div>
</div>
 <div class="container">
  <div class="text-block1">
    <h4 style="padding:20px;">Last name : <?php print $row['Lastname'];?></h4>
  </div>
</div>
 <div class="container">
  <div class="text-block1">
    <h4 style="padding:20px;">Email : <?php print $row['Email'];?></h4>
  </div>
</div>
 <div class="container">
  <div class="text-block1">
    <h4 style="padding:20px;">Contact no : <?php print $row['Contactno'];?></h4>
  </div>
</div>
 <div class="container">
  <div class="text-block1">
    <h4 style="padding:20px;">Location : <?php print $row['Location'];?></h4>
  </div>
</div>
 <?PHP
 $result = mysqli_query($db,"SELECT * FROM medical where id = '$id'");
$row = mysqli_fetch_assoc($result)?>
<div class="text-block1">
    <h4 style="padding:20px;">Weight : <?php print $row['Weight'];?></h4>
  </div>
</div>
 <div class="container">
  <div class="text-block1">
    <h4 style="padding:20px;">Height : <?php print $row['Height'];?></h4>
  </div>
</div>
 <div class="container">
  <div class="text-block1">
    <h4 style="padding:20px;">Temperature : <?php print $row['Temperature'];?></h4>
  </div>
</div>
 <div class="container">
  <div class="text-block1">
    <h4 style="padding:20px;">Blood pressure : <?php print $row['BloodPressure'];?></h4>
  </div>
</div>
 <div class="container">
  <div class="text-block1">
    <h4 style="padding:20px;">Pulse rate : <?php print $row['Pulserate'];?></h4>
  </div>
</div>
</body>
</html>