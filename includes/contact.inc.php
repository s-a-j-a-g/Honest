<?php

if (isset($_POST["submit-msg"])){
    $name = $_POST['name'];
    $visitor_email= $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    include 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputContactForm($name, $visitor_email, $subject, $message) !== false){
        header("location: ../contact.html?error=emptyinput");
        exit();    
    }    

    else{
        getMessage($conn, $name, $visitor_email, $subject, $message);
        header("location: ../contact.html?error=none");
        exit(); 
    }
}
else{
    header("location: ../contact.html"); //if user directly tries to access the contact.inc.php file then user is sent to login.html page
    exit();
}





// $name = $_POST['name'];
// $visitor_email= $_POST['email'];
// $subject = $_POST['subject'];
// $message = $_POST['message'];


// $email_from = 'sp49041719@student.ku.edu.np';

// $email_subject = 'New Form Submission';

// $email_body = "User Name: $name.\n".
//                 "User Email: $visitor_email.\n". 
//                 "Subject: $subject.\n".
//                 "User Message: $message.\n";

// $to = 'spd.sajag@gmail.com';

// $headers = "From: $email_from \r\n";

// $headers .= "Reply-To: $visitor_email \r\n";

// mail($to, $email_subject, $email_body, $headers);

// header("Location: contact.html");

?>