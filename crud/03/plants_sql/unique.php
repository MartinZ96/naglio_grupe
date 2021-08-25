<?php

//prisiconnectinam prie mysql
function connect(){
$mysqli = new mysqli("localhost","root","","medelynas"); //mysqli yra objiektine klase
return $mysqli; // kad normaliai veiktu turi grazint 
}



function all(){      
$conn = connect();       //jungiames prie duomenu bazes
$sql = "SELECT `unique_plants`.`id`, `name`, `age`, `height`, `health` FROM `unique_plants`INNER join `plants`ON `plants`.`id` = `unique_plants`.`plant_id`"; //tam kad issiustumem uzklausa. cia turi but backtikai, kad normaliai vaziuotu. ar cia ima is mysql ta plants? nu ar jis ten yra ar cia tiesiog kintamasis?
if(isset($_GET['plant_id'])){
    $sql = "SELECT * from `unique_plants` where plant_id = ".$_GET['plant_id'];
}
$result = $conn->query($sql); // turi kazkokiam kintamajam priskirt. grazina visus augalus ir imeta i result kintamaji
$conn->query($sql);      //sitas jau grynai issius uzklausa ir gaus atsakyma . tas query grynai siuncia uzklausa i mysql?
$conn->close();          //uzdarom prisijungima su duomenu baze conn yra objiektas, query yra aprasytas metodas
return $result;
}

function store(){
$conn = connect();       //jungiames prie duomenu bazes 
//nuejus i sql pasiziuri kaip sita eilute uzrasyt //KABUTES!!!
//tam kad issiustumem uzklausa
$sql = "INSERT INTO `unique_plants` (`id`, `age`, `height`, `health`, `plant_id`)
VALUES (NULL,'".$_POST['age']."','".$_POST['height']."','".$_POST['health']."','".$_POST['plant_id']."');";
$conn->query($sql);      //sitas jau grynai issius uzklausa
$conn->close();          //uzdarom prisijungima su duomenu baze
}

function update(){
$conn = connect();       //jungiames prie duomenu bazes
$sql = "UPDATE `unique_plants` 
SET `age`='".$_POST['age']."',`height`='".$_POST['height']."',`health`='".$_POST['health']."' where `unique_plants`.`id` = '".$_POST['update']."';";               //tam kad issiustumem uzklausa
$conn->query($sql);      //sitas jau grynai issius uzklausa
$conn->close();          //uzdarom prisijungima su duomenu baze
}

function find($id){      //priima viena kintamaji id
$conn = connect();       //jungiames prie duomenu bazes
$sql = 'SELECT * from `unique_plants` where id ='.$id;               //paima viena augala
$result = $conn->query($sql);      //sitas jau grynai issius uzklausa
$conn->close();          //uzdarom prisijungima su duomenu baze
return $result->fetch_assoc();
}

function destroy($id){   //irgi priima ka reikia istrint (id)
$conn = connect();       //jungiames prie duomenu bazes
$sql = "DELETE FROM `unique_plants` WHERE id=".$id;               //tam kad issiustumem uzklausa
$conn->query($sql);      //sitas jau grynai issius uzklausa
$conn->close();          //uzdarom prisijungima su duomenu baze
}
