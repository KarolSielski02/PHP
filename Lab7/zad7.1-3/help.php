<?php

$id=$_GET['id'];
$imgDir="img";
$dir = scandir($imgDir);
array_shift($dir);
array_shift($dir);
$imgName=$dir["$id"];
echo "<img src=\"$imgDir/$imgName\" alt=\"$imgName\"><br>";
$count = count($dir);

if($id<0 || $id>=$count || !is_numeric($id)){
    $imgId=0;
}

$imgName=$dir["$id"];
$first=0;
$last = $count-1;
if($id<$count-1){
    $next=$id+1;
}
else{
    $next = $count-1;
}
if($id>0){
    $prev = $id-1;
}
else{
    $prev = 0;
}

?>
<!DOCTYPE html>
<style>
    button{
        size: auto;
        color: dodgerblue;
        border-radius: 10px;
        background-color: white;
        border-color: cornflowerblue;
    }

</style>

</html>
<a href="7.1.php"><button>Powrót</button></a>
<?php
echo '<a href="help.php?id='.$prev.'"><button>Poprzednie</button></a>';

echo '<a href="help.php?id='.$next.'"><button>Następne</button></a>';
?>

