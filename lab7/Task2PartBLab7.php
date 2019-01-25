<?php
$stack=array("1", "2","3","4","5","6");
array_push($stack, "$", "@","%");
array_shift($stack)."<br>";
echo '<pre>'; print_r($stack); echo '</pre>';
?>