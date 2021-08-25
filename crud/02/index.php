<?php

include('./functions.php');

if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])){
    $car =  edit();
 
}

if($_SERVER['REQUEST_METHOD'] == 'POST' && !isset($_POST['id'])){
    store();
    header('location:./index.php');
    die;

}
if($_SERVER['REQUEST_METHOD'] == 'POST' && !isset($_POST['model'])){
    destroy();
    header('location:./index.php');
    die;
}
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id'] )){
    update();
    header('location:./index.php');
    die;
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <!-- main forma -->
    <!-- value reiksme cia yra masinos atitinkamas kintamasis -->
    <form action="" method="POST">
        <div>
            <label for="manufacturer ">Gamintojas</label>
            <input type="text" class="form-control" name="manufacturer" value="<?= (isset($car))? $car['manufacturer'] : ""?>">
        </div>
        <div>
            <label for="model">Modelis</label>
            <input type="text" class="form-control" name="model" value="<?= (isset($car))? $car['model'] : ""?>">
        </div>        
        <div>
            <label for="year">Metai</label>
            <input type="text" class="form-control" name="year" value="<?= (isset($car))? $car['year'] : ""?>">
        </div>     
        <div>
            <label for="color ">Spalva</label>
            <input type="text" class="form-control" name="color" value="<?= (isset($car))? $car['color'] : ""?>">
        </div>
        <div>
            <label for="distance ">Rida</label>
            <input type="text" class="form-control" name="distance" value="<?= (isset($car))? $car['distance'] : ""?>">
        </div>
        <div>
            <label for="fuel ">Kuro tipas</label>
            <input type="text" class="form-control" name="fuel" value="<?= (isset($car))? $car['fuel'] : ""?>">
        </div>
                <?php if(!isset($car)){
                    echo '<button class = "btn btn-primary" type="submit">Pridėti mašiną</button>';
                }else{
                    echo '<input type="hidden" name="id" value="'.$car['id'].' ">
                    <button class="btn btn-info" type="submit">Atnaujinti mašiną</button>';
                } ?>
    </form>
    <!-- lentele, kur viskas atsivazduos ka irasysim -->
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th> 
                <th scope="col">Gamintojas</th>
                <th scope="col">Modelis</th>
                <th scope="col">Metai</th>
                <th scope="col">Spalva</th>
                <th scope="col">Rida</th>
                <th scope="col">Kuro tipas</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <?php foreach(getData() as $car){ ?>
        <tbody>
            <tr>
            <!-- suvedus duomenis i forma, butent sitie duomenys ir atsivazduoja lentelej -->
            <td><?php echo $car['id']?> </td>
            <td><?php echo $car['manufacturer'] ?></td>
            <td><?php echo $car['model'] ?></td>
            <td><?php echo $car['year'] ?></td>
            <td><?php echo $car['color'] ?></td>
            <td><?php echo $car['distance'] ?></td>
            <td><?php echo $car['fuel'] ?></td>
            <td>
                <a class="btn btn-success" href="?id=<?= $car['id']  ?>">Edit</a>
            </td>
            <td>
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?=$car['id']?>">
                    <button class="btn btn-danger"type="submit" >Delete</button>
                </form>
                <td>
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?=$car['id']?>">
                    <button class="btn btn-danger"type="submit" >Pirkti auto</button>
                </form>
        </td>
            </td>
            </tr>
        </tbody>
         <table class="table">
        <thead>
            <br>
            <br>
            <br>
            <tr>
                <th scope="col">ID</th> 
                <th scope="col">Gamintojas</th>
                <th scope="col">Modelis</th>
                <th scope="col">Metai</th>
                <th scope="col">Spalva</th>
                <th scope="col">Rida</th>
                <th scope="col">Kuro tipas</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <?php } ?>
    </table>
</body>
</html>