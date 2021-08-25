<?php
session_start();
// var_dump($_SESSION);
include('./functions.php');

if(!isset($_SESSION['olympic'])){
    init();
};



if($_SERVER['REQUEST_METHOD'] == 'POST' && !isset($_POST['id'])){
    store();
    header('location:./index.php');
    die;
};

if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])){
    $atlethe = edit();
};

// if($_SERVER['REQUEST_METHOD'] == 'GET'){
//     echo "sveiki";
// };

if($_SERVER['REQUEST_METHOD'] == "POST" && !isset($_POST['name'])){
    destroy();
    header("location:./");
    die; 
};

if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['name'])  ){
    update();
    header("location:./");
    die;
};



// print_r($_SESSION['olympic']);
// print_r($_POST);
// print_r($_GET);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
        <form action="" method="POST">
                       <!-- jeigu imam isset athlete, sukurti hidden input, kuris perduos iraso id --> 
            <div class="form-group">
                <label for="name">Vardas</label>
                <input type="text" class="form-control" name="name"  value= " <?= (isset($atlethe))? $atlethe['name'] : ""?>">
            </div>  <div class="form-group">
                <label for="surname">Pavardė</label>
                <input type="text" class="form-control" name="surname" value= " <?= (isset($atlethe))? $atlethe['surname'] : ""?>" >
            </div>  <div class="form-group">
                <label for="sport">Sporto šaka</label>
                <input type="text" class="form-control" name="sport"  value= " <?= (isset($atlethe))? $atlethe['sport'] : ""?>">
            </div>  <div class="form-group">
                <label for="country">Šalis</label>
                <input type="text" class="form-control" name="country" value= " <?= (isset($atlethe))? $atlethe['country'] : ""?>" >
            </div>  <div class="form-group">
                <label for="gender">Lytis</label>
                <input type="text" class="form-control" name="gender"  value= " <?= (isset($atlethe))? $atlethe['gender'] : ""?>">
            </div>  <div class="form-group">
                <label for="victories">Pergalės</label>
                <input type="text" class="form-control" name="victories" value= " <?= (isset($atlethe))? $atlethe['victories'] : ""?>" >
            </div>
         
            
           <?php if(!isset($atlethe)){
            echo '<button class="btn btn-primary" type="submit">Pridėti atletą</button>';
    }else{
            echo '
            <input type="hidden" name="id" value="'. $atlethe['id'].' ">
            <button class="btn btn-info" type="submit">Atnaujinti atletą</button>';
    } ?>
            
        </form>

        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Vardas</th>
                <th scope="col">Pavardė</th>
                <th scope="col">Sporto šaka</th>
                <th scope="col">Šalis</th>
                <th scope="col">Lytis</th>
                <th scope="col">Pergalės</th>
                </tr>
            </thead>
    <?php foreach ($_SESSION['olympic'] as $atlethe){ ?>
            <tbody>
                <tr>  
                <td>  
                    <?php echo $atlethe['id']?><a href="?id=<?php echo $atlethe['id']?></a></td>
                <td>                       
                    <form action="" method="post">
                        
                        <input type="hidden" name="id" value="<?php echo $atlethe['id']?>">
                        
                  
                </td>
                <td><?php echo $atlethe['name']; ?></td>
                <td><?php echo $atlethe['surname']; ?></td>
                <td><?php echo $atlethe['sport']; ?></td>
                <td><?php echo $atlethe['country']; ?></td>
                <td><?php echo $atlethe['gender']; ?></td>
                <td><?php echo $atlethe['victories']; ?></td>
                <td>
              <a href="?id=<?= $atlethe['id'] ?>" class="btn btn-info" >Edit</a>
                </td>
                <td>
                                     <form action="" method="post">
                        <button class="btn btn-danger">Delete</button>
                        <input type="hidden" name="id" value="<?php echo $atlethe['id']?>">
                        
                    </form> 

                </td>
                </tr>
            </tbody>
            <?php } ?>
        </table>
</body>
</html>