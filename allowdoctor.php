<?php include('config.php')?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
  padding: 20px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 10px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  display: none; /* Hide all elements by default */
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
.but{
background-color:lightblue;
border: none;
color: white;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 20px;
cursor: pointer;	
width:100%;
height:50px;
}
.overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  margin-top: 60px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 10px;
  right: 35px;
  font-size: 30px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}
</style>
</head>
<body>

<div class="main">

<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')">All</button>
  <button class="btn" onclick="filterSelection('General Physician')">Physician</button>
  <button class="btn" onclick="filterSelection('Cardiologist')">Cardio</button>
  <button class="btn" onclick="filterSelection('Diabetologist')">Diabeto</button>
  <button class="btn" onclick="filterSelection('Dermatologist')">Dermato</button>
  <button class="btn" onclick="filterSelection('Orthopaedist')">Ortho</button>
  <button class="btn" onclick="filterSelection('Pulmonologist')">Pulmono</button>
  <button class="btn" onclick="filterSelection('Gastroenterologist')">Gastroentero</button>
  <button class="btn" onclick="filterSelection('Endocrinologist')">Endocrino</button>
  <button class="btn" onclick="filterSelection('Neurologist')">Neuro</button>
  <button class="btn" onclick="filterSelection('Hepatologist')">Hepato</button>
  <button class="btn" onclick="filterSelection('Physiotherapist')">Physio</button>
  <button class="btn" onclick="filterSelection('Vascular Surgeon')">Vascu</button>
  <button class="btn" onclick="filterSelection('Gynaec')">Gynaec</button>
  <button class="btn" onclick="filterSelection('ENT')">ENT</button>
  <button class="btn" onclick="filterSelection('Urologist')">Uro</button>
</div>

<?php
function writeMsg($status,$id,$file) {
	if($status == "Pending"){
	  echo "<form action=statuschange.php?edit=$id method=post>
  <select name=transaction>
  <option value='".$status."'>".$status."</option>
	<option value='Allow'>Allow</option>
	<option value='Decline'>Decline</option>
	</select>
  <input type=hidden name=trans value='".$status."'>
  <input type=hidden name=file value='".$file."'>
  <input type=submit value=Change>
  </form>";
	   }
	    if($status == "Allow"){
	  echo "<form action=statuschange.php?edit=$id method=post>
  <select name=transaction>
  <option value='".$status."'>".$status."</option>
	<option value='Decline'>Decline</option>
	</select>
  <input type=hidden name=trans value='".$status."'>
  <input type=hidden name=file value='".$file."'>
  <input type=submit value=Change>
  </form>";
	   }
    
}
?>

