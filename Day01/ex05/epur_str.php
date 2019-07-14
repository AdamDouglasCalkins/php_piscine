#!/usr/bin/php
<?php
    $array = array();
    unset($argv[0]);
    foreach($argv as $v){
        $tmp = array_filter(explode(' ', $v));
        foreach ($tmp as $v2)
            $array[] = $v2;
	}

	$i = 0;
	foreach ($array as $v)
	{
		echo $v;
		if ($i < (count($array) - 1))
		{
			echo " ";
		}
		$i++;
	}
	echo "\n";
?>
