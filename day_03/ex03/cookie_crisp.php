<?php
	try
	{
		switch ($_GET['action'])
		{
			case 'set':
				setcookie($_GET['name'], $_GET['value'], time() + (86400), '/'); // 86400 = 1 day
				break;

			case 'get':
				foreach ($_COOKIE as $key => $value)
				{
					if ($key == $_GET['name'])
					{
						echo $value;
					}
				}
				break;

			case 'del':
				setcookie($_GET['name'], "", time() - 3600); // set the expiration date to one hour ago
				break;

			default:
				break;
		}
	}
	catch (Exception $e) {}
