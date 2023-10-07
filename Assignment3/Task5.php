<?php
function generatePassword($length){
    $sChar = "(!@#$%^&*()_+)";
    $pass = [];

    for($i = 0; $i <ceil($length/4); $i++){
        array_push($pass,chr(rand(97,122)));
        array_push($pass,chr(rand(65,90)));
        array_push($pass,rand(0,9));
        array_push($pass,$sChar[rand(0,strlen($sChar))]);
        
    }
    $pass = array_slice($pass,0,$length);
    shuffle($pass);
    echo implode('',$pass) . "\n";
    print_r($pass);
}

//calling the function
generatePassword(12);
?>