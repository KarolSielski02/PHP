<?php

$option = $_GET['option'];

function addition(){
    $sum = $_GET['firstNumber'] + $_GET['secondNumber'];

        echo "Result of addition: $sum \r\n <br />";
}

function subtraction(){
    $sum = $_GET['firstNumber'] - $_GET['secondNumber'];

        echo "Result of subtraction: $sum \r\n <br />";
}

function multiplication(){
    $sum = $_GET['firstNumber'] * $_GET['secondNumber'];

        echo "Result of multiplication: $sum \r\n <br />";
}

function division(){
if ($_GET['firstNumber'] == 0 || $_GET['secondNumber'] == 0){
    echo "don't divide by 0!";
}
else{
    $sum = $_GET['firstNumber'] / $_GET['secondNumber'];
    echo "Result of division: $sum \r\n <br />";
}
}

    switch ($option) {

        case 'addition':
            echo addition();
            break;

        case 'subtraction':
            echo subtraction();
            break;

        case 'multiplication':
            echo multiplication();
            break;

        case 'division':
            echo division();
            break;
    }
