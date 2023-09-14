<?php
    //example of a while loop, doing it from 1 to 4
    $count = 1;
    while($count < 5){
        echo "{$count} squared is " . pow($count,2) . "\n";
        $count++;
    }


    //after the loop count = 5
    do{   //do it once 5
        echo "{$count} squared is " . pow($count,2) . "\n";
        $count--;

    }while($count < 4);

?>