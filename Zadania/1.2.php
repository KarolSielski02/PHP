<?php

$a = 5;

switch ($a){

    case '1':
        echo "poniedziałek";
        break;

    case '2':
        echo "wtorek";
        break;

    case '3':
        echo "sroda";
        break;

    case '4':
        echo "czwartek";
        break;

    case '5':
        echo "piatek";
        break;

    case '6':
        echo "sobota";
        break;

    case '7':
        echo "niedziela";
        break;

    default:
        echo "tydzien ma 7 dni";
        break;

}