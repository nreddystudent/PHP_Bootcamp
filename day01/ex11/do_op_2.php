#!/usr/bin/php
<?php
	if ($argc == 1)
		echo "Incorrect Parameters";
	else{
		
		if ($op == "*")
			echo ($num1 * $num2. "\n");
		elseif($op == "+"){
			echo ($num1 + $num2. "\n");
		}
		elseif($op == "-"){
			echo ($num1 - $num2. "\n");
		}
		elseif($op == "/"){
			echo ($num1 / $num2. "\n");
		}
		elseif($op == "%"){
			echo ($num1 % $num2. "\n");
		}
	}
?>