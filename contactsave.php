<?php
   include('config.php');
?>
<?php
$name = $_POST['name'];
$message = $_POST['subject'];
$result=mysqli_query($db,"INSERT INTO reviews VALUES ('','$name','$message')");
header("location: contact.php");
?>