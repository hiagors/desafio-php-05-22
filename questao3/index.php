<?php


function sorteio(){
    $arr = [];
    for ($i = 0; $i < 20; $i++){
        array_push($arr, rand(1,10));
    }
    $arr_values = array_count_values($arr);

    echo '<br>';
    echo('Array sorteado: [');
    for ($i = 0; $i < 20; $i++){
        echo($arr[$i]); 
        echo(', ');
    }
    echo('] <br>');
    echo('Os números que não se repetem são o ');
    foreach($arr_values as $key => $value){
        if($value == 1){
            echo $key . ', ';
        }
    }
}

var_dump(sorteio());