<?php include 'header.php'; ?>
<html lang="en">
  <head>
	<style>
			body {
			font-family: Arial, Helvetica, sans-serif;
			}
			
			input[text],textarea {
			width: 100%;
			padding: 12px;
			border: 2px solid #ccc;
			margin-top: 6px;
			margin-bottom: 16px;
			resize: vertical;
			}

			input[type=submit] {
				background-color: lightblue;
  color: white;
  padding: 10px 20px;
  margin: 5px 0;
  border: none;
  cursor: pointer;
  width: 100%;
			
			}

			input[type=submit]:hover {
			opacity: 0.8;
			}


			.container {
			border-radius: 5px;
			background-color: solid blue;
			padding: 10px;
			}


			.column {
			float: left;
			width: 50%;
			margin-top: 6px;
			padding: 20px;
			}


			.row:after {
			content: "";
			display: table;
			clear: both;
			}
		}
		</style>
	</head>
	<body><br><br>
	<h1 align="center" style="color:white; background-color:lightblue;">REVIEWS AND SUGGESTIONS</h1>
		<div class="container">
		<div class="row">
		<div class="column">
		<img src="images/contact.jpg" style="width:100%">
		</div>
		<div class="column">
		<form action="contactsave.php" method="POST">
		<input type="text" name="name" placeholder="Enter your name"/>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
		</form>
		</div>
		</div>
		</div>
		
	</body>
</html>
<?php include 'footer.php';?>