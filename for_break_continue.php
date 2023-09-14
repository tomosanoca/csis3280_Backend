<?php
    
    require_once('inc/config.inc.php');

    //example of using break within a for loop
    
    for($km=1;;$km++){    //;;if we don"t have condition to check
        //echo "{$km} km is equal to " . $km * KM_TO_MILE . "miles\n";
        if($km > 5)
            break;

            //try to move hte below statemtnt to before the if
        echo "{$km} km is equal to " . $km * KM_TO_MILE . "miles\n";

    }


    echo "\n";

    //example of using continue in a for loop , skip the mob
    $user = array("bob","don","ben","mob","tom");
    for($u=0 ; $u < count($user); $u++){    //count($user) is "5" element of the array 
        if($user[$u] == "mob")
            continue;
        
        echo "Member: {$user[$u]}\n";
        

    }



?>