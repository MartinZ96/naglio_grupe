<?php



function init(){
    $_SESSION['olympic']=[];
    $_SESSION['id'] = 0;
}



function store(){
    $atlethe['id'] = $_SESSION['id'];
    $atlethe['name'] = $_POST['name'];
    $atlethe['surname'] = $_POST['surname'];
    $atlethe['sport'] = $_POST['sport'];
    $atlethe['country'] = $_POST['country'];
    $atlethe['gender'] = $_POST['gender'];
    $atlethe['victories'] = $_POST['victories'];
    $_SESSION['id']++;

    $_SESSION['olympic'][] = $atlethe;
}


function edit(){
   foreach ($_SESSION['olympic'] as $edit){
       if($edit['id'] == $_GET['id']){
            $atlethe = $edit;
            return $atlethe;
       }

   }
}

function update(){
    foreach ($_SESSION['olympic'] as &$atlethe) {
        if($atlethe['id'] == $_POST['id']){
            $atlethe['name'] = $_POST['name'];
            $atlethe['surname'] = $_POST['surname'];
            $atlethe['sport'] = $_POST['sport'];
            $atlethe['country'] = $_POST['country'];
            $atlethe['gender'] = $_POST['gender'];
            $atlethe['victories'] = $_POST['victories'];
            return;
        }  
    }
}

function destroy(){
    foreach ($_SESSION['olympic'] as $key => &$atlethe) {
        if($atlethe['id'] == $_POST['id']){
         unset($_SESSION['olympic'][$key]);
         return;
        }
    }
}