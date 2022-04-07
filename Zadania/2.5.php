<?php

function main($switch, $a, $b, $h){



    switch ($switch){
        case 1:
            echo rectangle($a, $b);
            break;
        case 2:
            echo triangle($a, $h);
            break;
        case 3:
            echo trapeze($a,$b,$h);
            break;
    }
}

function rectangle($a, $b){
    $area = $a * $b;
    return $area;
}

function triangle($a, $h){
    $area = ($a * $h)/2;
    return $area;
}

function trapeze ($a, $b, $h){
    $area = (($a+$b)*$h)/2;
    return $area;
}



    echo main(2,5,10,7);
