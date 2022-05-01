<?php

function maiorque($a, $b){
    if ($a > $b) return true;
    else return false;
}

function SequenciaCrescente($array){
    $arr = [];

    if (sizeof($array) == 1) return true;

    for ($i = 1; $i < sizeof($array); $i++){
        array_push($arr, maiorque($array[$i], $array[$i-1]));
    }

    $cont = 0;

    foreach ($arr as $value){
        if ($value == false){
            $cont ++;
        }
    }

    if ($cont > 1) return false;
    else return true;
}