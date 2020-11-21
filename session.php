<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   $user_pos = $_SESSION['pos'];
   
   if($user_pos == "Admin"){
   $ses_sql = mysqli_query($db,"select username from admin where username = '$user_check' ");
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   }
   
   if($user_pos == "Doctor"){
   $ses_sql = mysqli_query($db,"select username from doctor where username = '$user_check' ");
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   }
   
   if($user_pos == "Patient"){
   $ses_sql = mysqli_query($db,"select username from patient where username = '$user_check' ");
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   }
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:indexing.php");
      die();
   }
?>