<?php

session_start();


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $animal['species'] = $_POST['species'];
    $animal['name'] = $_POST['name'];
    $animal['age'] = $_POST['age'];
    $_SESSION['zoo'][] = $animal;
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form class= "form" action="" method="get">
        <br>
        <div class= "form-group">
        <label for="">Gyvunas</label>
        <input type="text" name="species">
        </div>
         <br>
        <div class= "form-group">
         <label for="">Vardas</label>
        <input type="text" name="name">
        </div>
        <br>
        <div class= "form-group">
         <label for="">Amzius</label>    
        <input type="text" name="age">
        </div>
        <br>
            <button class="btn btn-primary" type="submit">GET forma</button>
    </form>
    <table class='table'>
        <tr>
            <th>Rusis</th>
            <th>Vardas</th>
            <th>Amzius</th>
        </tr>

            <?php foreach ($_SESSION['zoo'] as $animal){  ?>
        <tr>
            <td><?=$animal['species'] ?></td>
            <td><?=$animal['name'] ?></td>
            <td><?=$animal['age'] ?></td>
            <td></td>
            <td></td>
        </tr>
            <?php }  ?>
    </table>
</body>
</html>