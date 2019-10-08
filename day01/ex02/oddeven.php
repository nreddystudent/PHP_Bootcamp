#!/usr/bin/php
<?php
	$f = fopen( 'php://stdin', 'r' );
	echo "Enter a number: ";
	$input = fgets($f);
	str_replace("\n", '', $input);
	echo $input."\n";
	echo $input;
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
?>