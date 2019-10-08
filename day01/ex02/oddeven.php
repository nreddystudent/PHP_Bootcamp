#!/usr/bin/php
<?php
	$f = fopen( 'php://stdin', 'r' );
	echo "Enter a number: ";
	$input = fgets($f);
	$input = str_replace("\n", '', $input);
	if(is_numeric($input) == true){
		if ($input%2 == 0){
			echo "The number ".$input." is even\n";
		}
		elseif ($input%2!=0) {
			echo "The number ".$input." is odd\n";
		}
	}
	 else{
	 	echo "'".$input."'"." is not a number\n";
	}
	fclose($f);
?>