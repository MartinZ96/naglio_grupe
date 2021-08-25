<?php

//prisiconnectinam prie mysql
function connect(){
$mysqli = new mysqli("localhost","root","","medelynas"); //mysqli yra objiektine klase
return $mysqli; // kad normaliai veiktu turi grazint 
}



function all(){      
$conn = connect();       //jungiames prie duomenu bazes
$sql = "SELECT * from `plants`"; //tam kad issiustumem uzklausa. cia turi but backtikai, kad normaliai vaziuotu. ar cia ima is mysql ta plants? nu ar jis ten yra ar cia tiesiog kintamasis?
$result = $conn->query($sql); // turi kazkokiam kintamajam priskirt. grazina visus augalus ir imeta i result kintamaji
$conn->query($sql);      //sitas jau grynai issius uzklausa ir gaus atsakyma . tas query grynai siuncia uzklausa i mysql?
$conn->close();          //uzdarom prisijungima su duomenu baze conn yra objiektas, query yra aprasytas metodas
return $result;
}

function store(){
$is_yearling = 0;
if(isset($_POST['is_yearling'])){
    $is_yearling = 1;
}
$conn = connect();       //jungiames prie duomenu bazes 
//nuejus i sql pasiziuri kaip sita eilute uzrasyt //KABUTES!!!
$sql = 'INSERT INTO `plants`(`id`, `name`, `is_yearling`, `quantity`) VALUES (NULL,"'.$_POST['name'].'","'.$is_yearling.'","'.$_POST['quantity'].'")';               //tam kad issiustumem uzklausa
$conn->query($sql);      //sitas jau grynai issius uzklausa
$conn->close();          //uzdarom prisijungima su duomenu baze
}

function update(){
$is_yearling = isset($_POST['is_yearling']);
if(isset($_POST['is_yearling'])){
    $is_yearling = true;
}
$conn = connect();       //jungiames prie duomenu bazes
$sql = 'UPDATE `plants` SET `name`="'.$_POST['name'].'",`is_yearling`="'.$is_yearling.'",`quantity`="'.$_POST['quantity'].'" WHERE id = '.$_POST['update'];               //tam kad issiustumem uzklausa
$conn->query($sql);      //sitas jau grynai issius uzklausa
$conn->close();          //uzdarom prisijungima su duomenu baze
}

function find($id){      //priima viena kintamaji id
$conn = connect();       //jungiames prie duomenu bazes
$sql = 'SELECT * from `plants` where id ='.$id;               //paima viena augala
$result = $conn->query($sql);      //sitas jau grynai issius uzklausa
$conn->close();          //uzdarom prisijungima su duomenu baze
return $result->fetch_assoc();
}

function destroy($id){   //irgi priima ka reikia istrint (id)
$conn = connect();       //jungiames prie duomenu bazes
$sql = "DELETE FROM `plants` WHERE id=".$id;               //tam kad issiustumem uzklausa
$conn->query($sql);      //sitas jau grynai issius uzklausa
$conn->close();          //uzdarom prisijungima su duomenu baze
}
