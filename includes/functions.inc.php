<?php


////////////////////////////// SIGN UP /////////////////////////////////////////////////////////////////////////////////////////


/////////////////////////////////////////////////////////////////////
//////////////////// CHECKS EMPTY INPUT FIELD //////////////////////
///////////////////////////////////////////////////////////////////
function emptyInputSignUp($name, $email, $username, $password, $pwdRepeat){
    $result;
    if(empty($name) || empty($email) || empty($username) || empty($password) || empty($pwdRepeat)){
        $result = true;
    }
    else{
        $result = false; 
    }
    return $result;
}


//////////////////////////////////////////////////////////////////////
//////////////////// CHECKS INVALID USER NAME ///////////////////////
////////////////////////////////////////////////////////////////////
function invalidUsername($username){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result = true;
    }
    else{
        $result = false; 
    }
    return $result;
}


/////////////////////////////////////////////////////////////////////
//////////////////// CHECKS INVALID EMAIL //////////////////////////
///////////////////////////////////////////////////////////////////
function invalidEmail($email){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ // FILTER_VALIDATE_EMAIL is an built in function
        $result = true;
    }
    else{
        $result = false; 
    }
    return $result;
}


/////////////////////////////////////////////////////////////////////
//////////////////// CHECKS IF PASSWORD MATCHES ////////////////////
///////////////////////////////////////////////////////////////////
function pwdMatch($password, $pwdRepeat){
    $result;
    if($password !== $pwdRepeat){
        $result = true;
    }
    else{
        $result = false; 
    }
    return $result;
}


//////////////////////////////////////////////////////////////////////////
/////////// CHECKS IF THE USERNAME/EMAIL HAS ALREADY BEEN TAKEN /////////
////////////////////////////////////////////////////////////////////////
function usernameExists($conn, $email, $username){
    $sql = "SELECT * FROM users WHERE usersEmail = ? OR usersUsername = ?;";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../login.html?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $email, $username);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}


/////////////////////////////////////////////////////////////////////
///////////////// DATAS ARE STORED IN THE DATABASE /////////////////
///////////////////////////////////////////////////////////////////
function createUser($conn, $name, $email, $username, $password){
    $sql = "INSERT INTO users(usersName, usersEmail, usersUsername, usersPassword) VALUES(?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../login.html?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt); //Execute the statement
    mysqli_stmt_close($stmt);
    // header("location: login.html?error=none");
    // exit();
}










////////////////////////////// SIGN IN ////////////////////////////////////////////////////////////////////////////////////////////////



/////////////////////////////////////////////////////////////////////
//////////////////// CHECKS EMPTY INPUT FIELD //////////////////////
///////////////////////////////////////////////////////////////////
function emptyInputSignIn($username, $password){
    $result;
    if(empty($username) || empty($password)){
        $result = true;
    }
    else{
        $result = false; 
    }
    return $result;
}


/////////////////////////////////////////////////////////////////////
///////////////////////////  LOG IN USER ///////////////////////////
///////////////////////////////////////////////////////////////////
function loginUser($conn, $username, $password){
    $userExists = usernameExists($conn, $username, $username); //parameters has been changed but it does not matter because usernameExists function(above) checks either username or email

    if ($userExists === false){
        header("location: ../signin.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $userExists["usersPassword"];

    $checkPwd = password_verify($password, $pwdHashed);

    if($checkPwd == false){
        header("location: ../signin.php?error=wronglogin");
        exit();
    }
    elseif($checkPwd == true){
        session_start();
        $_SESSION["userID"] = $userExists["usersID"];
        $_SESSION["userName"] = $userExists["usersName"];
        $_SESSION["userUsername"] = $userExists["usersUsername"];
        header("location: ../index.php");
        exit();
    }
}













////////////////////////////// CONTACT US MESSAGE ///////////////////////////////////////////////////////////////////////////////////



/////////////////////////////////////////////////////////////////////
//////////////////// CHECKS EMPTY INPUT FIELD //////////////////////
///////////////////////////////////////////////////////////////////
function emptyInputContactForm($name, $visitor_email, $subject, $message){
    $result;
    if(empty($name) || empty($visitor_email) || empty($subject) || empty($message)){
        $result = true;
    }
    else{
        $result = false; 
    }
    return $result;
}


/////////////////////////////////////////////////////////////////////
/////////// MESSAGE AND INFO ARE STORED IN THE DATABASE ////////////
///////////////////////////////////////////////////////////////////
function getMessage($conn, $name, $visitor_email, $subject, $message){
    $sql = "INSERT INTO contact_form(Name, Email, Subject, Message) VALUES(?, ?, ?, ?);";
    // $sql = "INSERT INTO contact_form(Name, Email, Subject, Message) VALUES(.'$name', '$visitor_email', '$subject', '$message');";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../contact.html?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssss", $name, $visitor_email, $subject, $message);
    mysqli_stmt_execute($stmt); //Execute the statement
    mysqli_stmt_close($stmt);
}
