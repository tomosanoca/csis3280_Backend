<?php
    // initialize some variables
    $productPrice = 100;
    $tax_percent = 0.12;

    function calSalesTax($price,$tax){
        //do we know about $productPrice and $tax_percent here? NO, I only know about $price, $tax
        echo "total cost is $ " . $price * (1+$tax);
    }

    $cost = calSalesTax($productPrice, $tax_percent);
    echo "\nCost is {$cost}";  //cost is nothing

?>
