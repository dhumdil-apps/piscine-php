#!/usr/bin/php
<?php

	if ($argc == 2)
	{
		try
		{
			$html = file_get_contents($argv[1]);

			// (<a )(.*|[^]+)(<\/a>)
			preg_match_all("/(<a )(.*)(<\/a>)/", $html, $matches, PREG_OFFSET_CAPTURE);

			var_dump($matches);

			/*
			$v1 = array();
			$v2 = array();

			foreach ($matches[0] as $key => $value)
			{
				array_push($v1, $value[1]);
			}

			foreach ($matches[count($matches) - 1] as $key => $value)
			{
				array_push($v2, $value[1]);
			}

			$v = array();
			$n = count($v1);

			for ($i = 0; $i < $n; $i++)
			{
				array_push($v, substr($html, $v1[$i], ($v2[$i] - $v1[$i] + 1)));
				echo $v1[$i] ." -> ". $v2[$i] ."\n";
			}

			print_r($v);
			*/

			// (title=\")(.*?)(\")

			// echo ($html); // file_put_contents($argv[1], $html);
		}
		catch (Exception $e) {}
	}
