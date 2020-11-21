<?php
   include('session.php');?>
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
	$result = mysqli_query($db,"SELECT * FROM book");
    $kerala=0;
	$maha=0;
?>
<table border="1">
<tr>
<th>Doctor Id</th>
<th>Doctor username</th>
<th>Patient Id</th>
<th>Patient username</th>
<th>Disease</th>
<th>Location</th>
<th>Status</th>
<?PHP
while($row = mysqli_fetch_assoc($result)) 
{?>
<tr>
<td>
  <?php print $row['Doctorid'];
		?>
 </td>
 <td>
  <?php print $row['Doctorname'];
		?>
 </td>
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
        if($row['Location']=="KERALA"){
			$kerala=$kerala+1;
		}
		else{
			$maha=$maha+1;
		}
		?>
 </td>
 <td>
  <?php print $row['Status'];
		?>
 </td>
 </tr>
 <?PHP
 }?>
</table>
<h3>Location</h3> 
 Kerala : <?php print $kerala;?><br>
 Maharashtra : <?php print $maha;?>
</body>
</html>