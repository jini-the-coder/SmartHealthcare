<?php
   include('config.php');
?>
<?php
$message = $_POST['message'];
$result=mysqli_query($db,"INSERT INTO notice VALUES ('','$message')");
header("location: editnoticeboard.php");
?>