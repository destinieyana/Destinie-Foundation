<link rel="stylesheet" type="text/css" href="signup.css">
<div id="signup_element">  
  <div id="id01" class="modal">
    <span class="close" title="Close Modal">X</span>
    <form method="POST" class="modal-content animate" action="<?= ROOT_URL ?>signup-action.php">
      <div class="container">
        <input type="text" placeholder="First Name" name="firstname" value="Destinie" required>   
        <input type="text" placeholder="Last Name" name="lastname" value="Santamaria" required> 
        <input type="text" placeholder="Enter Email" name="email" value="destinie.santamaria@gmail.com" required> 
        <input type="password" placeholder="Enter Password" name="password" value="destinie" required> 
        <input type="password" placeholder="Repeat Password" name="psw-repeat" value="destinie" required> 
        <input type="checkbox" checked="checked"> Remember me
        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

        <div class="clearfix">
          <button type="button" class="cancelbtn">Cancel</button>
          <button type="submit" class="signupbtn">Sign Up</button>
        </div>
      </div>
    </form>
  </div> 
</div>

  <script>
    // Get the modal
    var modal = document.getElementById('id01');


    // When the user clicks anywhere outside of the modal, close it
    modal.onclick = function(event) {
      if (event.target == modal) {
      modal.style.display = "none";
      }
    }

    var cncl = document.querySelector('.cancelbtn');

    cncl.onclick = function(event) {
      modal.style.display = "none";
    }

    var clsx = document.querySelector('.close');

    clsx.onclick  = function(event) {
      modal.style.display = "none";
    }
  </script>