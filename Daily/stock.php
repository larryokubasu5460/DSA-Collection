<?php

/*
You are given an array prices where prices[i] is the price of a given stock on the ith day.
You want to maximize your profit by choosing a single day to buy one stock and choosing a different day in the future to sell that stock.
Return the maximum profit you can achieve from this transaction. If you cannot achieve any profit, return 0.
*/
/**
 * @param Integer[] $prices
 * @return Integer
 */
function maxProfit($prices) {
    if(count($prices) < 1){
        return 0;
    }
    $maxCont = 0;
    $cheap = $prices[0];
    $i = 0;
    $j = count($prices);
    for ($i = 1; $i < $j;$i++){
       if($prices[$i] < $cheap){
            $cheap = $prices[$i];
            continue;
       }
        $maxCont = max($maxCont, ((int)$prices[$i] - (int)$cheap));
    }

    return $maxCont < 0 ? 0 : $maxCont;
}