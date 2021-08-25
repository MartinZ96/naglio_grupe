<?php

init();

function init()
{
    if(!file_exists("./data.txt")){
        file_put_contents("./data.txt","[]");
        file_put_contents("./id.txt", 0);
    }
}

function edit(){
    foreach (getData() as $animal) {
        if($animal['id'] == $_GET['id']){
           return $animal;
        }
     }

}

function store(){
    $data = getData();
    $animal['id'] = newId();
    $animal['species'] = $_POST['species'];
    $animal['name'] = $_POST['name'];
    $animal['age'] = $_POST['age'];
    
    $data[] = $animal;
    setData($data);
}

function getData(){
    $arr = json_decode( file_get_contents('./data.txt'), 1);
    foreach ($arr as &$entry) {
        $entry = (array) $entry;
    }
    return $arr;
}
function setData($arr){
    file_put_contents('./data.txt',json_encode($arr));
}

function newId(){
    $id = file_get_contents('./id.txt') ;//4
    $id++;//5
    file_put_contents('./id.txt',$id);//5
    return $id;//5
}

function destroy(){
    $data = getData();
    foreach ($data as $key => $animal) {
        if($animal['id'] == $_POST['id']){
         unset($data[$key]);
         setData($data);
         return;
        }
    }
}

function update(){
    $data = getData();
    foreach ($data as &$animal) {
        if($animal['id'] == $_POST['id']){
            $animal['species'] = $_POST['species'];
            $animal['name'] = $_POST['name'];
            $animal['age'] = $_POST['age'];
            setData($data);
            return;
        }  
    }
}
