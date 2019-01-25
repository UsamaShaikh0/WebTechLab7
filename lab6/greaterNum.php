<?php

function testNumber($n){

    $r = ($n > 30 ? "greater than 30"
    : ($n > 20 ? "greater than 20"
    : ($n >10 ? "greater than 10"
    : "Input number less than 10"))); 


    echo $n." is ".$r."<br/>";

}

testNumber(42);
testNumber(24);
testNumber(14);
testNumber(4);
?>