<?php
$array = array
(
    array('name'=>"Sklep", 'link'=>"shop", 'contents'=>"Witaj w sklepie"),
    array('name'=>"Koszyk", 'link'=>"cart", 'contents'=>"To twój koszyk"),
    array('name'=>"Konto", 'link'=>"account", 'contents'=>"To ty"),
    array('name'=>"Kontakt", 'link'=>"ust-str", 'contents'=>"Zmien ustawienia")
);

?>

<!DOCTYPE html>

<html>

<style>
    h1 {text-align: center;}
    p {text-align: center;}
    div {text-align: center;}
    td {text-align: center;}
</style>

<head>
    <title>myFirstPage</title>
</head>

<body>

<h1><font size = "+30">WITAMY!</font></h1>
<table align="center" >
<?php
    foreach ($array as $subArray) {
        $format = '<li><a href="myFirstPage.php?link=%s">%s</a></li>';
        echo sprintf($format, $subArray['link'], $subArray['link']);
    }
if (isset($_GET["link"])) {
    # code...
    $siteFound = false;
    foreach ($array as $subArray) {
        if ($_GET["link"]==$subArray['link']) {
            echo "<h1>".$subArray['name']."</h1>";
            echo "<span>".$subArray["contents"]."</span>";
            $siteFound = true;
            break;
        }
    }
    if (!$siteFound) {
        echo "podana strona nie została znaleziona, sprawdź link i spróbuj ponownie";
        echo '<a href="myFirstPage.php"><button>Zabierz mnie stąd!</button></a>';
    }
}else{
    echo "<h1>".$array[0]["name"]."</h1>";
    echo "<span>".$array[0]["contents"]."</span>";
?>

<td>
    <td><a href="<?php echo "myFirstPage.php?link=". $subArray['link'] ?>">
            <?php echo $subArray['name'].'<br>';?>
        </a></td>
</tr>

<?php
}
?>
</table>

</body>

</html>
