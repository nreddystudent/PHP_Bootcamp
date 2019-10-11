#!/usr/bin/php
<?php
	function ft_split($string){
		$string = explode(" ", $string);
		sort($string);
		return $string;
}
function ft_sort($a, $b)
{
	$line = "abcdefghijklmnopqrstuvwxyz1234567890!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
	while(($i < strlen($a) || ($i < strlen($b)))){
		$aindex = stripos($line, $a[$i]);
		$bindex = stripos($line, $b[$i]);
		if ($aindex > $bindex){
			return (1);
		}
		elseif($aindex < $bindex){
			return (-1);
		}
		$i++;
	}

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
		usort($fullstring, ft_sort);
		foreach($fullstring as $v)
			echo "$v\n";

	}

?>