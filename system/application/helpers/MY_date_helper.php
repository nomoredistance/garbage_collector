<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('get_relative_time'))
{
	function get_relative_time($mysql_datetime, $lang='en')
	{
		$str = array(
					'second_singular' 	=> array(
												'en' => 'one second ago',
												'id' => 'satu detik yang lalu'
											),
					'second_plural' 	=> array(
												'en' => ' seconds ago',
												'id' => ' detik yang lalu'
											),
					'minute_singular' 	=> array(
												'en' => 'one minute ago',
												'id' => 'semenit yang lalu'
											),
					'minute_plural' 	=> array(
												'en' => ' minutes ago',
												'id' => ' menit yang lalu'
											),
					'hour_singular' 	=> array(
												'en' => 'one hour ago',
												'id' => 'sejam yang lalu'
											),
					'hour_plural' 	=> array(
												'en' => ' hours ago',
												'id' => ' jam yang lalu'
											),
					'day_singular' 	=> array(
												'en' => 'yesterday',
												'id' => 'kemarin'
											),
					'day_plural' 	=> array(
												'en' => ' days ago',
												'id' => ' hari yang lalu'
											),
					'month_singular' 	=> array(
												'en' => 'one month ago',
												'id' => 'sebulan yang lalu'
											),
					'month_plural' 	=> array(
												'en' => ' months ago',
												'id' => ' bulan yang lalu'
											),
					'year_singular' 	=> array(
												'en' => 'one year ago',
												'id' => 'setahun yang lalu'
											),
					'year_plural' 	=> array(
												'en' => ' years ago',
												'id' => ' tahun yang lalu'
											)
				);
		
		$delta = strtotime($mysql_datetime, time());
		
		$delta = time() - strtotime($mysql_datetime);
		
		$second = 1;
		$minute = 60 * $second;
		$hour = 60 * $minute;
		$day = 24 * $hour;
		$month = 30 * $day;

		if ($delta < 1 * $minute)
		{
		  return floor($delta / $second) == 1 ? $str['second_singular'][$lang] : floor($delta / $second) . $str['second_plural'][$lang];
        }
		if ($delta < 2 * $minute)
		{
		  return $str['minute_singular'][$lang];
		}
		if ($delta < 45 * $minute)
		{
		  return floor($delta / $minute) . $str['minute_plural'][$lang];
		}
		if ($delta < 90 * $minute)
		{
		  return $str['hour_singular'][$lang];
		}
		if ($delta < 24 * $hour)
		{
		  return floor($delta / $hour) . $str['hour_plural'][$lang];
		}
		if ($delta < 48 * $hour)
		{
		  return $str['day_singular'][$lang];
		}
		if ($delta < 30 * $day)
		{
		  return floor($delta / $day) . $str['day_plural'][$lang];
		}
		if ($delta < 12 * $month)
		{
		  return floor($delta / $month) <= 1 ? $str['month_singular'][$lang] : floor($delta / $month) . $str['month_plural'][$lang];
		}
		else
		{
		  $delta_years = floor(floor($delta / $day) / 365);
		  return $delta_years <= 1 ? $str['year_singular'][$lang] : $delta_years + $str['year_plural'][$lang];
		}
	}
}