<?php
$result = mysqli_query($db,"SELECT * FROM doctor");
while($row = mysqli_fetch_array($result))
{?>
<!-- Portfolio Gallery Grid -->
<div class="row">
<?php if($row['Specialization']=="General Physician"){?>
  <div class="column General Physician">
    <div class="content">
      <h4><?php echo $row['Firstname']?></h4><hr>
	  <p>Doctor Certificate :</p>
      <?php $tmp = explode(".", $row['File']);
	  $extension=end($tmp);
      $newfilename="uploads/".$row['id'].".".$extension;?>
	  <div id="myNav" class="overlay">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<div class="overlay-content">
	   <img src="<?php echo $newfilename ?>" style="max-width:100% max-height:100%">
	</div>
	</div>
	<button class="but" onclick="openNav()">open</button><br><hr>
	<p>Status :</p>
	  <?php writeMsg($row['Status'],$row['id'],$newfilename);?>
    </div>
  </div>
<?php }?>
<?php if($row['Specialization']=="Cardiologist"){?>
  <div class="column Cardiologist">
    <div class="content">
      <h4><?php echo $row['Firstname']?></h4><hr>
	  <p>Doctor Certificate :</p>
      <?php $tmp = explode(".", $row['File']);
	  $extension=end($tmp);
      $newfilename="uploads/".$row['id'].".".$extension;?>
	  <div id="myNav" class="overlay">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<div class="overlay-content">
	   <img src="<?php echo $newfilename ?>" style="max-width:100% max-height:100%">
	</div>
	</div>
	<button class="but" onclick="openNav()">open</button><br><hr>
	<p>Status :</p>
	  <?php writeMsg($row['Status'],$row['id'],$newfilename);?>
    </div>
  </div>
  <?php }?>
  <?php if($row['Specialization']=="Diabetologist"){?>
  <div class="column Diabetologist">
    <div class="content">
      <h4><?php echo $row['Firstname']?></h4><hr>
	  <p>Doctor Certificate :</p>
      <?php $tmp = explode(".", $row['File']);
	  $extension=end($tmp);
      $newfilename="uploads/".$row['id'].".".$extension;?>
	  <div id="myNav" class="overlay">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<div class="overlay-content">
	   <img src="<?php echo $newfilename ?>" style="max-width:100% max-height:100%">
	</div>
	</div>
	<button class="but" onclick="openNav()">open</button><br><hr>
	<p>Status :</p>
	  <?php writeMsg($row['Status'],$row['id'],$newfilename);?>
    </div>
  </div>
  <?php }?>
  <?php if($row['Specialization']=="Dermatologist"){?>
  <div class="column Dermatologist">
    <div class="content">
      <h4><?php echo $row['Firstname']?></h4><hr>
	  <p>Doctor Certificate :</p>
      <?php $tmp = explode(".", $row['File']);
	  $extension=end($tmp);
      $newfilename="uploads/".$row['id'].".".$extension;?>
	  <div id="myNav" class="overlay">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<div class="overlay-content">
	   <img src="<?php echo $newfilename ?>" style="max-width:100% max-height:100%">
	</div>
	</div>
	<button class="but" onclick="openNav()">open</button><br><hr>
	<p>Status :</p>
	 <?php writeMsg($row['Status'],$row['id'],$newfilename);?>
    </div>
  </div>
  <?php }?>
  <?php if($row['Specialization']=="Orthopaedist"){?>
  <div class="column Orthopaedist">
    <div class="content">
      <h4><?php echo $row['Firstname']?></h4><hr>
      <p>Doctor Certificate :</p>
      <?php $tmp = explode(".", $row['File']);
	  $extension=end($tmp);
      $newfilename="uploads/".$row['id'].".".$extension;?>
	  <div id="myNav" class="overlay">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<div class="overlay-content">
	   <img src="<?php echo $newfilename ?>" style="max-width:100% max-height:100%">
	</div>
	</div>
	<button class="but" onclick="openNav()">open</button><br><hr>
	<p>Status :</p>
	  <?php writeMsg($row['Status'],$row['id'],$newfilename);?>
    </div>
  </div>
  <?php }?>
  <?php if($row['Specialization']=="Pulmonologist"){?>
  <div class="column Pulmonologist">
    <div class="content">
     <h4><?php echo $row['Firstname']?></h4><hr>
      <p>Doctor Certificate :</p>
      <?php $tmp = explode(".", $row['File']);
	  $extension=end($tmp);
      $newfilename="uploads/".$row['id'].".".$extension;?>
	  <div id="myNav" class="overlay">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<div class="overlay-content">
	   <img src="<?php echo $newfilename ?>" style="max-width:100% max-height:100%">
	</div>
	</div>
	<button class="but" onclick="openNav()">open</button><br><hr>
	<p>Status :</p>
	  <?php writeMsg($row['Status'],$row['id'],$newfilename);?>
	  </div>
  </div>
  <?php }?>
<?php if($row['Specialization']=="Gastroenterologist"){?>
  <div class="column Gastroenterologist">
    <div class="content">
      <h4><?php echo $row['Firstname']?></h4><hr>
      <p>Doctor Certificate :</p>
      <?php $tmp = explode(".", $row['File']);
	  $extension=end($tmp);
      $newfilename="uploads/".$row['id'].".".$extension;?>
	  <div id="myNav" class="overlay">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<div class="overlay-content">
	   <img src="<?php echo $newfilename ?>" style="max-width:100% max-height:100%">
	</div>
	</div>
	<button class="but" onclick="openNav()">open</button><br><hr>
	<p>Status :</p>
	  <?php writeMsg($row['Status'],$row['id'],$newfilename);?>
    </div>
  </div>
  <?php }?>
  <?php if($row['Specialization']=="Endocrinologist"){?>
  <div class="column Endocrinologist">
    <div class="content">
      <h4><?php echo $row['Firstname']?></h4><hr>
      <p>Doctor Certificate :</p>
      <?php $tmp = explode(".", $row['File']);
	  $extension=end($tmp);
      $newfilename="uploads/".$row['id'].".".$extension;?>
	  <div id="myNav" class="overlay">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<div class="overlay-content">
	   <img src="<?php echo $newfilename ?>" style="max-width:100% max-height:100%">
	</div>
	</div>
	<button class="but" onclick="openNav()">open</button><br><hr>
	<p>Status :</p>
	  <?php writeMsg($row['Status'],$row['id'],$newfilename);?>
    </div>
  </div>
  <?php }?>
  <?php if($row['Specialization']=="Neurologist"){?>
  <div class="column Neurologist">
    <div class="content">
      <h4><?php echo $row['Firstname']?></h4><hr>
      <p>Doctor Certificate :</p>
      <?php $tmp = explode(".", $row['File']);
	  $extension=end($tmp);
      $newfilename="uploads/".$row['id'].".".$extension;?>
	  <div id="myNav" class="overlay">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<div class="overlay-content">
	   <img src="<?php echo $newfilename ?>" style="max-width:100% max-height:100%">
	</div>
	</div>
	<button class="but" onclick="openNav()">open</button><br><hr>
	<p>Status :</p>
	  <?phpwriteMsg($row['Status'],$row['id'],$newfilename);?>
    </div>
  </div>
  <?php }?>
  <?php if($row['Specialization']=="Hepatologist"){?>
  <div class="column Hepatologist">
    <div class="content">
      <h4><?php echo $row['Firstname']?></h4><hr>
      <p>Doctor Certificate :</p>
      <?php $tmp = explode(".", $row['File']);
	  $extension=end($tmp);
      $newfilename="uploads/".$row['id'].".".$extension;?>
	  <div id="myNav" class="overlay">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<div class="overlay-content">
	   <img src="<?php echo $newfilename ?>" style="max-width:100% max-height:100%">
	</div>
	</div>
	<button class="but" onclick="openNav()">open</button><br><hr>
	<p>Status :</p>
	  <?php writeMsg($row['Status'],$row['id'],$newfilename);?>
    </div>
  </div>
  <?php }?>
  <?php if($row['Specialization']=="Physiotherapist"){?>
  <div class="column Physiotherapist">
    <div class="content">
      <h4><?php echo $row['Firstname']?></h4><hr>
      <p>Doctor Certificate :</p>
      <?php $tmp = explode(".", $row['File']);
	  $extension=end($tmp);
      $newfilename="uploads/".$row['id'].".".$extension;?>
	  <div id="myNav" class="overlay">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<div class="overlay-content">
	   <img src="<?php echo $newfilename ?>" style="max-width:100% max-height:100%">
	</div>
	</div>
	<button class="but" onclick="openNav()">open</button><br><hr>
	<p>Status :</p>
	  <?php writeMsg($row['Status'],$row['id'],$newfilename);?>
    </div>
  </div>
  <?php }?>
  <?php if($row['Specialization']=="Vascular Surgeon"){?>
  <div class="column Vascular Surgeon">
    <div class="content">
      <h4><?php echo $row['Firstname']?></h4><hr>
      <p>Doctor Certificate :</p>
      <?php $tmp = explode(".", $row['File']);
	  $extension=end($tmp);
      $newfilename="uploads/".$row['id'].".".$extension;?>
	  <div id="myNav" class="overlay">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<div class="overlay-content">
	   <img src="<?php echo $newfilename ?>" style="max-width:100% max-height:100%">
	</div>
	</div>
	<button class="but" onclick="openNav()">open</button><br><hr>
	<p>Status :</p>
	  <?php writeMsg($row['Status'],$row['id'],$newfilename);?>
    </div>
  </div>
  <?php }?>
  <?php if($row['Specialization']=="Gynaec"){?>
  <div class="column Gynaec">
    <div class="content">
      <h4><?php echo $row['Firstname']?></h4><hr>
      <p>Doctor Certificate :</p>
      <?php $tmp = explode(".", $row['File']);
	  $extension=end($tmp);
      $newfilename="uploads/".$row['id'].".".$extension;?>
	  <div id="myNav" class="overlay">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<div class="overlay-content">
	   <img src="<?php echo $newfilename ?>" style="max-width:100% max-height:100%">
	</div>
	</div>
	<button class="but" onclick="openNav()">open</button><br><hr>
	<p>Status :</p>
	  <?php writeMsg($row['Status'],$row['id'],$newfilename);?>
    </div>
  </div>
  <?php }?>
  <?php if($row['Specialization']=="ENT"){?>
  <div class="column ENT">
    <div class="content">
      <h4><?php echo $row['Firstname']?></h4><hr>
      <p>Doctor Certificate :</p>
      <?php $tmp = explode(".", $row['File']);
	  $extension=end($tmp);
      $newfilename="uploads/".$row['id'].".".$extension;?>
	  <div id="myNav" class="overlay">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<div class="overlay-content">
	   <img src="<?php echo $newfilename ?>" style="max-width:100% max-height:100%">
	</div>
	</div>
	<button class="but" onclick="openNav()">open</button><br><hr>
	<p>Status :</p>
	  <?php writeMsg($row['Status'],$row['id'],$newfilename);?>
    </div>
  </div>
  <?php }?>
  <?php if($row['Specialization']=="Urologist"){?>
  <div class="column Urologist">
    <div class="content">
      <h4><?php echo $row['Firstname']?></h4><hr>
     <p>Doctor Certificate :</p>
      <?php $tmp = explode(".", $row['File']);
	  $extension=end($tmp);
      $newfilename="uploads/".$row['id'].".".$extension;?>
	  <div id="myNav" class="overlay">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<div class="overlay-content">
	   <img src="<?php echo $newfilename ?>" style="max-width:100% max-height:100%">
	</div>
	</div>
	<button class="but" onclick="openNav()">open</button><br><hr>
	<p>Status :</p>
	  <?php writeMsg($row['Status'],$row['id'],$newfilename);?>
    </div>
  </div>
  <?php }?>
<!-- END GRID -->
</div>
<?php }?>
<!-- END MAIN -->
</div>

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>

</body>
</html>
