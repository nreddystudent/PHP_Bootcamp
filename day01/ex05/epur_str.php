#!/usr/bin/php
<?php
	$input = $argv[1];
	$input = array_filter(explode(" ", $input));
	foreach($input as $v){
		$fullstring .= $v." ";
	}
	echo trim($fullstring)."\n";
?>