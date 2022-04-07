<?php
session_start();

$login = 'Karol';
$password = 'qwerty123';

if ($login == $_POST['Login'] && $password == $_POST['Password']){
    $_SESSION['Login'] = $_POST['Login'];
    $_SESSION['Password'] = $_POST['Password'];
    header("location: SessionLOGEDorNOT.php");
}

else{
    echo "incorrect login or password";
//    echo $_POST['Login'].'<br>';
//    echo $_POST['Password'].'<br>';
//    echo $login.'<br>';
//    echo $password.'<br>';
    header("location: SessionHTML.php?output=Incorrect Login or Password");
    echo "Incorrect Login or Password";
}

