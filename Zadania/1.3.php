<?php

$month = 2;
$year = 2000;

if ($year % 4 == 0 && $month == 2 && $year % 400 == 0 || $year % 100!= 0 ){

    echo "that month has 29 days";
}
elseif ($month == 2 ){

    echo "that month has 28 days";
}
elseif ($month%2 == 0 && !($month == 8) && !($month == 2)){

    echo "that month has 30 days";
}
else{
    echo "that month has 31 days";
}


