<?php
//from this Main control file
//require the inc file
require_once('inc/config.inc.php');
require_once('inc/function.inc.php');


//define some variables
//$age = 30;
$discount = 0.15;
$itemCost = 10;

$total = calDiscount($discount, $itemCost);
echo "Total cost is {$total}";

$total2 = calDiscount(DEFAULT_DISCOUNT, ITEM_COST);
echo "\nTotal cost2 is {$total2}\n";

//$age = 70;
$data = calDiscountMultiple(70, DEFAULT_DISCOUNT,ITEM_COST);  // returning array to $data 

var_dump($data); //var_dump is for debugging only
print_r($data); //the other way of var_dump

?>

