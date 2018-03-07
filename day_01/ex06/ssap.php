#!/usr/bin/php
<?php

	$v = array_filter(preg_split("/\s+/", implode(" ", $argv)));
	$n = count($v);

	if ($n > 0)
	{
		array_shift($v);
		asort($v);

		foreach ($v as $key => $value)
		{
			echo $value . "\n";
		}
	}
