<?php

	// Create
	$cookie_name = 'pontikis_net_php_cookie';
	$cookie_value = 'test_cookie_set_with_php';
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), '/'); // 86400 = 1 day
	/*
	$cookie_name = "user";
	$cookie_value = "John Doe";
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
	*/

	// Read
	$cookie_name = 'pontikis_net_php_cookie';
	if(!isset($_COOKIE[$cookie_name])) {
		print 'Cookie with name "' . $cookie_name . '" does not exist...';
	} else {
		print 'Cookie with name "' . $cookie_name . '" value is: ' . $_COOKIE[$cookie_name];
	}
	/*
	if(!isset($_COOKIE[$cookie_name]))
	{
		echo "Cookie named '" . $cookie_name . "' is not set!";
	}
	else
	{
		echo "Cookie '" . $cookie_name . "' is set!<br>";
		echo "Value is: " . $_COOKIE[$cookie_name];
	}
	*/

	// Delete
	setcookie("user", "", time() - 3600); // set the expiration date to one hour ago
