<?php
    for($i=1;$i<=10;$i++)
    {
        if($i%2==0){
            print($i."<br>");
			if($i=="10"){goto loop;}     }
    }   
	loop:
	print("odd numbers loop <br>");
    for($i=1;$i<=10;$i++)
    {
	if($i%2!=0){ 
	 print($i."<br>");
	}}



?>