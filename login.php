<link rel="stylesheet" type="text/css" href="login.css">
<div id="login_element">  
	<div id="id02" class="modal2">
    	<form method="POST" class="modal-content animate" action="<?= ROOT_URL ?>login-action.php">
			<span class="close2" title="Close Modal">X</span>
      		<div class="imgcontainer">
      			<img src="Images/desFoundationLogo.jpg" alt="Logo" class="logo">
      			<p> Welcome Back!</p>
      		</div>
      		<div class="container">
        		<input type="text" placeholder="Enter Email" name="email" value="destinie.santamaria@gmail.com" required> 
        		<input type="password" placeholder="Enter Password" name="password" value="destinie" required> 
       			<input type="checkbox" checked="checked"> Remember me
        		<button type="submit" class="loginbtn2">Login</button>
        	</div>
      		<div class="clearfix">
          		<button type="button" class="cancelbtn2">Cancel</button>
          		<span class="psw"><a href="#">Forgot Password?</a>.</span>
          		<?php
					if (isset($_GET['login']) && $_GET['login'] == "failed") { ?>
					<div>Sorry, wrong username or password</div>
				<?php }
				?>
      		</div>
      		
   		</form>
  	</div> 
</div>

  <script>
    // Get the modal
    var modal2 = document.getElementById('id02');


    // When the user clicks anywhere outside of the modal, close it
    modal2.onclick = function(event) {
      if (event.target == modal2) {
      modal2.style.display = "none";
      }
    }

    var cancel = document.querySelector('.cancelbtn2');

    cancel.onclick = function(event) {
      modal2.style.display = "none";
    }

    var closex = document.querySelector('.close2');

    closex.onclick  = function(event) {
      modal2.style.display = "none";
    }
  </script>
