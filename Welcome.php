<link rel="stylesheet" type="text/css" href="welcome.css">
<div id="welcmod" class="wmodal">
	<div class="welcome-content animate">
		<div class="greeting">
			<span class="wclose" title="Close Modal">X</span>
			<div class="img-container">
				<img src="Images/desFoundationLogo.jpg" alt="Logo" class="logo">
			</div>
			<h1>Welcome Back!<h1>
			<p>Thank you for supporting the Destinie Foundation! We are excited to help children around the world light up a new path to live their destiny.</p>
			<span>Ready to make a donation?</span>
			<div class="donate"><a href="donate.php" target="_blank">Donate Now</a></div>
		</div>
	</div>
</div>

<script>
	var wmodal = document.getElementById('welcmod');

	wmodal.onclick = function(event) {
      if (event.target == wmodal) {
        wmodal.style.display = "none";
        location.reload('index.php');
      }
    }

	var wclose = document.querySelector('.wclose');

	wclose.onclick = function(event) {
		wmodal.style.display = "none";
		location.reload('Index.php');
	}

</script>