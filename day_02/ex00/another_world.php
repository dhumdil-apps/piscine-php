#!/usr/bin/php
<?php

	if ($argc > 1)
	{
		$v = array_filter(preg_split("/[ \t]+/", $argv[1]));
		$n = count($v);

		if ($n > 0)
		{
			$arrayKeys = array_keys($v);
			$lastKey = array_pop($arrayKeys);

			foreach ($v as $key => $value)
			{
				echo $value . (($key == $lastKey) ? "\n" : " ");
			}
		}
	}
