<?php
   include('config.php');
?>
<?php
$id= $_GET['edit'];
$result=mysqli_query($db,"DELETE FROM notice WHERE Id=$id");
header("location: editnoticeboard.php");
?>