<?php

for($i=1; $i<=50; $i++){
	if($i%3 ==0  ){
		echo "multiple of 3, "." Star <br>";

	}
	if ($i%5 == 0){
		echo "multiple of 5, "." Struck <br>";
	
	}
	if ( $i%3 == 0 && $i%5 == 0 )
		echo "both "." StarStruck <br>";
}

?>