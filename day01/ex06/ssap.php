#!/usr/bin/php
<?php

if ($argc > 1){
	$i = 1;
	while ($i < $argc){
		$string = explode(" ", $argv[$i++]);
		$string = array_filter($string);
		foreach($string as $v){
			$array[] = $v;
		}
	}
	sort($array);
	foreach($array as $v)
		 echo "$v\n";
}
?>