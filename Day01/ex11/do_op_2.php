#!/usr/bin/php
<?php  
	if ($argc != 2)
	{
        echo "Incorrect Parameters";
    }
	else
	{
		$str = str_replace(" ", "", $argv[1]);
		$num1 = intval($str);
		$sign = substr(substr($str, strlen((string)$num1)), 0, 1);
		$num2 = substr(substr($str, strlen((string)$num1)), 1);
		if (!is_numeric($num1) || !is_numeric($num2))
		{
			echo "Syntax Error";
		}
		else
		{
			switch ($sign) 
			{
				case ("*") :
					echo $num1 * $num2;
					break;
				case ("+") :
					echo $num1 + $num2;
					break;
				case ("-") :
					echo $num1 - $num2;
					break;
				case ("/") :
					echo $num1 / $num2;
					break;
				case ("%") :
					echo $num1 % $num2;
					break;
			}
		}
	}
	echo "\n";
?>
