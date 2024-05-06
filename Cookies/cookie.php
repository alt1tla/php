<form action="" method="GET">
	<input type="email" name="email">
	<input type="submit">
</form>

<?php
	if (!empty($_REQUEST['email'])) {
		session_start(); 
		$_SESSION['email'] = $_REQUEST['email']; 
	}
?>
<?php
	if(!empty($_SESSION['email']))
		$email = $_SESSION['email'];
	else
		$email = '';
?>

<form action="" method="GET">
	<input type="text" name="name">
	<input type="text" name="surname">
	<input type="text" name="phone" value="<?php echo $email ?>">

	<input type="submit">
</form>\