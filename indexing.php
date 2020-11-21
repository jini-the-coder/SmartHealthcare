<?php include 'header.php' ?>
<html>
   <body>
	<style>
	.containers{width:1326px ; overflow:hidden ; height:500px}
	.sliderbox{position:relative ; width:13260px ;animation-iteration-count:infinite ; animation-name:slideranimation; animation-duration:40s;}
	.sliderbox img{ float:left; }

	.image{width:1326px ; height:500px}

	@keyframes slideranimation{

	0%
	{
		left:0px;
	}
	5%{
		left:0px;
	}
	10%
	{
		left:-1326px;
	}
	15%{
		left:-1326px;
	}
	20%{
		left:-2652px;
	}
	25%{
		left:-2652px;
	}
	30%{
		left:-3978px;
	}
	35%
	{
		left:-3978px;
	}
	40%{
		left:-5304px;
	}
	45%{
		left:-5304px;
	}
	50%{
		left:-6630px;
	}
	55%{
		left:-6630px;
	}
	60%{
		left:-7956px;
	}
	65%{
		left:-7956px;
	}
	70%{
		left:-9282px;
	}
	75%{
		left:-9282px;
	}
	80%{
		left:-10608px;
	}
	85%{
		left:-10608px;
	}
	90%{
		left:-11934px;
	}
	95%{
		left:-11934px;
	}
	
	
}

	</style>

	<div class="containers">
	<div class="sliderbox">
		<img src="images/1.png" class="image"/>
		<img src="images/2.png" class="image"/>
		<img src="images/3.jpg" class="image"/>		
		<img src="images/4.jpg" class="image"/>
		<img src="images/5.jpg" class="image"/>
		<img src="images/1.png" class="image"/>
		<img src="images/2.png" class="image"/>
		<img src="images/3.jpg" class="image"/>
		<img src="images/4.jpg" class="image"/>
		<img src="images/5.jpg" class="image"/>
	</div>
	</div>

   </body>
</html>
<?php include 'footer.php'; ?>


