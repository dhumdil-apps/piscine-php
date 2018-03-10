<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Rush00 - PHP Piscine | Academy+Plus">

	<title>Session</title>

	<link href="src/css/btn.css" type="text/css" rel="stylesheet">
</head>
<body>
	<form id="index.php" method="GET" action="index.php">

		<label for="login">Username:</label>
		<input type="text" name="login" value="<?php echo (isset($SESSION['login'])) ? $SESSION['login'] : ''; ?>" required autofocus>

		<label for="passwd">Password:</label>
		<input type="text" name="passwd" value="<?php echo (isset($SESSION['passwd'])) ? $SESSION['passwd'] : ''; ?>" required>

		<input name="submit" type="submit" value="OK">

	</form>
</body>
</html>
