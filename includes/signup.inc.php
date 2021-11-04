<?php

if (isset($_POST["sign-up"])){ //sign-up is the name of button in login page
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $pwdRepeat = $_POST["pwdRepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    
    if(emptyInputSignUp($name, $email, $username, $password, $pwdRepeat) !== false){
        header("location: ../signup.php?error=emptyinput");
        exit();    
    }

    if(invalidUsername($username) !== false){
        header("location: ../signup.php?error=invalidusername");
        exit();    
    }   

    if(invalidEmail($email) !== false){
        header("location: ../signup.php?error=invalidemail");
        exit();    
    }

    if(pwdMatch($password, $pwdRepeat) !== false){
        header("location: ../signup.php?error=passworddontmatch");
        exit();    
    } 
    
    if(usernameExists($conn, $email, $username) !== false){
        header("location: ../signup.php?error=usernametaken");
        exit();    
    }    

    else{
        createUser($conn, $name, $email, $username, $password);
        header("location: ../signup.php?error=none");
        exit(); 
    }
}
else{
    header("location: ../login.html"); //if user directly tries to access the signup.inc.php file then user is sent to login.html page
    exit();
}
