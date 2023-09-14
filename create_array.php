<?php

//create an array
$fruit = ['Banana','Apple',"Kiwi"];
//in general, you can use foreach here to print every elements of this array
//but here use for loop
for($i = 0; $i < count($fruit);$i ++){
    echo "Fruit {$fruit[$i]}\n";
}


$fruit[] = 'Mango';   //adding a new element
var_dump($fruit);  //for debugging 

array_push($fruit,100);  //adding by using array function, it added 100 to the existing $fruit array 
var_dump($fruit); 


//multi dimentional array,  $fruit = {{Banana,100},{Kiwi,50}}
$fruit = array(
    array('Banana',100),
    array('Kiwi',50)
);
var_dump($fruit); 


?>