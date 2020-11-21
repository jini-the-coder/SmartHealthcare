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
  <button class="tablinks" onclick="openCity(event, 'About')" id="defaultOpen">About Patient</button>
  <button class="tablinks" onclick="openCity(event, 'Account')">My Account</button>
  <button class="tablinks" onclick="openCity(event, 'Update')">Update Account</button>
  <button class="tablinks" onclick="openCity(event, 'Details')">My Medical details</button>
  <button class="tablinks" onclick="openCity(event, 'Predict')">Predict Disease</button>
  <button class="tablinks" onclick="openCity(event, 'Test')">Pathological test</button>
  <button class="tablinks" onclick="openCity(event, 'Book')">Book Doctor</button>
</div>

<div id="About" class="tabcontent">
    <h1>Patient</h1>
  <p>A person who can access the facilities provided by website.</p><hr>
  <h3>Funtions assigned :</h3><br>
  <ol>
  <li>By entering the symptoms, a patient can get the disease name that he/she maybe suffering.</li><br>
  <li>The required pathological test for any particular disease is also available.</li><br>
  <li>A patient can enter their medical details which can be viewed by the doctor you are consulting by giving your id.</li><br>
  <li>A patient can also book a doctor and view doctors near a particular location and can book a slot.</li><br>
  </ol>
</div>

<div id="Account" class="tabcontent">
   <iframe src="account.php" class="frame"></iframe>
</div>

<div id="Update" class="tabcontent">
  <iframe src="update.php" class="frame"></iframe>
</div>

<div id="Details" class="tabcontent">
  <iframe src="details.php" class="frame"></iframe>
</div>

<div id="Predict" class="tabcontent">
  <iframe src="prediction.html" class="frame"></iframe>
</div>

<div id="Test" class="tabcontent">
  <iframe src="patho.php" class="frame"></iframe>
</div>

<div id="Book" class="tabcontent">
  <iframe src="bookdoctor.php" class="frame"></iframe>
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
