<?php include('config.php'); ?>
<form action="" method="POST">
    <label for="email"><b>Message</b></label>
	<textarea id="subject" name="message" placeholder="Write something.." style="height:170px"></textarea>
	<label for="email"><b>Location</b></label>
	<select name="Location" required>
	<option value="">---select---</option>
	<option value="MAHARASHTRA">MAHARASHTRA</option>
	<option value="KERALA">KERALA</option>
	</select>
	<button type="submit">SEND SMS</button>
  </form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$i=0;
	$Array = array();
	$loc = $_POST['Location'];
    $message = $_POST['message'];
	$result = mysqli_query($db,"SELECT * FROM doctor where Location = '$loc'");
    while($row = mysqli_fetch_assoc($result)){
	$Array[$i]=$row['Contactno'];
    $i=$i+1;	
	}
	
	$result = mysqli_query($db,"SELECT * FROM patient where Location = '$loc'");
    while($row = mysqli_fetch_assoc($result)){
	$Array[$i]=$row['Contactno'];
    $i=$i+1;
	} 

	// Authorisation details.
	$username = "jinishakg11@gmail.com";
	$hash = "7ab395c0c507b9479ae9978380b44f3e0e7eb87097869e21f6008daac7fdda86";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = implode(', ', $Array); ;  // A single number or a comma-seperated list of numbers

	// 612 chars or less
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
	if($result){
		echo "Message sent successfully";
		echo "<br>";
	}
	print($result);
}
?>
