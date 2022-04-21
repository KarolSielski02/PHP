<?php

function multiplication(){
    $sum = $_GET['firstNumber'] * $_GET['secondNumber'];

    echo "Result of multiplication: $sum \r\n <br />";
}

echo multiplication();