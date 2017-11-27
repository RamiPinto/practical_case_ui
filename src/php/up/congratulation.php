<?php
	
	session_start();
	if (!isset($_SESSION['success']))
	{
		header("Location signUp.php");
		exit();
	}
	else
	{
		unset($_SESSION['success']);
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Cartoons - congratulation</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
</head>
<body>
	
<?php

echo "<p>Congratulations! You are registered to the system! </p>";
echo "<p>You could sign in now! </p>";

?>

<!--We can add it also everywhere we want-->
<a href="../in/signIn.php">Sign In</a><br><br>
<a href="../index.php">Go to HOME!</a>
</body>
</html>