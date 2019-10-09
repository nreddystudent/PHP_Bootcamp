#!/usr/bin/php
<?php
	$first = true;
	foreach($argv as $v){
		if ($first)
			$first = false;
		else
			$fullstring .= $v."\n";
	}
	var_dump($fullstring);
	foreach($fullstring as $v)
		echo trim($v)."\n";
?>