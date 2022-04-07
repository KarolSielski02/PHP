<?php

function main(){

    echo forArray();
    echo '<br/>';
    echo whileArray();
    echo '<br/>';
    echo doWhileArray();
    echo '<br/>';
    echo forEachArray();
}
function forArray(){

    $biggest = 0;

    $numbers = range(0, 100);
    shuffle($numbers );
    $numbers = array_slice($numbers ,0,15);
    var_dump($numbers);
    echo '<br/>';



    for ($i = 0; $i <= count($numbers); $i++) {

        if ($biggest < $numbers[$i]) {
            $biggest = $numbers[$i];
        }
    }
    return $biggest;
}
function whileArray(){

    $biggest = 0;
    $i = 0;

    $numbers = range(0, 100);
    shuffle($numbers );
    $numbers = array_slice($numbers ,0,15);
    var_dump($numbers);
    echo '<br/>';



    while ( $i <= count($numbers)) {
        $i++;

        if ($biggest < $numbers[$i]) {
            $biggest = $numbers[$i];
        }
    }
    return $biggest;
}
function doWhileArray(){

    $biggest = 0;
    $i = 0;

    $numbers = range(0, 100);
    shuffle($numbers );
    $numbers = array_slice($numbers ,0,15);
    var_dump($numbers);
    echo '<br/>';



    do{
        $i++;

        if ($biggest < $numbers[$i]) {
            $biggest = $numbers[$i];
        }
    } while ( $i <= count($numbers));

    return $biggest;
}

function forEachArray(){

    $biggest = 0;
    $i = 0;

    $numbers = range(0, 100);
    shuffle($numbers );
    $numbers = array_slice($numbers ,0,15);
    var_dump($numbers);
    echo '<br/>';



    foreach ($numbers as $element){

        if ($biggest < $element) {
            $biggest = $element;
        }
    }

    return $biggest;
}
echo main();