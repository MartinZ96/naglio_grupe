<?php

$color = "red";
if($_SERVER["REQUEST_METHOD"] == "GET"){
    header("location:./pink.php");
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
</head>
<style>
    .bg-col{
        background-color:<?=$color?>; 
    }
</style>
<body class="bg-col">

</body>
</html>