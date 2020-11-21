<?php
   include('session.php');
   $result = mysqli_query($db,"SELECT * FROM patient where username = '$login_session'");
   $row = mysqli_fetch_assoc($result);
   $pid=$row['id'];
   $pname=$row['username'];
   $results = mysqli_query($db,"SELECT * FROM book where Patientname = '$login_session'");
   if($results){
   $rows = mysqli_fetch_assoc($results);
   if($rows['Status']=="Booked"){
	   echo "Already booked";
   }
   
   else{ 
   $did=$_POST['doctorid'];
   $dname=$_POST['doctorname'];
   $disease=$_POST['disease'];
   $location=$_POST['location'];
   $status="Booked";
   $sdetail="INSERT INTO book VALUES ('',$did,'$dname',$pid,'$pname','$disease','$location','$status')";
	$result1=mysqli_query($db,$sdetail);
   if($result1){echo "Booked Successfully";}}}
   
   else{
   $did=$_POST['doctorid'];
   $dname=$_POST['doctorname'];
   $disease=$_POST['disease'];
   $location=$_POST['location'];
   $status="Booked";
   $sdetail="INSERT INTO book VALUES ('',$did,'$dname',$pid,'$pname','$disease','$location','$status')";
	$result1=mysqli_query($db,$sdetail);
   if($result1){echo "Booked Successfully";}}
?>