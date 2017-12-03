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
	<link rel="stylesheet" href="../../style/signUp.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
	
	<input type="text" name="nickname" placeholder="NICKNAME"><br>

	<?php
		if (isset($_SESSION['e_nickname']))
		{
			echo '<div class="error">'.$_SESSION['e_nickname'].'</div><br>';
			unset($_SESSION['e_nickname']);
		}
	?>

	<input type="text" name="email" placeholder="E-MAIL"><br> 

	<?php
		if (isset($_SESSION['e_email']))
		{
			echo '<div class="error">'.$_SESSION['e_email'].'</div><br>';
			unset($_SESSION['e_email']);
		}
	?>

	<input type="password" name="password1" placeholder="PASSWORD"> <br>

	<?php
		if (isset($_SESSION['e_password']))
		{
			echo '<div class="error">'.$_SESSION['e_password'].'</div><br>';
			unset($_SESSION['e_password']);
		}
	?>

	<input type="password" name="password2" placeholder="REPEAT PASSWORD"> <br> 

	<?php
		if (isset($_SESSION['e_repeat']))
		{
			echo '<div class="error">'.$_SESSION['e_repeat'].'</div><br>';
			unset($_SESSION['e_repeat']);
		}
	?>

	<label><input type="checkbox" class="checkbox" name="rules" checked="">I agree with rules</label>  
	<?php
		if (isset($_SESSION['e_rules']))
		{
			echo '<div class="error">'.$_SESSION['e_rules'].'</div><br>';
			unset($_SESSION['e_rules']);
		}
	?>

	<div class="g-recaptcha" data-sitekey="6Ld1fjoUAAAAAOUBNM37lZ1ACDOipHkGWPN7vIgJ"></div><br><br> 

	<?php
		if (isset($_SESSION['e_bot']))
		{
			echo '<div class="error">'.$_SESSION['e_bot'].'</div><br>';
			unset($_SESSION['e_bot']);
		}
	?>

	<input type="submit" class="button" name="signUp" value="Sign Up">
</form>

<br> <br>
<a href="../in/signIn.php" class="down">Sign in</a>
<a href="../index.php">Go to Home!</a>
</body>
</html>