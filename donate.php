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
		<p><img src="donate.jpeg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tincidunt fermentum est, ut porta metus placerat ac. Aliquam id risus laoreet nisl vehicula commodo et a neque. Mauris et ullamcorper enim, ut sollicitudin neque.</p>	
	</div>
	<div class="sec2 sec">
		<div class="gift-amt">
			<h2>Gift Amount</h2>
			<button type="button" class="amount">$10</button>
			<button type="button" class="amount">$25</button>
			<button type="button" class="amount">$50</button>
			<button type="button" class="amount">$75</button>
			<button type="button" class="amount">$100</button>
			<button type="button" class="amount">OTHER</button>
		</div>
		<div class="gift-freq">
			<h2>Gift Frequency</h2>
			<div class="freq">
				<input type="radio" checked="checked" value="One">One-time gift<br>
				<input type="radio" checked="checked" value="Recurring">Recurring monthly gift<br>
			</div>
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
		<div class="tribute">
			<h2>Would you like to make this a tribute gift?</h2>
			<input type="checkbox" value="One-time gift"><p>Yes, make this gift</p><select>
				<option value="honor">in honor of</option>
				<option value="memory">in memory of</option>
			</select>
			<input type="text" placeholder="Name of Honoree">
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
		<img src="Images/logo_cc.png" alt="Credit Cards">
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
	<div class="sec6">
		<p>By clicking the above button you agree to have your debit or credit card charged by Project C.U.R.E. Please review your submission, click Donate Now ONLY ONCE and allow a few moments for us to process your card. Your donation is secure and encrypted.</p>
	</div>
	<?php include("Footer.php");?>
</body>
</html>