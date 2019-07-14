#!/usr/bin/php
<?php  
function	custom_sort($a, $b)
{
	$cus_a = strtolower($a);
	$cus_b = strtolower($b);
	$i = 0;

	$index = "abcdefghijklmnopqrstuvwxyz0123456789!#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
	while (($i < strlen($a)) || ($i < strlen($b)))
	{
		$pos_a = strpos($index, $cus_a[$i]);
		$pos_b = strpos($index, $cus_b[$i]);
		if ($pos_a < $pos_b)
			return (-1);
		else if ($pos_a > $pos_b)
			return (1);
		else
			$i++;
	}
}

    $array = array();
    unset($argv[0]);
    foreach($argv as $v){
        $tmp = array_filter(explode(' ', $v));
        foreach ($tmp as $v2)
            $array[] = $v2;
    }
    usort($array, "custom_sort");
    foreach ($array as $v)
        echo $v."\n";
?>
