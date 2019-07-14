#!/usr/bin/php
<?php 
// Use ls command to shell_exec 
// function 
$output = shell_exec('php -S localhost:8100 -e');
  
// Display the list of all file 
// and directory 
echo $output; 
?>
