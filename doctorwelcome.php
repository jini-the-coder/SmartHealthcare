<?php
   include('welcomeheader.php');
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
  float: left;
  background-color: #f1f1f1;
  width: 25%;
  height: 300px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: green;
  color: white;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding-left:10px;
  padding-right:5px;
  width: 75%;
}
.frame{
	height : 100%;
	width :100%
}
.pend{
  align:center;
  background-color: lightgrey;
  width: 100%;
  border: 15px solid green;
  padding: 100px;
  color:red;
  text-align: center;
}
</style>
</head>
<body>
<?php 
$result = mysqli_query($db,"SELECT * FROM doctor where username = '$login_session'");
$row = mysqli_fetch_assoc($result);
if($row['Status'] == "Pending"){
	echo "<br><br><div class='pend'><h1>OPPS!! PENDING</h1></div>";
}
else{
?>
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'About')" id="defaultOpen">About Doctor</button>
  <button class="tablinks" onclick="openCity(event, 'Account')">My Account</button>
  <button class="tablinks" onclick="openCity(event, 'Update')">Update Account</button>
  <button class="tablinks" onclick="openCity(event, 'View')">View My Patients</button>
  <button class="tablinks" onclick="openCity(event, 'Check')">Check Patient Details</button>
</div>

<div id="About" class="tabcontent">
    <h1>Doctor</h1>
  <p>A person who can get additional features of website.</p><hr>
  <h3>Funtions assigned :</h3><br>
  <ol>
  <li>Ability to view their patient count.</li><br>
  <li>Can get medical details of patient under them. </li><br>
  </ol>
</div>

<div id="Account" class="tabcontent">
   <iframe src="account.php" class="frame"></iframe>
</div>

<div id="Update" class="tabcontent">
  <iframe src="update.php" class="frame"></iframe>
</div>

<div id="View" class="tabcontent">
  <iframe src="viewpatients.php" class="frame"></iframe>
</div>

<div id="Check" class="tabcontent">
  <iframe src="checkpatients.php" class="frame"></iframe>
</div>
<?php } ?>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   
</body>
</html> 
