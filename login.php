<link rel="stylesheet" type="text/css" href="login.css">
<div id="login_element">  
	<div id="id02" class="modal2">
   <form method="POST" id="login-info" class="modal-content animate" action="<?= ROOT_URL ?>login_action.php">
     <span class="close2" title="Close Modal">X</span>
     <div class="imgcontainer">
      <img src="Images/desFoundationLogo.jpg" alt="Logo" class="logo">
      <p> Welcome Back!</p>
    </div>
    <div class="container">
     <input type="text" placeholder="Enter Email" name="email" required> 
     <input type="password" placeholder="Enter Password" name="password" required> 
     <button type="submit" class="loginbtn2">Login</button>
     <div id="wrng-pass"></div>
   </div>
   <div class="clearfix">
    <button type="button" class="cancelbtn2">Cancel</button>
    <span class="psw"><a href="#">Forgot Password?</a>.</span>

  </div>	
</form>
</div> 
</div>
<?php include("welcome.php");?>

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

    var showmod = document.querySelector('.loginbtn2');

    showmod.onsubmit = function(event) {
      wmodal.style.display = "block";
    }

    $("#login-info").validate({
      rules: {
        password:  {
          required: true,
        },
        email: {
          required: true,
          email: true
        }
      }, 
      messages: {
        password: "Please enter your password",
        email: {
          required: "Please enter a valid email in the form of name@domain.com",
          email: "Please enter a valid email in the form of name@domain.com"
        }
      },


      submitHandler: function(form) {
      event.preventDefault();// using this page stop being refreshed 

        $.ajax({
          type: 'POST',
          url: 'login_action.php',
          data: $(form).serialize(),
          success: function (data, status, jqXHR) {
            console.log(data);
            if (data == "Wrong Email or Password") {
              $('#wrng-pass').html(data);
            } else if (data == "Welcome!"){
                wmodal.style.display = "block";
                modal2.style.display= "none";
            } else {
              console.log("Something went wrong");
              $('#wrng-pass').html(data);
            }
          },
          error: function (jqXHR, status, error) {
            $('#wrng-pass').html("Something went wrong");
          }
        }); 
      }
    });

    
      </script>
