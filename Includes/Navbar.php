<div class="nav">
	<div id="top-margin">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<div class="icon">
			<ul>
				<li><a href="https://www.facebook.com/" target="_blank" class="fa fa-facebook"></a></li>
				<li><a href="https://www.instagram.com/" target="_blank" class="fa fa-instagram"></a></li>
				<li><a href="https://twitter.com/" target="_blank" class="fa fa-twitter"></a></li>
				<li><a href="https://www.youtube.com/" target="_blank" class="fa fa-youtube"></a></li>
			</ul>	
		</div>
		<?php if (isset($_SESSION['login']) && $_SESSION['login']) { include ("./logout.php");
		} else { include ("./join.php");}
		?>
		<div class="marg-text">Change a life  -</div>
		<div class="donate"><a href="donate.php" target="_blank">Donate today</a></div>
	</div>
	<div class="navbar">
		<div class="logo">
			<img src="Images/desFoundationLogo.jpg" alt="Foundation Logo" style="width:250px;height:130px;">
		</div>
		<div class="tabs">
			<ul>
				<li><a href="Index.php">Home</a></li>
				<li><a href="getInvolved.php">Get Involved</a></li>
				<li><a href="theProblem.php">The Problem</a></li>
				<li><a href="approach.php">Approach</a></li>
				<li><a href="about.php">About</a></li>
			</ul>
		</div>
	</div>
</div>	
	<?php 
	include("Includes/signup.php");
	include("login.php");
	?>