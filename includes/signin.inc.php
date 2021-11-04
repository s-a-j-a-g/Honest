<?php

if (isset($_POST["sign-in"])){ //sign-in is the name of button in login page
    $username = $_POST["username"];
    $password = $_POST["password"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    
    if(emptyInputSignIn($username, $password) !== false){
        header("location: ../signin.php?error=emptyinput");
        exit();    
    }    

    else{
        loginUser($conn, $username, $password);
        header("location: ../signin.php?error=none");
        exit(); 
    }
}
else{
    header("location: ../login.html"); //if user directly tries to access the signin.inc.php file then user is sent to login.html page
    exit();
}
