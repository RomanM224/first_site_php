<?php
   // print_r($_POST);    //show all values

    $name = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    if(trim($name) == ""){
        echo "you do not input  name";
    }

    foreach($_POST as $key => $value){
        echo $key . " " . $value . "<br><br>";
    }