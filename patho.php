<?php
   include('config.php');
   $row['Disease']="";
$row['Test']="";
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$disease= $_POST['Location'];
	$result = mysqli_query($db,"SELECT * FROM patho WHERE Disease='$disease'");
    $row = mysqli_fetch_assoc($result);
   }?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("images/testback.jpg");

  min-height: 380px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 70px;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
}

/* Full-width input fields */
select, h4 {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
}

select:focus {
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: blue;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>

<div class="bg-img"><br>
  <form action="" class="container" method="POST">
    <label for="email" style="color:red;"><b>SELECT DISEASE</b></label>
	<select name="Location" required>
	<option value="">---select---</option>
	<option value="Fungal infection">Fungal infection</option>
	<option value="Allergy">Allergy</option>
	<option value="Gerd">Gerd</option>
	<option value="Chronic Cholestasis">Chronic Cholestasis</option>
	<option value="Drug Reaction">Drug Reaction</option>
	<option value="Peptic ulcer disease">Peptic ulcer disease</option>
	<option value="AIDS">AIDS</option>
	<option value="Diabetes">Diabetes</option>
	<option value="Gastroenteritis">Gastroenteritis</option>
	<option value="Bronchial Asthma">Bronchial Asthma</option>
	<option value="Hypertension">Hypertension</option>
	<option value="Migraine">Migraine</option>
	<option value="Cervical spondylosis">Cervical spondylosis</option>
	<option value="Paralysis (brain hemorrhage)">Paralysis (brain hemorrhage)</option>
	<option value="Jaundice">Jaundice</option>
	<option value="Malaria">Malaria</option>
	<option value="Chicken pox">Chicken pox</option>
	<option value="Dengue">Dengue</option>
	<option value="Typhoid">Typhoid</option>
	<option value="hepatitis A">hepatitis A</option>
	<option value="Hepatitis B">Hepatitis B</option>
	<option value="Hepatitis C">Hepatitis C</option>
	<option value="Hepatitis E">Hepatitis E</option>
	<option value="Alcoholic hepatitis">Alcoholic hepatitis</option>
	<option value="Tuberculosis">Tuberculosis</option>
	<option value="Common Cold">Common Cold</option>
	<option value="Pneumonia">Pneumonia</option>
	<option value="Dimorphic hemmorhoids(piles)">Dimorphic hemmorhoids(piles)</option>
	<option value="Heart attack">Heart attack</option>
	<option value="Varicose veins">Varicose veins</option>
	<option value="Hypothyroidism">Hypothyroidism</option>
	<option value="Hyperthyroidism">Hyperthyroidism</option>
	<option value="Hypoglycemia">Hypoglycemia</option>
	<option value="Osteoarthristis">Osteoarthristis</option>
	<option value="Arthritis">Arthritis</option>
	<option value="(vertigo) Paroymsal  Positional Vertigo">(vertigo) Paroymsal  Positional Vertigo</option>
	<option value="Acne">Acne</option>
	<option value="Urinary tract infection">Urinary tract infection</option>
	<option value="Psoriasis">Psoriasis</option>
	<option value="Impetigo">Impetigo</option>
	</select>
	<label for="email" style="color:red;"><b>DISEASE : </b></label>
     <label for="psw"><b> <?php echo $row['Disease']?></b></label><br> <br>
    <label for="psw" style="color:red;"><b>TEST</b></label> <br> <br>
	<label for="psw"><b><?php echo $row['Test']?></h4></b></label>
</div><br><br>
    <button type="submit" class="btn">SUGGEST</button>
  </form>


</body>
</html>
