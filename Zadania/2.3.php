<?php

function Censorship($sentence){

    $forbidenWords = array("dupa","pupa","tyłek");

    $censor = str_replace($forbidenWords, "*", $sentence);
    return $censor;
}

echo Censorship("Janek nie mów dupa");
echo Censorship("No i tyłek");