<div class="Join">Join</div>	
<div class="Login">Login</div>

<script type="text/javascript">
$(document).ready(function() {

    var modal = document.getElementById('id01');


    // When the user clicks anywhere outside of the modal, close it
    modal.onclick = function(event) { 
        if (event.target == modal) 
            modal.style.display = "none";
    }

    var modal2 = document.getElementById('id02');


    // When the user clicks anywhere outside of the modal, close it
    modal2.onclick = function(event) {
      if (event.target == modal2) {
        modal2.style.display = "none";
      }
    }

	var joinBtn = document.querySelector('.Join');

	joinBtn.onclick = function(event) {
		modal.style.display = "block";
	}

	var loginBtn = document.querySelector('.Login');

	loginBtn.onclick = function(event) {
		modal2.style.display = "block";
    }
    });
</script>
