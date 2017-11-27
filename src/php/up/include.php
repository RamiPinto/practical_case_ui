<?php
	session_start();

	if (isset($_POST['email']))
	{
		//Everything is ok
		$eth_ok = true;

		// Check if the nickname is correct
		$nickname = $_POST['nickname'];

		if ((strlen($nickname)<3) || (strlen($nickname)>15))
		{
			$eth_ok = false;
			$_SESSION['e_nickname']="Nickname have to include from 3 to 15 signs";
		}

		if (ctype_alnum($nickname) == false)
		{
			$eth_ok = false;
			$_SESSION['e_nickname']="Nickname have to include only numbers or letters"; 
		}

		// Check login = email

		$email = $_POST['email'];

		//safe email = clear email
		$emailS = filter_var($email, FILTER_SANITIZE_EMAIL);

		if ((filter_var($emailS, FILTER_VALIDATE_EMAIL) == false) || ($emailS!=$email))
		{
			$eth_ok=false;
			$_SESSION['e_email'] = "Email is incorrect!";
		}

		//Check if the password is ok

		$password1 = $_POST['password1'];
		$password2 = $_POST['password2'];

		if ((strlen($password1)<8) || (strlen($password1)>20))
		{
			$eth_ok=false;
			$_SESSION['e_password']="Password have to include from 8 to 20 signs";
		}

		if ($password1!=$password2)
		{
			$eth_ok=false;
			$_SESSION['e_repeat']="Passwords are different!";
		}

		$password1_hash = password_hash($password1, PASSWORD_DEFAULT);
		//echo $password1_hash; exit();

		// Check checkbox

		if (!isset($_POST['rules']))
		{
			$eth_ok=false;
			$_SESSION['e_rules']="Accept rules to continue!";
		}

		//bot or not?

		$secret = "6Ld1fjoUAAAAAAyRsLn1LOrmAoHH78iBv-7jBZBm";

		$check_bot = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);

		$answer = json_decode($check_bot);

		if ($answer -> success == false)
		{
			$eth_ok=false;
			$_SESSION['e_bot']="Prove that you are not a bot!";
		}

	//Try to connect with database
		require_once "../in/connect.php";
		mysqli_report(MYSQLI_REPORT_STRICT);
		try
		{
			$connect = new mysqli($host, $db_user, $db_password, $db_name);
			
			if ($connect -> connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
			}
			else
			{
				//success
				//If email has alreasy exist
				$result = $connect -> query ("SELECT id FROM users WHERE login='$email'");
				if (!$result) throw new Exception($connect->error);

				$amount_email = $result -> num_rows;
				if($amount_email>0)
				{
					$eth_ok= false;
					$_SESSION['e_email'] = "This email is already existed!";
				}

				if ($eth_ok==true)
				{
					//the fields are completed correctly
					//echo "everything is OK";
					if ($connect-> query("INSERT INTO users VALUES (NULL, '$nickname', '$email', '$password1_hash', 'http')"))
					{
						$_SESSION['success'] = true;
						header("Location: congratulation.php");
					}
						else
						{
							throw new Exception($connect->error);
						}
				}
					else 
					{
						header("Location: signUp.php");
						exit();
					}

				$connect-> close();
			}
		}
		catch(Exception $e)
		{
			$_SESSION['e_data']="Error of server! Sorry, sign up later, please";
			//<br> Developer's information: ".$e;
		}
	}

?>