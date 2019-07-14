#!/usr/bin/php
<?php
function ft_split($str)
{
	$str = explode(" ", $str);
	$result = array_filter($str, 'strlen');
	sort($result);
	return($result);
}
?>
