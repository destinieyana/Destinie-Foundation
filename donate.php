<?php //require_once('./bootstrap.php');?>

<html>
	<head>
		<title>Donate</title>
		<link rel="stylesheet" type="text/css" href="donate.css">
		<link rel="stylesheet" type="text/css" href="footer.css">
	</head>
<body>
	<div class="sec1 sec">
		<h1>YOU can deliver health and hope to orphans around the world</h1>
		<p><img src="Images/donate.jpeg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tincidunt fermentum est, ut porta metus placerat ac. Aliquam id risus laoreet nisl vehicula commodo et a neque. Mauris et ullamcorper enim, ut sollicitudin neque.</p>	
	</div>
	<div class="sec2 sec">
		<h2>Gift Amount<span class="req">*</span></h2>
		<div class="gift-amt">
			<button type="button" class="amount"><span>$10</span></button>
			<button type="button" class="amount"><span>$25</span></button>
			<button type="button" class="amount"><span>$50</span></button>
			<button type="button" class="amount"><span>$75</span></button>
			<button type="button" class="amount"><span>$100</span></button>
			<button type="button" class="amount" id="other"><span>OTHER</span></button>
			<div class="other-field hide">
				<label>Other Amount<span class="req">*</span>$</label>
				<input name="other-amt" type="text">
			</div>
		</div>
		<div class="gift-freq">
			<div class="cols">
				<div class="freq">
					<h2>Gift Frequency<span class="req">*</span></h2>
					<div class="freq1"><input type="radio" checked="checked" class="radio-button" value="One">One-time gift<br></div>
					<div class="freq2"><input type="radio" class="radio-button" value="Recurring">Recurring monthly gift<br></div>
				</div>
				<div class="sponsor">
					<h2>Gift Designation</h2>
					<select>
						<option value="anywhere">Where the need is greatest</option>
						<option value="sponsor">Sponsor a child</option>
						<option value="housing">Housing needs</option>
						<option value="supplies">Supplies</option>
						<option value="food">Food</option>
					</select>
				</div>
			</div>
		</div>
		<div class="tribute">
			<h2>Would you like to make this a tribute gift?</h2>
			<div class="tribute2">
				<input type="checkbox" class="checkbox" value="One-time gift">Yes, make this gift  
			</div>
			<div class="select">
				<select>
					<option value="honor">in honor of</option>
					<option value="memory">in memory of</option>
				</select>
			</div>
			<div class="honor">
				<input type="text" class="honoree" placeholder="Name of Honoree">
			</div>
		</div>
	</div>
	<div class="sec3 sec">
		<h2>Billing Information</h2>
		<div class="billing form">
			<div class="col1 col">
				<label>First Name<span class="req">*</span><input type="text" name="fname"></label>
				<label>Address Line 1<span class="req">*</span><input type="text" name="ad1"></label>				
				<label>City<span class="req">*</span><input type="text" name="city"></label>
				<label>Zip/Postal Code<span class="req">*</span><input type="text" name="zipcode"></label>
				<label>Phone<input type="text" name="phone"></label>
			</div>
			<div class="col2 col">
				<label>Last Name<span class="req">*</span><input type="text" name="lname"></label>
				<label>Address Line 2<input type="text" name="ad2"></label>
				<label>State/Province<span class="req">*</span><input type="text" name="state"></label>
				<label>Country<span class="req">*</span><input type="text" name="country"></label>
				<label>Email<span class="req">*</span><input type="email" name="email"></label>
			</div>
		</div>
	</div>
	<div class="sec4 sec">
		<h2>Payment Information</h2>
		<img src="Images/logos_cc.png" alt="Credit Cards">
		<div class="payment form">
			<div class="col3 col">
				<label>Debit or Credit Card Number<span class="req">*</span><input type="text" name="card#"></label>
				<label>Card Security Code<span class="req">*</span><input type="text" name="cvv"></label>
			</div>
			<div class="col4 col">
				<label>Expiration Date<span class="req">*</span><input type="text" name="exp"></label>
			</div>
		</div>
	</div>
	<div class="sec5 sec">
		<div class="submit-pay">DONATE NOW</div>
	</div>
	<div class="sec6 sec">
		<p>By clicking the above button you agree to have your debit or credit card charged by Project C.U.R.E. Please review your submission, click Donate Now ONLY ONCE and allow a few moments for us to process your card. Your donation is secure and encrypted.</p>
	</div>
	<?php include("Includes/Footer.php");?>
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
	<script>
	$('.amount').on('click', function(event) {
		$('.amount').removeClass('active');
		$(this).toggleClass('active');
		$(".hide").hide();
	});
	
	$("#other").click(function(){
		$(".hide").show();
	});

	$('.radio-button').on("click", function (event) {
       var this_input = $(this);
       if (this_input.attr('checked1') == '11') {
           this_input.attr('checked1', '11')
        }
        else {
            this_input.attr('checked1', '22')
        }
    $('.radio-button').prop('checked', false);
        if (this_input.attr('checked1') == '11') {
            this_input.prop('checked', false);
            this_input.attr('checked1', '22')
        }
        else {
            this_input.prop('checked', true);
            this_input.attr('checked1', '11')
        }
    });
	</script>
</body>
</html>