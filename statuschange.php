<?php include('config.php')?>

<?php
 if (isset($_POST['transaction']))
   {
	$newName = $_POST['transaction'];
	$id= $_GET['edit'];
	$oldName = $_POST['trans'];
	$file = $_POST['file'];
	if($newName=="Decline")
      {
		unlink($file);  
	$sdetails ="DELETE FROM doctor WHERE  id=$id";
	$resu=mysqli_query($db,$sdetails);
	if($resu){echo "Success";}
      }
    else if($oldName!=$newName)
      {
	$sdetails ="UPDATE doctor SET Status='$newName' WHERE  id=$id";
	$resu=mysqli_query($db,$sdetails);
	if($resu){echo "Success";}
      }
	header("refresh:1;url=allowdoctor.php");  
   }
   ?>