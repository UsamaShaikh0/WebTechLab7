<?php


$var = "vijay";

$alphabetarray = array("apple","ball","cat","dog","elephant","fish","gate","horse","ink","jug","kite","lamp","map","net","orange","parrot","quit","reboot","sun","televsion","umbrella","vanilla","wampserver","xoro","yellow","zedge");


for($x = 0; $x<6; $x++){
   $st = substr($var, $x,1); 
   
      for($y = 0;$y<26;$y++){
   $wt = substr($alphabetarray[$y],0,1);
     if($st==$wt){
   	echo "<b>$st</b>"." ".$alphabetarray[$y]."<br>";
   }
}
}



?>