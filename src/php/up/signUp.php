<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Сartoons - sign up</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<script src='https://www.google.com/recaptcha/api.js'></script>

	<style>
		.error
		{
			color: red;
			margin-top: 10px;
			margin-bottom: 10px;
		}
	</style>

</head>
<body>

<?php
		if (isset($_SESSION['e_data']))
		{
			echo '<div class="error">'.$_SESSION['e_data'].'</div>';
			unset($_SESSION['e_data']);
		}

?>

<form action="include.php" method="post">
	
	Nickname: <br> <input type="text" name="nickname"><br>

	<?php
		if (isset($_SESSION['e_nickname']))
		{
			echo '<div class="error">'.$_SESSION['e_nickname'].'</div>';
			unset($_SESSION['e_nickname']);
		}
	?>

	Email: <br> <input type="text" name="email"><br> 

	<?php
		if (isset($_SESSION['e_email']))
		{
			echo '<div class="error">'.$_SESSION['e_email'].'</div>';
			unset($_SESSION['e_email']);
		}
	?>

	Password: <br> <input type="password" name="password1"> <br>

	<?php
		if (isset($_SESSION['e_password']))
		{
			echo '<div class="error">'.$_SESSION['e_password'].'</div>';
			unset($_SESSION['e_password']);
		}
	?>

	Repeat password: <br> <input type="password" name="password2" > <br> 

	<?php
		if (isset($_SESSION['e_repeat']))
		{
			echo '<div class="error">'.$_SESSION['e_repeat'].'</div>';
			unset($_SESSION['e_repeat']);
		}
	?>

	<label><input type="checkbox" name="rules">I agree with rules</label> <br> 
	<?php
		if (isset($_SESSION['e_rules']))
		{
			echo '<div class="error">'.$_SESSION['e_rules'].'</div>';
			unset($_SESSION['e_rules']);
		}
	?>

	<div class="g-recaptcha" data-sitekey="6Ld1fjoUAAAAAOUBNM37lZ1ACDOipHkGWPN7vIgJ"></div><br> 

	<?php
		if (isset($_SESSION['e_bot']))
		{
			echo '<div class="error">'.$_SESSION['e_bot'].'</div>';
			unset($_SESSION['e_bot']);
		}
	?>

	<input type="submit" name="signUp" value="Sign Up"><br> <br>

</form>

<br> <br>
<a href="../in/signIn.php">Sign in</a><br> <br> 
<a href="../index.php">Go to Home!</a>
</body>
</html>