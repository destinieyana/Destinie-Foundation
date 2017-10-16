<link rel="stylesheet" type="text/css" href="signup.css">
<div id="signup_element">  
  <div id="id01" class="modal">
    <form method="POST" id="signup-info" class="modal-content animate" action="<?= ROOT_URL ?>signup-action.php">
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
<?php include("welcome.php"); ?>

<script>
$(document).ready(function() {
    var modal = document.getElementById('id01');


    // When the user clicks anywhere outside of the modal, close it
    modal.onclick = function(event) { 
        if (event.target == modal) 
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
    $(document).ready(function() {

        $("#signup-info").validate({
            rules: {
                password: "required",
                    pass_repeat: {
                        equalTo: "#password"
                    },
                    email: {
                        required: true,
                            email: true
                    }
            }, 
            messages: {
                firstname: "Please enter your First Name",
                    lastname: "Please enter your Last Name",
                    email: {
                        required: "Please enter a valid email in the form of name@domain.com",
                            email: "Please enter a valid email in the form of name@domain.com"
                    }
            },
                submitHandler: function(form) {
                    event.preventDefault();// using this page stop being refreshing 

                        $.ajax({
                            type: 'POST',
                                url: 'signup-action.php',
                                data: $(form).serialize(),
            success: function (data, status, jqXHR) {
                if (data == "User Already Exists") {
                    console.log(data);
                    $('#id01 .signup').html(data).css("color","red");;
                } else if (data == "User Created") {
                    modal.style.display = "none";
                    wmodal.style.display = "block";
                } else {
                    console.log("Something went wrong");
                    $('#id01 .signup').html(data).css("color","red");
                }
            },
                error: function (jqXHR, status, error) {
                    $('#id01 .signup').html("Something went wrong");
                }
                        }); 
                    }
        });
    });
});



</script>
