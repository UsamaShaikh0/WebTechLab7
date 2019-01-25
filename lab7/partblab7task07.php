<?php

for($x=0;$x<10;$x++){
	$myarray = range(1, 200);
    shuffle($myarray);
    echo $myarray[$x].' ';
   if($myarray[$x]==1){
    	echo " Found You ";
    }
    
 
}


?>