<?php

    $number = 0;
    while(($number < 1) || ($number > 3)){
        echo "\npls enter a number :" ;
        $number = stream_get_line(STDIN,1024,PHP_EOL);
    }

    switch($number){
        case 1:
            echo "\nyou entered {$number}. Great";
            break;

        case  2:
            echo "\nyou entered {$number}. cool";
            break;

        default :
            echo "\nyou entered {$number}. Thank you";
            break;
    }



?>