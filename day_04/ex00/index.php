<?php

	session_start();

	$_SESSION['is_set_login'] = 0;
	$_SESSION['is_set_passwd'] = 0;

	foreach ($_GET as $key => $value)
	{
		if ($key == 'login')
		{
			$_SESSION['login'] = $value;
			$_SESSION['is_set_login'] = 1;
		}
		if ($key == 'passwd')
		{
			$_SESSION['passwd'] = $value;
			$_SESSION['is_set_passwd'] = 1;
		}
	}

	foreach ($_SESSION as $key => $value)
	{
		if ($key == 'login')
		{
			$_SESSION['login'] = $value;
			$_SESSION['is_set_login'] = 1;
		}
		if ($key == 'passwd')
		{
			$_SESSION['passwd'] = $value;
			$_SESSION['is_set_passwd'] = 1;
		}
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Session</title>
</head>
<body>
	<form id="index.php" method="GET" action="index.php">

		<label for="login">Username:</label>
		<input type="text" name="login" value="<?php echo ($_SESSION['is_set_login'] ? $_SESSION['login'] : ''); ?>" autofocus>

		<label for="passwd">Password:</label>
		<input type="password" name="passwd" value="<?php echo ($_SESSION['is_set_passwd'] ? $_SESSION['passwd'] : ''); ?>">

		<input name="submit" type="submit" value="OK">

	</form>
</body>
</html>
