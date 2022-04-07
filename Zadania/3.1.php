<?php

function main($a){

    $numbers = range(0, 100);
    shuffle($numbers );
    $numbers = array_slice($numbers ,0,15);
    var_dump($numbers);
    echo '<br/>';

    echo $numbers[$a];
}

echo main(4);