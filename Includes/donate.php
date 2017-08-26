<?php require_once('./bootstrap.php');?>

<html>
	<head>
		<title>Donate</title>
	</head>
<body>
	<div class="sec1">
		<h1>YOU can deliver health and hope to orphans around the world</h1>
		<p><img src="Images/butterfly-background.jpg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tincidunt fermentum est, ut porta metus placerat ac. Aliquam id risus laoreet nisl vehicula commodo et a neque. Mauris et ullamcorper enim, ut sollicitudin neque.</p>	
	</div>
	<div class="sec2">
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
		<div class="tribute">
			<h2>Would you like to make this a tribute gift?</h2>
			<input type="checkbox" value="One-time gift">

		</div>
	</div>
</body>
</html>