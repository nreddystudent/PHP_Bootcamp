#!/usr/bin/php
<?php
	function ft_is_sort($input){
		$temp = $input;
		$index = 0;
		$temp1 = $input;
		sort($temp);
		rsort($temp1);
		foreach($input as $v){
			if (($v != $temp[$index]) && ($v != $temp1[$index]))
				return false;
			$index++;
		}
		return true;
	}
?>