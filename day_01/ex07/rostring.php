#!/usr/bin/php
<?php

	if (count($argv) > 1)
	{
		$v = array_filter(preg_split("/\s+/", $argv[1]));
		$n = count($v);

		if ($n > 0)
		{
			$s = array_shift($v);
			array_push($v, $s);

			$arrayKeys = array_keys($v);
			$lastKey = array_pop($arrayKeys);

			foreach ($v as $key => $value)
			{
				echo $value . (($key == $lastKey) ? "\n" : " ");
			}
		}
	}
