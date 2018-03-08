#!/usr/bin/php
<?php

	// "Tuesday 12 November 2013 13:02:21"

	date_default_timezone_set('Europe/Paris');

	if ($argc == 2)
	{
		$v = array_filter(explode(" ", $argv[1]));
		$n = count($v);

		if ($n == 5)
		{
			try
			{
				// print_r($v);

				$day = translate_day($v[0]);
				$days = verify_days($v[1]);
				$month = translate_month($v[2]);
				$years = verify_years($v[3]);
				$time = explode(":", $v[4]);

				// print_r($time);

				$hours = verify_hours($time[0]);
				$minutes = verify_minutes($time[1]);
				$seconds = verify_seconds($time[2]);


				if (is_err($day, $days, $month, $years, $hours, $minutes, $seconds))
				{
					print_err();
				}
				else
				{
					echo(strtotime($day . $days . $month . $years . $hours . $minutes . $seconds) . "\n");
				}
			}
			catch (Exception $e)
			{
				print_err();
			}
		}
		else
		{
			print_err();
		}
	}

	function translate_day($day)
	{
		$day = strtolower($day);

		switch ($day)
		{
			case 'lundi':		return 'Monday';
			case 'mardi':		return 'Tuesday';
			case 'mercredi':	return 'Wednesday';
			case 'jeudi':		return 'Thursday';
			case 'vendredi':	return 'Friday';
			case 'samedi':		return 'Saturday';
			case 'dimanche':	return 'Sunday';
			default:			return "err";
		}
	}

	function verify_days($days)
	{
		if (is_numeric($days))
		{
			if ($days >= 0 && $days <= 31)
			{
				return ($days);
			}
		}
		return (-1);
	}

	function translate_month($month)
	{
		$month = strtolower($month);

		switch ($month)
		{
			case 'janvier':		return 'January';
			case 'février':		return 'February';
			case 'mars':		return 'March';
			case 'avril':		return 'April';
			case 'mai':			return 'May';
			case 'juin':		return 'June';
			case 'juillet':		return 'July';
			case 'août':		return 'August';
			case 'septembre':	return 'September';
			case 'octobre':		return 'October';
			case 'novembre':	return 'November';
			case 'décembre':	return 'December';
			default:			return "err";
		}
	}

	function verify_years($years)
	{
		if (is_numeric($years))
		{
			if ($years >= 1970)
			{
				return ($years);
			}
		}
		return (-1);
	}

	function verify_hours($hours)
	{
		if (is_numeric($hours))
		{
			if ($hours >= 0 && $hours < 24)
			{
				return ($hours);
			}
		}
		return (-1);
	}

	function verify_minutes($minutes)
	{
		if (is_numeric($minutes))
		{
			if ($minutes >= 0 && $minutes < 60)
			{
				return ($minutes);
			}
		}
		return (-1);
	}

	function verify_seconds($seconds)
	{
		if (is_numeric($seconds))
		{
			if ($seconds >= 0 && $seconds < 60)
			{
				return ($seconds);
			}
		}
		return (-1);
	}

	function is_err($day, $days, $month, $years, $hours, $minutes, $seconds)
	{
		if ($day == 'err' || $days == -1 || $month == 'err' || $years == -1 || $hours == -1 || $minutes == -1 || $seconds == -1)
		{
			return (true);
		}
		return (false);
	}

	function print_err()
	{
		echo "Wrong Format\n";
	}
