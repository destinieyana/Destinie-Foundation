<?php require_once('./bootstrap.php');?>
<html>
<head>
	<title>The Problem</title>
	<link rel="stylesheet" type="text/css" href="navbar.css">
	<link rel="stylesheet" type="text/css" href="theProblem.css">
	<link rel="stylesheet" type="text/css" href="donatePrompt.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
</head>
<body>
	<?php
		include("Includes/Navbar.php");
	?>
	<!--<div class="head">
		<div class="head-text">
			<p>The Problem</p>
		</div>
	</div>-->
	<div class="bod">
		<div class="phrase">
			<div class="phrase-text">
				<p>153 Million Miracles in the Making</p>
			</div>
		</div>
		<div class="stats">
			<div class="stats-text">
				<p>There are 153 million orphans in the world, according to UNICEF. Many of them live in institutional orphanages with deplorable conditions, where their most basic needs are not met. The children are often hungry, scared, confused and lonely.
				<img src="Images/stats-pic.jpg" alt="Children giving a thumbs up."/>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tincidunt fermentum est, ut porta metus placerat ac. Aliquam id risus laoreet nisl vehicula commodo et a neque. Mauris et ullamcorper enim, ut sollicitudin neque. Nam tortor arcu, pharetra bibendum quam et, viverra accumsan metus. Integer interdum sem nisl, sit amet lacinia est pretium id.
				</p>			
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tincidunt fermentum est, ut porta metus placerat ac. Aliquam id risus laoreet nisl vehicula commodo et a neque. Mauris et ullamcorper enim, ut sollicitudin neque. </p> 
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tincidunt fermentum est, ut porta metus placerat ac. Aliquam id risus laoreet nisl vehicula commodo et a neque. Mauris et ullamcorper enim, ut sollicitudin neque. Mauris et ullamcorper enim, ut sollicitudin neque. Nam tortor arcu, pharetra bibendum quam et, viverra accumsan metus. 
				</p>
				
			</div>
			<div class="donate-link">
				<p>Become a donor</p>
			</div>
		</div>
	</div>
	<?php 
		include("Includes/donatePrompt.php");
		include("Includes/Footer.php"); ?>
</body>
</html>
