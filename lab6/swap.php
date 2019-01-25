<?php

$a = 14;
$b = 42;

echo "The numbers before swapping are: <br/> ";
echo "a =".$a." and b=".$b . "<br/>";

$temp = $a;
$a = $b;
$b = $temp;
 
echo "The numbers after swapping are: <br/>";
echo "a =".$a." and b=".$b;
?>