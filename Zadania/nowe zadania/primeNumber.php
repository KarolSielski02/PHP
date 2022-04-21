<?php

$i = 2;
$isPrime = true;

function isPrimeNumber($n){

    if ($n == 0 || $n == 1){
        $isPrime = false;
    }

    for ($i ; $i <= $n/2; i++){
        if ($n % $i == 0 ){
            $isPrime = false;
        }
    }

    if ($isPrime){
        print("Number " + $n + " is prime number");
    }
    else{
        print("Number " + $n + " in not a prime number");
    }


}

function main (){

    isPrimeNumber(2137);
}

