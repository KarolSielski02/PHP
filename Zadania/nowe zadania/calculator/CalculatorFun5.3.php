<?php

$option = $_GET['option'];

switch ($option) {

    case 'addition':
        include 'addition.php';
        break;

    case 'subtraction':
        include 'subtraction.php';
        break;

    case 'multiplication':
        include 'multiplication.php';
        break;

    case 'division':
        include 'division.php';
        break;
}
