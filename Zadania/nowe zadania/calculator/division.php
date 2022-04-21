<?php

function division(){
    if ($_GET['firstNumber'] == 0 || $_GET['secondNumber'] == 0){
        echo "don't divide by 0!";
    }
    else{
        $sum = $_GET['firstNumber'] / $_GET['secondNumber'];
        echo "Result of division: $sum \r\n <br />";
    }
}

echo division();