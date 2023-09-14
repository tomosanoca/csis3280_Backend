<?php
    //example of function with type hinting
    function calDiscount(float $discount, float $price){
        return $price * ( 1- $discount);
    }

    function calDiscountMultiple(int $age, float $discount, float $price){
        if($age > 64){
            $discountVal = 0.25;
        }
        else{
            $discount = $discount;
        }
        $cost =  $price * ( 1 - $discount);
        
        //create and use array here to return multiple values ,
        // PHP is weak language, so no need to declare empty array 
        $returnVal[] = $discountVal;
        $returnVal[] = $cost;

        return $returnVal;

    }






?>