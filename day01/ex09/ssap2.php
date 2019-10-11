#!/usr/bin/php
<?php
	function ft_split($string){
		$string = explode(" ", $string);
		sort($string);
		return $string;
}
	if($argc > 1){
		unset($argv[0]);
		$argv = array_filter($argv);
		foreach($argv as $v){
			if(strpos($v, ' ' )!= false)
			{
				$strings = ft_split($v);
				foreach($strings as $value){
					$fullstring[] = $value;}
			}
			else
			{
				$fullstring[] = $v;			
			}
		}
		natcasesort($fullstring);
		foreach($fullstring as $v){
			if (ctype_alpha($v))
			echo trim($v)."\n";
		}
		$numbers = $fullstring;
		rsort($numbers);
		foreach($numbers as $v){
			if (ctype_digit($v))
			echo trim($v)."\n";
		}
		foreach($fullstring as $v){
			if (!ctype_digit($v) && !ctype_alpha($v))
			echo trim($v)."\n";
		}
	}

?>