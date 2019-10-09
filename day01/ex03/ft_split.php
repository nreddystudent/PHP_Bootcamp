#!/usr/bin/php
<?php
function ft_split($string){
	 $string = explode(" ", $string);
	 sort($string);
	 return $string;
}
?>