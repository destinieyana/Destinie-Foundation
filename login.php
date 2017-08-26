<html>
<head>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<form method="POST" action="<?= ROOT_URL ?>login_action.php">
		<input type="text" name="username" placeholder="username" required>
		<input type="text" name="password" placeholder="password" required>
		<input type="submit" value="Login">
		<?php
			if ($_GET['login'] == "failed") { ?>
				<div>Sorry, wrong username or password</div>
			<?php }
		?>
	</form>		
</body>
</html>