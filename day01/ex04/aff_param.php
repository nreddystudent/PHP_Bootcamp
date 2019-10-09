#!/usr/bin/php
<?php
	$index = 0; 
	foreach($argv as $value){
		if ($index != 0){
			echo "$value\n";
		}
		$index++;
	}
?>