<?php
function ft_is_sort($tab)
{
	$array = array();
    foreach($tab as $v){
        $tmp = array_filter(explode(' ', $v));
        foreach ($tmp as $v2)
            $array[] = $v2;
    }
	$default = $array;
	sort($array);

	$flag = true;
	foreach($array as $key=>$value)
		if($value!=$default[$key])
			$flag = false;  

	if($flag)
		return (1);  
	else
		return (0);
}
?>
