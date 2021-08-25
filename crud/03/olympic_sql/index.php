<?php

include('./db.php');






?>




















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="" method="post">
            <div>
                <label class="col-sm-2 col-form-label">Vardas</label>
                <div class= "col-sm-4">
                    <input type="text" class="form-control" name= "name" value="<?= (isset($olympic))? $olympic['name'] : "" ?>">
                </div>
            </div>
            <div>
                <label class="col-sm-2 col-form-label">Pavardė</label>
                <div class= "col-sm-4">
                    <input type="text" class="form-control" name= "surname" value="<?= (isset($olympic))? $olympic['surname'] : "" ?>">
                </div>
            </div>
            <div>
                <label class="col-sm-2 col-form-label">Sporto šaka</label>
                <div class= "col-sm-4">
                    <input type="text" class="form-control" name= "sport" value="<?= (isset($olympic))? $olympic['sport'] : "" ?>">
                </div>
            </div>
            <div>
                <label class="col-sm-2 col-form-label">Šalis</label>
                <div class= "col-sm-4">
                    <input type="text" class="form-control" name= "country" value="<?= (isset($olympic))? $olympic['country'] : "" ?>">
                </div>
            </div>
                        <div>
                <label class="col-sm-2 col-form-label">Lytis</label>
                <div class= "col-sm-4">
                    <input type="text" class="form-control" name= "gender" value="<?= (isset($olympic))? $olympic['gender'] : "" ?>">
                </div>
            </div>
                        <div>
                <label class="col-sm-2 col-form-label">Pergalės</label>
                <div class= "col-sm-4">
                    <input type="text" class="form-control" name= "victories" value="<?= (isset($olympic))? $olympic['victories'] : "" ?>">
                </div>
            </div>
        </form>


</body>
</html>