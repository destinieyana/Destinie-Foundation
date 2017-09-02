<?php require_once('./bootstrap.php');?>
<html>
<head>
	<title>Destinie Foundation</title>
	<link rel="stylesheet" type="text/css" href="home.css">
	<link rel="stylesheet" type="text/css" href="navbar.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<link rel="stylesheet" type="text/css" href="donatePrompt.css">
</head>
<body>
	<div id="cont"> 
			<?php 
			include ("Includes/Navbar.php");?>
		<div class="banner">
			<div class="in-banner">
				<img src="Images/homePic2.jpg" alt="Banner Pic"/>
				<div class="banner-info">
					<div class="banner-text">
						<p>Every child deserves a path</p>
					</div>
					<div class="banner-button">Get Involved</div>
				</div>
			</div>	
		</div>

		<div class="join-sec">
			<div class="join-box">
				<div class="text">
					<h3>Be the light in a child's life</h3>
				</div>
				<div class="donate"><a href="donate.php" target="_blank">Donate today</a></div>
			</div>
		</div>
		<div class="info-box">
			<div class="stats-box">
				<img src="Images/homePic.jpg" alt="Banner Pic"/>
				<div class="stats-box-center">
					<div class="title0">
						<h2>The<br/> Facts</h2>
					</div>	
					<div class="desc0">
						<p>It is estimated that 153 million children worldwide are orphans.</p>
					<!--<div class="arrow-down"></div>-->
					</div>
					<div class="learn-button">Learn More</div>
				</div>
			</div>	
			<div class="left-box">
				<div class="top-box box">
					<div class="title1 title">
						<h2>Who</h2> 
						<span>we are</span>
						<div class="arrow-right"></div>
					</div>
					<div class="desc1 desc">
						<p>A nonprofit<br/> organization dedicated<br/> to give orphans a<br/> new life.</p>
						<div class="learn-button2">Learn More</div>
					</div>
				</div>
				<div class="bottom-box box">
					<div class="desc2 desc">
						<p>Empower orphans across<br/> the world to create a<br/>new life by providing<br/>basic physiological needs. </p>
						<div class="learn-button2">Learn More</div>
					</div>
					<div class="title2 title">
						<h2>What</h2>
						<span>we do</span>
						<div class="arrow-left"></div>
					</div>
				</div>
			</div>
			<div class="right-box">
				<div class="top-box box">
					<div class="title3 title">
						<h2>Sponsor</h2>
						<span>a child</span>
						<div class="arrow-right"></div>
					</div>
					<div class="desc3 desc">
						<p>Help a child find<br/> their path to a <br/>new life!</p>
						<div class="learn-button2">Learn More</div>
					</div>
				</div>
				<div class="bottom-box box">
					<div class="desc4 desc">
						<p>Join us in local <br/>events and fundraisers<br/> to help provide<br/> for the children!</p>
						<div class="learn-button2">Learn More</div>
					</div>
					<div class="title4 title">
						<h2>Volunteer</h2>
						<span>with us</span>
						<div class="arrow-left"></div>
					</div>
				</div>
			</div>
		</div>
		
		<?php
		 include("Includes/donatePrompt.php");
		 include("Includes/Footer.php");
		?>
	</div>
</body>
</html>