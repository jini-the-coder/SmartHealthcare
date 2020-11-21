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
</style>
</head>
<body>
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'About')" id="defaultOpen">About Admin</button>
  <button class="tablinks" onclick="openCity(event, 'Account')">My Account</button>
  <button class="tablinks" onclick="openCity(event, 'Update')">Update Account</button>
  <button class="tablinks" onclick="openCity(event, 'View')">View PatientCount</button>
  <button class="tablinks" onclick="openCity(event, 'Allow')">Allow Doctor</button>
  <button class="tablinks" onclick="openCity(event, 'Notify')">Notify Higher Authority</button>
  <button class="tablinks" onclick="openCity(event, 'Send')">Send Alert Message</button>
  <button class="tablinks" onclick="openCity(event, 'Edit')">Edit Noticeboard</button>
</div>

<div id="About" class="tabcontent">
   <h1>Admin</h1>
  <p>A person who takes the control of whole website.</p><hr>
  <h3>Funtions assigned :</h3><br>
  <ol>
  <li>Ability to view patient count in a locality</li><br>
  <li>Allow doctor to access facility provided by website</li><br>
  <li>If any outbreak is predicted can notify higher authority to take required actions.</li><br>
  <li>Gets a platform to communicate via noticeboard in website</li><br>
  </ol>
</div>

<div id="Account" class="tabcontent">
   <iframe src="account.php" class="frame"></iframe>
</div>

<div id="Update" class="tabcontent">
  <iframe src="update.php" class="frame"></iframe>
</div>

<div id="View" class="tabcontent">
  <iframe src="viewcount.php" class="frame"></iframe>
</div>

<div id="Allow" class="tabcontent">
  <iframe src="allowdoctor.php" class="frame"></iframe>
</div>

<div id="Notify" class="tabcontent">
  <iframe src="mail.php" class="frame"></iframe>
</div>

<div id="Send" class="tabcontent">
  <iframe src="sms.php" class="frame"></iframe>
</div>

<div id="Edit" class="tabcontent">
  <iframe src="editnoticeboard.php" class="frame"></iframe>
</div>

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
