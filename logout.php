<link rel="stylesheet" type="text/css" href="logout.css">
<form action="<?= ROOT_URL ?>logout_action.php" method="POST">
	<button type="submit" class="logout">Logout</button>
</form> 	
<div id="greet">Welcome <?php echo $_SESSION['member']['firstname']; ?>!</div>
