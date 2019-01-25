
<?php 

function sum($num) { 
    $sum = 0; 
    for ($i = 0; $i < strlen($num); $i++){ 
        $sum += $num[$i]; 
    } 
    return $sum; 
} 
  
$num = "71"; 
if ($num == "144") {
    echo "It’s your lucky day today";
} else {
    echo "It’s not your lucky day today";
}
?>