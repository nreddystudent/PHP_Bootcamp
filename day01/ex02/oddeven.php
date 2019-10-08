#!/usr/bin/php
<?php
	$input = readline("Enter a number: ");
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