<?php

function subtraction(){
    $sum = $_GET['firstNumber'] - $_GET['secondNumber'];

    echo "Result of subtraction: $sum \r\n <br />";
}

echo subtraction();