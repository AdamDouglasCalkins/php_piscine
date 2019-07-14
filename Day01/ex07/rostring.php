#!/usr/bin/php
<?php
	$array = array();
    unset($argv[0]);
	while($argc > 2) {
    	array_pop($argv);
    $argc--;
	} 
    foreach($argv as $v){
        $tmp = array_filter(explode(' ', $v));
        foreach ($tmp as $v2)
            $array[] = $v2;
    }
	$word = $array[0];
	unset($array[0]);
	$array[] = $word;
    //foreach ($array as $v)
	//    echo $v."\n";
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
