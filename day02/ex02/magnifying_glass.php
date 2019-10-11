#!/usr/bin/php
<?php
	if ($argc < 2 || !file_exists($argv[1])){
		exit;
	}
	$input = fopen($argv[1], 'r');
	while (!feof($input))
	{
		$lines .= fgets($input);
	}
	$lines = preg_replace_callback("/<a.*title=\"\K(.*)(?=\")/", function($lines){
			return(strtoupper($lines[0]));
		}, $lines);
	$lines = preg_replace_callback("/<a.*?>\K(.*?)(?=<)/", function($lines){
		return(strtoupper($lines[0]));
	}, $lines);
	echo $lines;
?>