<!-- Sukurti puslapį panašų į 1 uždavinį, tiktai antro linko su perduodamu 
kintamuoju nedarykite, o vietoj to padarykite, URL eilutėje ranka įvedus 
GET kintamąjį color su RGB spalvos kodu (pvz color=ff1234) puslapio
fono spalva pasidarytų tokios spalvos. -->

<!-- Perdarykite 2 uždavinį taip, kad spalvą būtų galimą įrašyti į 
laukelį ir ją išsiųsti mygtuku GET metodu formoje. -->


<?php
$color = "white";
echo("<br>");
echo("<br>");
if(isset($_GET['color'])){
    $color = $_GET['color'];
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
    <a href="./02.php">Pavadinimas</a>
    <br>
    <br>
    <form action="" method="get">
    <input type="text" name="color">
    <button type="submit">Spausk</button>
    </form>
</body>

</html>