<?php
$imgDir="img";
$dir = scandir($imgDir);
array_shift($dir);
array_shift($dir);
$count = count($dir);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        img{
            margin: 20px;
            border-radius: 50%;
            border-radius: 50%;
            padding: 5px;
            width: 210px;
            border-color: black;
        }
        img:hover{
            -moz-box-shadow: 0 0 10px #000000;
            -webkit-box-shadow: 0 0 10px #000000;
            box-shadow: 0 0 10px #000000;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Galeria</title>
</head>
<body>
<?php
$id=1;
foreach ($dir as $a){
    echo "<a href='help.php?id=".$id."'>";
    echo "<img src=\"$imgDir/$a\" alt=\"$a\" height='220px' width='200px'>";
    echo "</a>";
    $id++;
}
?>

</body>
