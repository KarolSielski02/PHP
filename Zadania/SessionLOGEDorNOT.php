<?php
session_start();
echo "logged in correctly".'<br>';
if (!isset($_SESSION['Login']) && !isset($_SESSION['Password'])) {
    header("Location: SessionHTML.php");
}
?>

<html>
<style>button {
        border-radius: 10px;
        border-color: cornflowerblue;
        border-bottom-color: cornflowerblue;
        color: aliceblue;
        background-color: cornflowerblue;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;

    }
    button:hover{
        color: lightblue;
        border-collapse: separate;

    }
</style>

<a href="SessionLOGOUT.php"><button type="button" name="button">Log out</button></a>
</html>

