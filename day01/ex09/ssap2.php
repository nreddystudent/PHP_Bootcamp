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
			echo trim($v)."\n";
		}
	}
?>