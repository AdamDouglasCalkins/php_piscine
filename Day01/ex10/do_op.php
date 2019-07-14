#!/usr/bin/php
<?php  
	$array = array();
	unset($argv[0]);
    foreach($argv as $v){
        $tmp = array_filter(explode(' ', $v));
        foreach ($tmp as $v2)
            $array[] = $v2;
    }
	switch ($array[1]) {
        case ("*") :
            echo $array[0] * $array[2];
            break;
        case ("+") :
            echo $array[0] + $array[2];
            break;
        case ("-") :
            echo $array[0] - $array[2];
            break;
        case ("/") :
		echo $array[0] / $array[2];
            break;
        case ("%") :
            echo $array[0] % $array[2];
            break;
    }
    echo "\n";
?>
