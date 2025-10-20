<?php 
function emptysignup($name,$password){
    global $value;
    if(empty($name) || empty($password)){
        $value = true;
    }else{
        $value = false;
    }
    return $value;
}

function emptylogin($un,$pw){
    global $value;
    if(empty($un) || empty($pw)){
        $value = true;
    }else{
        $value = false;
    }
    return $value;
}


function invalidpassword($password){
    global $value;
    if(!preg_match("/^.{5,}$/",$password)){
        $value = true; 
    }
    else{
        $value = false;
    }
    return $value;
}
function invalidname($name){
    global $value;
    if(!preg_match("/^[a-z A-Z]+$/",$name)){
        $value = true;
    }
    
    else{
        $value = false;
    }
    return $value;
}

function invalidemail($email){
    global $value;
    if(!preg_match("/^[a-zA-Z\d\._-]+@[a-zA-Z\d_-]+\.[a-zA-Z\d\.]{2,}$/",$email)){
        $value = true; 
    }
    else{
        $value = false;
    }
    return $value;
}

?>