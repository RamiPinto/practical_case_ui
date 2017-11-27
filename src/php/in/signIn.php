<?php
	session_start();

	if(isset($_SESSION['logged']) && ($_SESSION['logged'] == true))
	{
		header('Location: ../index.php');
		exit();
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cartoons - sign in</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
</head>
<body>

<form action="include.php" method="post">
	
	E-mail: <br> <input type="text" name="login"><br> <br>
	Password: <br> <input type="password" name="password" > <br> <br>
	<input type="submit" name="signIn" value="Sign In"><br> <br>

</form>

<?php
if (isset($_SESSION['error'])) echo $_SESSION['error'];

?>

<a href="../up/signUp.php">Sign Up</a><br> <br>
<a href="../index.php">Go to Home!</a>
</body>
</html>