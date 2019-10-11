#!/usr/bin/php
<?php
	$file = fopen('/var/run/utmpx', 'r');
	while ($tmpx = fread($file, 628)){
		$unpack = unpack("a256a/a4b/a32c/id/ie/I2f/a256g/i16h", $tmpx);
		$bigarray[$unpack['c']] = $unpack;
	}
	foreach($bigarray as $v)
		 if($v['e'] == 7){
			echo str_pad(trim($v['a']), 10, " ");
            echo str_pad(trim($v['c']), 12 , " ");
            echo str_pad(trim(date("M",$v['f1'])), 4, " ");
			echo str_pad((date("j",$v['f1'])), 4," ");
			echo date("h:i", $v['f1']);
            echo "\n";
		}
?>