#!/usr/bin/php
<?php

$month = array(
	1 => "janvier",
	2 => "février",
	3 => "mars",
	4 => "avril",
	5 => "mai",
	6 => "juin",
	7 => "juillet",
	8 => "août",
	9 => "septembre",
	10 => "octobre",
	11 => "novembre",
	12 => "décembre");

$day = array(
	1 => "lundi",
	2 => "mardi",
	3 => "mercredi",
	4 => "jeudi",
	5 => "vendredi",
	6 => "samedi",
	7 => "dimanche");

 if($argc > 1){
	date_default_timezone_set('Europe/Paris');
		$date = explode(" ", $argv[1]);
		$date_colon = explode(":", date[2]);
		if (count($date) != 5 || !preg_match('/^[0][1-9]|[1-2][0-9]|[3][0-1]$/', $date[1]) || 
		 preg_match('/(?:\d{3,})/', $date[1]) || 
		 !preg_match('/^\d{4}$/', $date[3]) || 
		 !preg_match('/^([0-1][0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/', $date[4], $date[4])){
			echo "Wrong Format\n";
			exit;
		}
			$indexd = array_search(lcfirst($date[0]), $day);
			$indexm = array_search(lcfirst($date[2]), $month);
			if (!$indexm || !$indexd){
				echo "Wrong Format\n";
				exit ;
			}
			echo mktime($date[4][1], $date[4][2], $date[4][3], $indexm , $date[1], $date[3])."\n"; 
	 }
?>