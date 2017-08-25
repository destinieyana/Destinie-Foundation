<link rel="stylesheet" type="text/css" href="signup.css">
<div id="signup_element">  
  <div id="id01" class="modal">
    <span class="close" title="Close Modal">X</span>
    <form class="modal-content animate" action="/action_page.php">
      <div class="container">
        <label><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <label><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
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