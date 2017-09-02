<link rel="stylesheet" type="text/css" href="signup.css">
<div id="signup_element">  
  <div id="id01" class="modal">
    <form method="POST" class="modal-content animate" action="<?= ROOT_URL ?>signup-action.php">
      <div class="container">
        <span class="close" title="Close Modal">X</span>
        <div class="signup"><p>Join us to help change lives!</p></div>
        <input type="text" placeholder="First Name" name="firstname" value="mickey"  required>  
        <input type="text" placeholder="Last Name" name="lastname" value="mouse" required> 
        <input type="text" placeholder="Enter Email" name="email" value="mickey.mouse@gmail.com" required> 
        <input type="password" placeholder="Enter Password" id="password" name="password" value="minnie" required> 
        <input type="password" placeholder="Repeat Password" id="pass_repeat" name="pass_repeat" value="minnie" required> 
        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

        <div class="clearfix">
          <button type="button" class="cancelbtn">Cancel</button>
          <button type="submit" class="signupbtn">Sign Up</button>
        </div>
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
    var modal = document.getElementById('id01');
    console.log(modal);

    // When the user clicks anywhere outside of the modal, close it
    modal.onclick = function(event) { 
      modal.style.display = "none";
    }

    var cncl = document.querySelector('.cancelbtn');

    cncl.onclick = function(event) {
      modal.style.display = "none";
    }

    var clsx = document.querySelector('.close');

    clsx.onclick  = function(event) {
      modal.style.display = "none";
    }

    var signUp = document.querySelector('.signupbtn');
    
    signUp.onclick = function(event) {
      alert("its happening now");
      jQuery.validator.setDefaults({
        debug: true,
        success: "valid"
      });

      $( ".modal-content" ).validate({
        rules: {
          password: "required",

          pass_repeat: {
            equalTo: "#password"
        }
      }
    });
  }


  </script>
