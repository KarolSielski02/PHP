<?php

$a = 5;
$b = 3;
$c = 4;

if ($a>$b && $a>$c){
    if ($a*$a == $b * $b + $c * $c){
        echo "it's a Pythagorean theorem";
   }
     else{
      echo "it's not a Pythagorean theorem ";
     }
}

elseif ($c>$b && $c>$a){
    if ($c*$c == $b * $b + $a * $a) {
    echo "it's a Pythagorean theorem";
}
        else{
            echo "it's not a Pythagorean theorem ";
        }
}

else{
    if ($b * $b == $a * $a + $c * $c) {
        echo "it's a Pythagorean theorem";
    }
       else{
          echo "it's not a Pythagorean theorem ";
       }
}
