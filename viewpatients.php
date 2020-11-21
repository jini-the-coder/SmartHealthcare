<?php
   include('session.php');
   if($_SERVER["REQUEST_METHOD"] == "POST") {
	   $newName = $_POST['transaction'];
	   $oldName = $_POST['trans'];
	   $id = $_POST['id'];
	   if($oldName!=$newName){
		$sdetails ="DELETE FROM book WHERE  id=$id";
		$resu=mysqli_query($db,$sdetails); 
	   }
   }
   ?>
<html>
<head>
<style>
body, html {
    background-image: url("patientbackground.jpg");
}
table , th,td{border:1.5px solid darkblue ; border-collapse:collapse}
th{height:50px ; color:darkblue; font-size:20px ; width:60px}
h1{color:blue;}
table{width:100%}
</style>
</head>
<body>
<h1>PATIENT DETAILS :</h1>
<?PHP
	$result = mysqli_query($db,"SELECT * FROM book where Doctorname='$login_session'");
?>
<table border="1">
<tr>
<th>Id</th>
<th>Username</th>
<th>Disease</th>
<th>Location</th>
<th>Status</th>
<?PHP
while($row = mysqli_fetch_assoc($result)) 
{?>
<tr>
<td>
  <?php print $row['Patientid'];
		?>
 </td>
 <td>
  <?php print $row['Patientname'];
		?>
 </td>
 <td>
  <?php print $row['Disease'];
		?>
 </td>
 <td>
  <?php print $row['Location'];
		?>
 </td>
 <td>
  <?php 
  if($row['Status'] == "Booked"){?>
	 <form action="" class="container" method="POST">
  <select name="transaction">
  <option value='<?php echo $row['Status'];?>'><?php echo $row['Status'];?></option>
	<option value='Checked'>Checked</option>
	</select>
 <input type="hidden" name="trans" value='<?php echo $row['Status'];?>'>
 <input type="hidden" name="id" value='<?php echo $row['id'];?>'>
  <input type="submit" value="Change">
  </form>
	 <?php  }
		?>
 </td>
 </tr>
 <?PHP
 }?>
</table>
</body>
</html>