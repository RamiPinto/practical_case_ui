<?php
	session_start();

	//add to all pages wich can be se by logged user
	if (isset($_SESSION['logged']))
	{
	    //Here we can change picture and login of the user on all webpages in corresponding places depends on design 
	    //So here is everything what the user can see when he is logged
		header('Location: in/signIn.php');
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head lang="en">
	<title>cartoons</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
</head>
<body>
<p>Home page</p><br><br>
<a href="signOut.php">Sign Out</a><br><br>
<a href="in/signIn.php">Sign In</a><br><br>
<a href="up/signUp.php">Sign Up</a>
</body>
</html>