#!/usr/bin/php
<?php
	$input = $argv[1];
	$input = array_filter(explode(" ", $input));
	$temp = $input[0];
	$input[] = $temp;
	unset($input[0]);
	$input = array_filter($input);
		foreach($input as $v){
			$fullstring .= $v." ";
		} 
		echo trim($fullstring)."\n";
?>