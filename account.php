<?php
   include('session.php');?>
<html>
<head>
<style>
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
.text-block1 {
  background-color: #ddd;
  color: green;
  padding-left: 40px;
  height:50px
}
.avatar {
 display: block;
  margin-left: auto;
  margin-right: auto;
  width: 300px;
  height: 300px;
  border-radius: 50%;
}
</style>
</head>
<body>
<?PHP
if($user_pos == "Admin"){
$result = mysqli_query($db,"SELECT * FROM admin where username = '$login_session'");
$row = mysqli_fetch_assoc($result)?>
<div class="container">
  <div class="text-block">
    <h1 style="padding:20px; text-align:center;">ID : <?php print $row['id'];?></h1>
  </div>
</div>
<img src="images/avatar.jpg" alt="Avatar" class="avatar">
 <div class="container">
  <div class="text-block1">
    <h4 style="padding:20px;">Username : <?php print $row['username'];?></h4>
  </div>
</div>
<div class="container">
  <div class="text-block1">
    <h4 style="padding:20px;">Password : <?php print $row['password'];?></h4>
  </div>
</div>
 <?PHP
 }?>
 
 <?PHP
if($user_pos == "Doctor"){
$result = mysqli_query($db,"SELECT * FROM doctor where username = '$login_session'");
$row = mysqli_fetch_assoc($result)?>
<div class="container">
  <div class="text-block">
    <h1 style="padding:20px; text-align:center;">ID : <?php print $row['id'];?></h1>
  </div>
</div>
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
 <div class="container">
  <div class="text-block1">
    <h4 style="padding:20px;">Doctor certificate : <?php print $row['File'];?><br></h4>
  </div>
</div>
 <div class="container">
  <div class="text-block1">
    <h4 style="padding:20px;">Specialization : <?php print $row['Specialization'];?><br></h4>
  </div>
</div>
 <div class="container">
  <div class="text-block1">
    <h4 style="padding:20px;">Username : <?php print $row['username'];?></h4>
  </div>
</div>
 <div class="container">
  <div class="text-block1">
    <h4 style="padding:20px;">Password : <?php print $row['password'];?></h4>
  </div>
</div>
 <?PHP
 }?>
 
 <?PHP
if($user_pos == "Patient"){
$result = mysqli_query($db,"SELECT * FROM patient where username = '$login_session'");
$row = mysqli_fetch_assoc($result)?>
<div class="container">
  <div class="text-block">
    <h1 style="padding:20px; text-align:center;">ID : <?php print $row['id'];?></h1>
  </div>
</div>
<img src="images/avatar.jpg" alt="Avatar" class="avatar">
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
 <div class="container">
  <div class="text-block1">
    <h4 style="padding:20px;">Username : <?php print $row['username'];?></h4>
  </div>
</div>
 <div class="container">
  <div class="text-block1">
    <h4 style="padding:20px;">Password : <?php print $row['password'];?></h4>
  </div>
</div>
 <?PHP
 }?>
</body>
</html>