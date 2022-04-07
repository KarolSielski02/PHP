<?php

function dateOfBirth($PESEL){

    $month = substr($PESEL, 2, 2 );
    $year = substr($PESEL, 0, 2);
    $day = substr($PESEL, 4, 2);

    if ( $month >= 12) {

        $year = 2000 + $year;
        $month = $month - 20;

        echo "Date of Birth: $day - $month - $year";
    }
    else {
        $year = 1900 + $year;

        echo "Date of Birth: $day - $month - $year";
    }


}

echo dateOfBirth("02260705620");