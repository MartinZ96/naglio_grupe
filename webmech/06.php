<!-- Padarykite puslapį su dviem mygtukais. Mygtukus įdėkite į dvi 
skairtingas formas- vieną GET ir kitą POST. Nenaudodami jokių 
konkrečių $_GET ar $_POST reikšmių, nuspalvinkite foną žaliai, 
kai paspaustas mygtukas iš GET formos ir geltonai- kai iš POST. -->

<!-- Pakartokite 6 uždavinį. Papildykite jį kodu, kuris naršyklę po POST 
metodo peradresuotų tuo pačiu adresu (t.y. į patį save) jau GET metodu. -->


<?php

$color = "green";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $color = "yellow";
    header("location:./06.php");
    die;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    .bg-col{
        background-color:<?=$color?>; 
    }
</style>
</head>
<body class="bg-col">
    <form action="" method="get">
        <button type="submit">GET</button>
            </form>
    <form action="" method="post">
        <button type="submit">POST</button>
            </form>
</body>
</html>