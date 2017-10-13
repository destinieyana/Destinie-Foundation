<?php require_once('./bootstrap.php');?>
<html>
<head>
	<title>About</title>
	<link rel="stylesheet" type="text/css" href="navbar.css">
	<link rel="stylesheet" type="text/css" href="about.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
</head>
<body>
	<?php 
	include ("Includes/Navbar.php");?>
	<div class="who">
		<div class="who-head head">
			<p> Who we are </p>
		</div>
		<div class="who-text">
			<p><img src="Images/about.jpg">Insert about us paragraph here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tincidunt fermentum est, ut porta metus placerat ac. Aliquam id risus laoreet nisl vehicula commodo et a neque. Mauris et ullamcorper enim, ut sollicitudin neque. Nam tortor arcu, pharetra bibendum quam et, viverra accumsan metus. Integer interdum sem nisl, sit amet lacinia est pretium id.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tincidunt fermentum est, ut porta metus placerat ac. Aliquam id risus laoreet nisl vehicula commodo et a neque. Mauris et ullamcorper enim, ut sollicitudin neque. Nam tortor arcu, pharetra bibendum quam et, viverra accumsan metus.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tincidunt fermentum est, ut porta metus placerat ac. Aliquam id risus laoreet nisl vehicula commodo et a neque. Mauris et ullamcorper enim, ut sollicitudin neque. Nam tortor arcu, pharetra bibendum quam et, viverra accumsan metus. Integer interdum sem nisl, sit amet lacinia est pretium id.</p>
		</div>
	</div>
	<div class="what">
		<div class="head">
			<p>What we do</p>
		</div>
		<div class="clmns">
			<div class="col-pic">
				<img src="Images/1-1.png">
			</div>
			<div class="column1 col">
				<div class="col-head">
					<p> The Method</p>
				</div>
				<div class="col-text">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tincidunt fermentum est, ut porta metus placerat ac. Aliquam id risus laoreet nisl vehicula commodo et a neque. Mauris et ullamcorper enim, ut sollicitudin neque. Nam tortor arcu, pharetra bibendum quam et, viverra accumsan metus. Integer interdum sem nisl, sit amet lacinia est pretium id.</p>
				</div>
			</div>
			<div class="col-pic">
				<img src="Images/2-1.png">
			</div>
			<div class="column2 col">
				<div class="col-head">
					<p>The Motivation</p>
				</div>
				<div class="col-text">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tincidunt fermentum est, ut porta metus placerat ac. Aliquam id risus laoreet nisl vehicula commodo et a neque. Mauris et ullamcorper enim, ut sollicitudin neque. Nam tortor arcu, pharetra bibendum quam et, viverra accumsan metus. Integer interdum sem nisl, sit amet lacinia est pretium id.</p>
				</div>
			</div>
			<div class="col-pic">
				<img src="Images/3-1.png">
			</div>
			<div class="column3 col">
				<div class="col-head">
					<p>The Magic</p>
				</div>
				<div class="col-text">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tincidunt fermentum est, ut porta metus placerat ac. Aliquam id risus laoreet nisl vehicula commodo et a neque. Mauris et ullamcorper enim, ut sollicitudin neque. Nam tortor arcu, pharetra bibendum quam et, viverra accumsan metus. Integer interdum sem nisl, sit amet lacinia est pretium id.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="why">
		<div class="head">
		<div class="arrow-down"></div>
			<p>Why we do it</p>
		</div>
		<div class="why-text">
			<div class="overlay"></div>
			<p><img src="Images/why-pic.jpg">Insert founder's personal story here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tincidunt fermentum est, ut porta metus placerat ac. Aliquam id risus laoreet nisl vehicula commodo et a neque. Mauris et ullamcorper enim, ut sollicitudin neque. Nam tortor arcu, pharetra bibendum quam et, viverra accumsan metus. Integer interdum sem nisl, sit amet lacinia est pretium id.</p>
		</div>
	</div>
	<div class="need">
		<div class="head">
			<p>We need you!</p>
		</div>
		<div class="need-text">
			<p>With your help, we can change the lives of orphans around the world.</p>
			<p>Will you join us?</p>
			<div class="donate-box">
				<div class="donate donatePage">Donate Now</div>
			</div>
		</div>
	</div>
	<?php 
	include ("Includes/footer.php"); ?>
</body>
</html>
