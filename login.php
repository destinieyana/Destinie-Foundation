<link rel="stylesheet" type="text/css" href="login.css">
<div id="login_element">  
	<div id="id02" class="modal2">
    	<form method="POST" class="modal-content animate" action="<?= ROOT_URL ?>login_action.php">
			<span class="close2" title="Close Modal">X</span>
      	<div class="imgcontainer">
      		<img src="Images/desFoundationLogo.jpg" alt="Logo" class="logo">
      		<p> Welcome Back!</p>
      	</div>
      	<div class="container">
        	<input type="text" placeholder="Enter Email" name="email" required> 
        	<input type="password" placeholder="Enter Password" name="password" required> 
        	<button type="submit" class="loginbtn2">Login</button>
        </div>
      	<div class="clearfix">
         	<button type="button" class="cancelbtn2">Cancel</button>
         	<span class="psw"><a href="#">Forgot Password?</a>.</span>
          
      	</div>	
   		</form>
  	</div> 
</div>

<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

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
