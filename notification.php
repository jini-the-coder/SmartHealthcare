<?php
   include('header.php');
?>
<html>
<head>
<title>Notice Board</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel = "stylesheet" href = "../bootstrap/css/bootstrap.css" type = "text/css"/>
<link rel = "stylesheet" href = "../bootstrap/css/bootstrap.min.css" type = "text/css"/>
</head>
<body>
<style>
.message{
   background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color:red;
  padding: 20px;
  margin: 20px;
  border: 1px solid green;
  font-weight: bold;
}
.bg-image {
  /* The image used */
  background-image: url("images/notice.jpg");

  /* Center and scale the image nicely */
  background-attachment: fixed;
}

</style>
 <div class="bg-image">
<div id="main" class="container">
			<?php
			$result = mysqli_query($db,"SELECT * FROM notice");
					while($row = mysqli_fetch_array($result))
						{ ?><div class ="message">
							<li><?php echo $row['message'];?></li>
							</div>
					<?php	}
			?>
			<div class="clearfix"></div>
</div>
</body>
</html>
<br><br><br><br>
<?php
   include('footer.php');
?>