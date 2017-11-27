<?php
	session_start();

	//add to all pages wich can be se by logged user
	if (!isset($_SESSION['logged']))
	{
		header('Location: signIn.php');
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>cartoons</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
</head>
<body>

<!--Also this page inform user that he/she is logged now , so we need use here a template of design  -->

<?php

echo "<p>Congratulations! You are logged to the system</p>";

//we can remove it later , will be depends on our design
echo "Your email: ".$_SESSION['user']."<br>";
echo "Your photo path: ".$_SESSION['photopath']."<br><br>";

?>
<!--We can add it also everywhere we want-->
<a href="../signOut.php">Sign Out</a><br><br>
<a href="../index.php">Go to HOME!</a>
</body>
</html>