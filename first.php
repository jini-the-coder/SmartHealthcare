<?php
   include('session.php');
   
   if($user_pos == "Admin"){
   header("location:adminwelcome.php");
   }
   
   if($user_pos == "Doctor"){
   header("location:doctorwelcome.php");
   }
   
   if($user_pos == "Patient"){
   header("location:patientwelcome.php");
   } 
?>