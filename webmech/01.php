<!-- Sukurti puslapį su juodu fonu ir su dviem linkais (nuorodom) į save. 
Viena nuoroda su failo vardu, o kita nuoroda su failo vardu ir GET duomenų 
 perdavimo metodu perduodamu kintamuoju color=1. Padaryti taip, kad paspaudus ant nuorodos su 
 perduodamu kintamuoju fonas nusidažytų raudonai, o paspaudus ant nuorodos be perduodamo kintamojo, 
 vėl pasidarytų juodas. -->
<?php
$color = "black";
echo("<br>");
echo("<br>");
if(isset($_GET['color'])){
    $color = "red";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pirma užduotis</title>
</head>
<style>
    .bg-col{
        background-color:<?=$color?>; font-size: 24px;
    }

</style>

<body class="bg-col">
    <a href="./01.php">01</a>
    <br>
    <br>
    <a href="./01.php?color=1">02</a>
</body>

</html>