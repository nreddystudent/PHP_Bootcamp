#!/usr/bin/php
<?php
	if ($argc == 1)
		echo "Incorrect Parameters\n";
	else{
		$num1 = trim($argv[1]);
		$op = trim($argv[2]);
		$num2 = trim($argv[3]);
		if ($op == "*")
			echo ($num1 * $num2. "\n");
		elseif($op == "+"){
			echo ($num1 + $num2. "\n");
		}
		elseif($op == "-"){
			echo ($num1 - $num2. "\n");
		}
		elseif($op == "/" && $num2 != 0){
			echo ($num1 / $num2. "\n");
		}
		elseif($op == "%" && $num2 != 0){
			echo ($num1 % $num2. "\n");
		}
		else{
			echo "Error\n";
		}
	}
?>