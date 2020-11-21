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
    <p>Registered Successfuly</p>
	<button id="myBtn1">OK</button>
  </div>

</div>

<div id="myModal2" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p> Patient Registered unSuccessfuly</p>
	<button id="myBtn2">OK</button>
  </div>

</div>

<div id="myModal3" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p> Doctor Registered unSuccessfuly</p>
	<button id="myBtn3">OK</button>
  </div>

</div>

<script>
// Get the modal
var modal1 = document.getElementById("myModal1");
var modal2 = document.getElementById("myModal2");
var modal3 = document.getElementById("myModal3");
var btn1 = document.getElementById("myBtn1");
var btn2 = document.getElementById("myBtn2");
var btn3 = document.getElementById("myBtn3");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal1.style.display = "none";
  modal2.style.display = "none";
  modal3.style.display = "none";
}
btn1.onclick = function() {
  window.location.href = "indexing.php";
}
btn2.onclick = function() {
  window.location.href = "patientreg.php";
}
btn3.onclick = function() {
  window.location.href = "doctorreg.php";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal1.style.display = "none";
	modal2.style.display = "none";
	modal3.style.display = "none";
  }
}
</script>

</body>

<?php
   include('config.php');?>
<?PHP
	$pos=$_GET['edit'];
	$fname=$_POST['Fname'];
	$lname=$_POST['Lname'];
	$email=$_POST['Email'];
	$contactno=$_POST['Contactno'];
	$location=$_POST['Location'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	if($pos=="patient"){
		    $sdetail="INSERT INTO medical VALUES ('','$username',0,0,0,0,0)";
			$result1=mysqli_query($db,$sdetail);
	        $sdetail="INSERT INTO patient VALUES ('','$fname','$lname','$email',$contactno,'$location','$username','$password')";
			$result1=mysqli_query($db,$sdetail);
		if($result1){
		echo "<script>modal1.style.display = 'block';</script>";
	}
	else{
	echo "<script>modal2.style.display = 'block'</script>";
	}	
	}
	//Doctor
	else{
	$filename=basename($_FILES["fileToUpload"]["name"]);
	echo $filename;
	$file=implode("",$_FILES['fileToUpload']);
	$spec=$_POST['specialization'];
	$status="Pending";
	
	$target_dir = "uploads/";
	$uploadOk = 1;
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
		} else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000) {
		echo "Sorry, your file is too large.";
		$uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
    echo "Sorry, only PNG  files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
	$sdetail="INSERT INTO doctor VALUES ('','$fname','$lname','$email',$contactno,'$location','$filename','$spec','$status','$username','$password')";
	$result1=mysqli_query($db,$sdetail);
	$last_id = mysqli_insert_id($db);
	$tmp = explode(".", $filename);
	  $extension=end($tmp);
    $newfilename=$last_id.".".$extension;
    $target_file = $target_dir . $newfilename;
   if($result1){
		echo "<script>modal1.style.display = 'block'</script>";
	}
	else{
	echo "<script>modal3.style.display = 'block'</script>";
	
	}
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
	
	}
	
?>
</html>