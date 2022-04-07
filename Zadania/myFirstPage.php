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
foreach ($array as $subArray){
?>

<td>
    <td><a href="<?php echo "myFirstPage.php?link=". $subArray['link'] ?>"><?php echo $subArray['name'].'<br>'; ?></a></td>
<!--    <td><a href="myFirstPage.php"></a> --><?php //echo $subArray['link'].'<br>'; ?><!--</a></td>-->
</tr>

<?php
}
?>
</table>

</body>

</html>
