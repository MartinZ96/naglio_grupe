<?php

function connect(){
    $mysqli = new mysqli("localhost","root","olympic");
    return $mysqli;
}

function all(){
    $conn = connect();
    $sql = "SELECT * from `olympic`";
    $result = $conn->query($sql);
    $conn->query($sql);
    $conn->close();
    return $result; 
}
















?>