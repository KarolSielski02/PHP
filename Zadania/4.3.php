<?php
function simpleMultiplicationTable($size){
    echo '<table style="border: 3px solid black">';
    for ($i = 1; $i <$size; $i++){
        echo "<tr>";
        for ($j = 1; $j <$size; $j++){

            echo '<th style="border: 2px solid grey">'.$j*$i."</th>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
simpleMultiplicationTable(11);
