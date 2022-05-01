<?php

function primo($x){
    $d = 0;
    if ($x <= 1) return FALSE;
    for($n = $x; $n >= 1; $n--){
        if(($x % $n) == 0){
            $d++;
        }
    }
    if ($d == 2){
        return true;
    } else return false;
}

function Primos($inicial, $final){
    $arr = [];
    for($i = $inicial + 1; $i < $final; $i++){
        if (primo($i)){
            array_push($arr, $i);
        }
    }
    return $arr;
}
