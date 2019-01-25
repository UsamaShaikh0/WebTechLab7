<?php
echo " Ascending order sort by value </br>";

$array2=array("Samreen"=>"31",
            "Jahan"=>"41",
            "Warisha"=>"39",
            "Rania"=>"40"); 

asort($array2);

foreach($array2 as $y=>$y_value)
{
echo "Age of ".$y." is : ".$y_value."
"."<br>";
}
echo "<br>";
echo " Ascending order sort by Key </br>";

$array3=array("Sareem"=>"31",
              "Jahan"=>"41",
              "Warisha"=>"39",
              "Rania"=>"40"); 

ksort($array3);
foreach($array3 as $y=>$y_value)
{
echo "Age of ".$y." is : ".$y_value."
"."<br>";
}
echo "<br>";

echo "Descending order sorting by Value </br>";
$age=array("Sareem"=>"31",
            "Jahan"=>"41",
            "Warisha"=>"39",
            "Rania"=>"40");

arsort($age);

foreach($age as $y=>$y_value)
{
echo "Age of ".$y." is : ".$y_value."
"."<br>";
}

echo "<br>";
echo "Descending order sorting by Key </br>";

$array4=array("Sareem"=>"31",
              "Jahan"=>"41",
              "Warisha"=>"39",
              "Rania"=>"40"); 
              
krsort($array4);

foreach($array4 as $y=>$y_value)
{
echo "Age of ".$y." is : ".$y_value."
"."<br>";
} 
?>