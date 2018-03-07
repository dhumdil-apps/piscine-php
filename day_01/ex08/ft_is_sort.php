<?php

	function ft_is_sort($v)
	{
		$is_sorted = true;
		$v_sorted = $v;
		sort($v_sorted);

		foreach($v as $key => $value)
		{
			if($value != $v_sorted[$key])
			{
				$is_sorted = false;
			}
		}
		return $is_sorted;
	}
