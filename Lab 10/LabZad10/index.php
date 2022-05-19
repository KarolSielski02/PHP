<?php
$servername = "localhost";
$username = "root";
$password = "";

$db = mysqli_connect("localhost", "root", null , "cars");

if(isset($_GET['mainId'])){
    $mainId=$_GET['mainId'];
}
else{
    $mainId=1;
}
if($mainId>1){
    $prev=$mainId-1;
}
else{
    $prev = 1;
}
$idMax = $mainId*5;
$idMin = $idMax-4;
$next=$mainId+1;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cars</title>
    <style>
        table{
            border-collapse: collapse;
        }
        td{
            border: 2px solid black;
        }
    </style>
</head>
<body>
<?php
$sql = 'SELECT id,marka,model FROM cars where id<='.$idMax. " and id>=".$idMin;
echo '<table>';
echo '<tr>';
echo "<td>id</td>";
echo '<td>marka</td>';
echo '<td>model</td>';
echo '<td>Read more</td>';
echo '</tr>';
foreach ($db->query($sql) as $row) {
    echo '<tr>';
    echo "<td>".$row['id'] . "</td>";
    echo "<td>".$row['marka'] . "</td>";
    echo "<td>".$row['model'] . "</td>";
    echo '<td><a href="carInfo.php?id=' . $row['id'] . '">Read more</a> <br></td>';
    echo '</tr>';
}
echo '</table>';
?>
<br>
<?php
echo '<button style="border-radius: 5px;  border: 2px  mediumseagreen; background-color: mediumseagreen; width: 90px; height: 30px"><a style="text-decoration: none; color: white; font-size: 100%; font-family: Helvetica" href="index.php?mainId=' .$prev.'"><< Previous</a></button>';
echo '<button style="border-radius: 5px; position: absolute; left: 110px; border: 2px  mediumseagreen; background-color:  mediumseagreen; width: 90px; height: 30px"><a style="text-decoration: none; color: white; font-size: 100%; font-family: Helvetica" href="index.php?mainId='.$next.'">Next >></a></button>';
?>

</body>
</html>
