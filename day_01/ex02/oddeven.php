#!/usr/bin/php
<?php
	while (($line = readline("Enter a number: ")) != false || is_numeric($line))
	{
		if (is_numeric($line))
		{
			echo "The number ". $line ." is ". (($line % 2) ? "odd" : "even") . "\n";
		}
		else
		{
			echo "'". $line ."' is not a number\n";
		}
	}
