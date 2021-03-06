<?php

include('./db.php');



    
    if(isset($_POST['create'])){
        store();
        // header("location:./");
        // die;
    }

    if(isset($_POST['update'])){
        update();
        header("location:./");
        die;
    }
    
    if(isset($_POST['delete'])){
        destroy($_POST['delete']);
        header("location:./");
        die; 
    }



$action = 'create';

if(isset($_GET['edit'])){
        $plant = find($_GET['edit']);
        $action = 'update';
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
    <form class="form" action="" method="POST">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Augalo pavadinimas</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="name" value="<?= (isset($plant))? $plant['name'] : "" ?>">
            </div>
         </div>
         <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Vienmetis</label>
            <div class="col-sm-4">
                 <input type="checkbox" name="is_yearling" <?php if (isset($plant) && $plant['is_yearling']) {echo 'checked';}?>>  
                <!-- <input class="checkbox" type="text" name="is_yearling" value="<?= (isset($plant))? $plant['is_yearling'] : "" ?>"> -->
            </div>
         </div>
         <div class="form-group row">
            <label class="col-sm-2 col-form-label" >Skai??ius</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="quantity" value="<?= (isset($plant))? $plant['quantity'] : "" ?>">
            </div>
            
         </div>
    <?php if(!isset($plant)){
            echo '<button class="btn btn-primary" name= "create" type="submit">Prid??ti augal??</button>'; // prisideju name=create jis pasidaro kintamasis
    }else{
            echo '<button class="btn btn-info" name= "update" type="submit" value= "'.$plant['id'].'">Atnaujinti augal??</button>'; // update padaro kintamuoju
    } ?>
    </form>



    <table class="table">
        <tr>
        <th>Id</th> 
        <th>Augalo pavadinimas</th> 
        <th>Vienmetis</th> 
        <th>Skai??ius</th> 
        <th>Augalai</th> 
        <th>Edit</th> 
        <th>Delete</th> 
        </tr>


        <?php foreach(all() as $plant){ 
            $checked = "";
            if($plant['is_yearling']){
                $checked = "checked";
            }
            
            ?>
            <tr>
                <td> <?= $plant['id']  ?> </td>
                <td> <?= $plant['name']  ?> </td>
                <td> <input type="checkbox" name="" id=""<?=$checked?> disabled> </td>
                <td> <?= $plant['quantity']  ?> </td>
               <td> <a class="btn btn-primary" href="./plants.php?plant_id=<?=$plant['id']?>">augalai</a> </td>
                <td>
                    <a class="btn btn-success" href="?edit=<?=$plant['id']?>">edit</a>
                </td>
                <td>
                    <form action="" method="post">
                        <button class="btn btn-danger" type="submit" name="delete" value="<?=$plant['id']?>">delete</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>


<?php

//paspaudus ant augalu mygtuko, turi nuredirectint i kita puslapi kur bus kitas table, konkrecios rusies. 
//mygtukas augalai turi nestis Egl??s id, turi nueit i uzklausa, paimt viska is unikaliu augalu kur id = 1, nusinesa su GETu, turi nugult formoj kaip hidden inputas.
//kai paspausim prideti unikalu augala, reikia kad uzrasytu to augalo id(plant id)
//visur reikia nestis tevinio elemento id. sukurus augalu turi redirectinti atgal i ta pacia forma 

// SELECT `up`.`id`,`p`.`name`,`up`.`age`,`up`.`height`,`up`.`health`,`p`.`is_yearling`,`p`.`quantity`


// FROM 
// `unique_plants` as up	
// INNER JOIN `plants` as p
// on `p`.`id` = `up`.`plant_id`;


//  <style>
// /*checkbox*/

// @supports (zoom:2) {
//     input[type="radio"],  input[type=checkbox]{
//     zoom: 2;
//     }
// }
// @supports not (zoom:2) {
//     input[type="radio"],  input[type=checkbox]{
//         transform: scale(2);
//         margin: 15px;
//     }
// }

//     </style>

?>
