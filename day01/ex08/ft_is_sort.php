#!/usr/bin/php
<?php
	function ft_is_sort($input){
		$temp = $input;
		$index = 0;
		sort($temp);
		foreach($input as $v){
			if ($v != $temp[$index++])
				return false;
		}
		return true;
	}
?>