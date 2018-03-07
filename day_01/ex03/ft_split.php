<?php

	function ft_split($s)
	{
		$v = array_filter(preg_split("/\s+/", $s));
		asort($v);
		return ($v);
	}
