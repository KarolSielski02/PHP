<?php

$name = $_POST['fname'];
$email = $_POST['femail'];
$number = $_POST['fnumber'];
$password = $_POST['fpassword'];

$list = array($name,$email,$number,$password);
$dataString = "$name, $email, $number, $password";

$valName = preg_match("/^[a-zA-Z]+\s[a-zA-Z]+(\s[a-zA-Z\s]+)*[^0-9]$/", $name);

$valEmail = preg_match("/.@[a-zA-Z]+\.[a-zA-Z]{2,}/", $email);

$valnumber1 = preg_match( "/^[0-9\s]+$/", $number);
$valnumber2 = preg_match( "/^[0-9\-]+$/", $number);

$valPassword = preg_match("/\w{8,20}[^\s]/", $password);

if ($valName && $valEmail && ($valnumber1 || $valnumber2) && $valPassword) {

    $fp = fopen("data.csv", 'a');

    fputcsv($fp, $list);

    fclose($fp);
}

if ($valName != 1){
    echo "Prosze wpisać właściwe imię i nazwisko";
}
if ($valEmail != 1){
    echo "Prosze wpisać właściwy email";
}
if (($valnumber2 || $valnumber1) != 1){
    echo "Prosze wpisać właściwy numer telefonu";
}
if ($valPassword != 1){
    echo "Prosze wpisać właściwe hasło";
}
