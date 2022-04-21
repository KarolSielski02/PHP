<?php

function addition(){
    $sum = $_GET['firstNumber'] + $_GET['secondNumber'];

    echo "Result of addition: $sum \r\n <br />";}

echo addition();
