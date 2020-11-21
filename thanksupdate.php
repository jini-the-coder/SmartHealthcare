<?php
   include('session.php');?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>
<body>

<img src="images/crowd.jpg" style="width:100%">
<!-- The Modal -->
<div id="myModal1" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Updated Successfuly</p>
	<p>RE login using new credentials</p>
  </div>

</div>

<div id="myModal2" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Updated unSuccessfuly</p>
  </div>

</div>

</div>

<script>
// Get the modal
var modal1 = document.getElementById("myModal1");
var modal2 = document.getElementById("myModal2");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal1.style.display = "none";
  modal2.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal1.style.display = "none";
	modal2.style.display = "none";
  }
}
</script>

</body>

<?PHP
    $pos = $user_pos;
	$id = $_GET['edit'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	if($pos=="Admin"){
	$sdetail="UPDATE admin SET username = '$username', password = '$password' WHERE id = '$id'";
	$result1=mysqli_query($db,$sdetail);
	if($result1){
		echo "<script>modal1.style.display = 'block';</script>";
	}
	else{
		echo "<script>modal2.style.display = 'block'</script>";
	}	
	}
	
	if($pos=="Patient"){
	$fname=$_POST['Fname'];
	$lname=$_POST['Lname'];
	$email=$_POST['Email'];
	$contactno=$_POST['Contactno'];
	$location=$_POST['Location'];
	$sdetail="UPDATE patient SET Firstname = '$fname', Lastname='$lname',Email='$email',Contactno=$contactno,Location='$location',username = '$username', password = '$password' WHERE id = '$id'";
	$result1=mysqli_query($db,$sdetail);
	if($result1){
		echo "<script>modal1.style.display = 'block';</script>";
	}
	else{
		echo "<script>modal2.style.display = 'block'</script>";
	}	
	}
	
	if($pos=="Doctor"){
		$fname=$_POST['Fname'];
	$lname=$_POST['Lname'];
	$email=$_POST['Email'];
	$contactno=$_POST['Contactno'];
	$location=$_POST['Location'];
	
	$sdetail="UPDATE doctor SET Firstname = '$fname', Lastname='$lname',Email='$email',Contactno=$contactno,Location='$location',username = '$username', password = '$password' WHERE id = '$id'";
	$result1=mysqli_query($db,$sdetail);
	if($result1){
		echo "<script>modal1.style.display = 'block'</script>";
	}
	else{
	echo "<script>modal2.style.display = 'block'</script>";
	
	}
	}
	
?>
</html>