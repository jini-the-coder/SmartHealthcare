<?php
   include('session.php');
   $result = mysqli_query($db,"SELECT * FROM patient where username = '$login_session'");
   $row = mysqli_fetch_assoc($result);
   $specialist="General Physician";
   $loc=$row['Location'];
   $disease="Other";
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$disease= $_POST['Disease'];
	$loc= $_POST['Location'];
	if ($disease=='hepatitis A' OR $disease=='Hepatitis B'  OR $disease=='Hepatitis C' OR $disease=='Hepatitis D' OR $disease=='Hepatitis E' OR $disease=='Alcoholic hepatitis') {
        $specialist="Hepatologist";
	} 
	elseif ($disease=='Chronic cholestasis' OR $disease=='Heartattack') {
			$specialist="Cardiologist";
	}
	elseif ($disease=='Diabetes"') {
			$specialist="Diabetologist";
	}
	elseif ($disease=='Fungal infection' OR $disease=='Allergy' OR $disease=='Acne Psoriasis Impetigo'  ) {
			$specialist="Dermatologist";
	}
	elseif ($disease=='Bronchial Asthma' OR $disease=='Tuberculosis' OR $disease=='Pneumonia') {
			$specialist="Pulmonologist";
	}
	elseif ($disease=='GERD' OR $disease=='Gastroenteritis' OR $disease=='Peptic ulcer disease') {
			$specialist="Gastroenterologist";
	}
	elseif ($disease=='Hypoglycemia') {
			$specialist="Endocrinologist";
	}
	elseif ($disease=='Migraine') {
			$specialist="Neurologist";
	}
	elseif ($disease=='Cervical spondylosis' OR $disease=='Osteoarthristis' OR $disease=='Arthritis') {
			$specialist="Orthopaedist";
	}
	elseif ($disease=='Paralysis (brain hemorrhage)') {
			$specialist="Physiotherapist";
	}
	elseif ($disease=='Varicoseveins') {
			$specialist="Vascular Surgeon";
	}
	elseif ($disease=='Hypothyroidism' OR $disease=='Hyperthyroidism') {
			$specialist="Gynaec";
	}
	elseif ($disease=='(vertigo) Paroymsal  Positional Vertigo') {
			$specialist="ENT";
	}
	elseif ($disease=='Urinary tract infection') {
			$specialist="Urologist";
	}   }?>
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
background-color: #1c87c9;
border: none;
color: white;
         padding: 20px 34px;
         text-align: center;
         text-decoration: none;
         display: inline-block;
         font-size: 20px;
         margin: 4px 2px;
         cursor: pointer;	
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 100%;
}

.container {
  background-color: lightblue;
  padding: 2px 16px;
}
.button5 {
  background-color: green; /* Green */
  border: 1px;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  width:100%;
}
</style>
</head>
<body>
<form action="" method="POST">
    <label for="email"><b>DISEASE</b></label>
	<select name="Disease" required>
	<option value="">---select---</option>
	<option value="Fungal infection">Fungal infection</option>
	<option value="hepatitis A">hepatitis A</option>
	<option value="Hepatitis B">Hepatitis B</option>
	<option value="Hepatitis C">Hepatitis C</option>
	<option value="Hepatitis D">Hepatitis D</option>
	<option value="Hepatitis E">Hepatitis E</option>
	<option value="Alcoholic hepatitis">Alcoholic hepatitis</option>
	<option value="Chronic cholestasis">Chronic cholestasis</option>
	<option value="Heartattack">Heartattack</option>
	<option value="Diabetes">Diabetes</option>
	<option value="Allergy">Allergy</option>
	<option value="Acne Psoriasis Impetigo">Acne Psoriasis Impetigo</option>
	<option value="Bronchial Asthma">Bronchial Asthma</option>
	<option value="Tuberculosis">Tuberculosis</option>
	<option value="Pneumonia">Pneumonia</option>
	<option value="GERD">GERD</option>
	<option value="Gastroenteritis">Gastroenteritis</option>
	<option value="Peptic ulcer diseae">Peptic ulcer disease</option>
	<option value="Hypoglycemia">Hypoglycemia</option>
	<option value="Migraine">Migraine</option>
	<option value="Cervical spondylosis">Cervical spondylosis</option>
	<option value="Osteoarthristis">Osteoarthristis</option>
	<option value="Arthritis">Arthritis</option>
	<option value="Paralysis (brain hemorrhage)">Paralysis (brain hemorrhage)</option>
	<option value="Varicoseveins">Varicoseveins</option>
	<option value="Hypothyroidism">Hypothyroidism</option>
	<option value="Hyperthyroidism">Hyperthyroidism</option>
	<option value="(vertigo) Paroymsal  Positional Vertigo">(vertigo) Paroymsal  Positional Vertigo</option>
	<option value="Urinary tract infection">Urinary tract infection</option>
	<option value="Other">Other</option>
	</select>
	<label for="email"><b>Location</b></label>
	<select name="Location" required>
	<option value="">---select---</option>
	<option value="MAHARASHTRA">MAHARASHTRA</option>
	<option value="KERALA">KERALA</option>
	</select>
	<button type="submit">SUGGEST</button><br><br><hr>
	<label for="psw"><b><?php echo $specialist?></b></label> :
	<label for="psw"><b><?php echo $loc?></b></label> <hr>
  </form>
 
<div class="main">

<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')">All</button>
  <button class="btn" onclick="filterSelection('near')">Near me</button>
  <button class="btn" onclick="filterSelection('others')">Others</button>
</div>

<?php
$result = mysqli_query($db,"SELECT * FROM doctor WHERE Specialization = '$specialist'");
while($row = mysqli_fetch_array($result))
{?>
<!-- Portfolio Gallery Grid -->
<div class="row">
<?php if($row['Location']==$loc){?>
  <div class="column near">
    <div class="card">
	<div class="container">
	<h4><b><?php print $row['Firstname'];?></b></h4><hr>
    <p><?php echo $row['Location']; ?><p>
	<p><?php print $row['Contactno'];?></p>
     </div>
	 <form action="book.php" method="post">
	 <input type="hidden" name="doctorid" value="<?php echo $row['id']; ?>">
	 <input type="hidden" name="doctorname" value="<?php echo $row['username']; ?>">
	 <input type="hidden" name="disease" value="<?php echo $disease; ?>">
	 <input type="hidden" name="location" value="<?php echo $loc; ?>">
    <button type="submit" class="button5">Book</button>
	</form>
</div>
    </div>
<?php }
else{?>
  <div class="column others">
	<div class="card">
	<div class="container">
	<h4><b><?php print $row['Firstname'];?></b></h4><hr>
    <p><?php echo $row['Location']; ?><p>
	<p><?php print $row['Contactno'];?></p>
     </div>
     <form action="book.php" method="post">
	 <input type="hidden" name="doctorid" value="<?php echo $row['id']; ?>">
	 <input type="hidden" name="doctorname" value="<?php echo $row['username']; ?>">
	 <input type="hidden" name="disease" value="<?php echo $disease; ?>">
	 <input type="hidden" name="location" value="<?php echo $loc; ?>">
    <button type="submit" class="button5">Book</button>
	</form>
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
</script>

</body>
</html>
