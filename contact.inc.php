<?

$name = $_POST['name'];
$visitor_email= $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


include 'dbh.inc.php';

$sql = "INSERT INTO contact_form(Name, Email, Subject, Message) VALUES('$name', '$visitor_email', '$subject', '$message')";

$result = mysqli_query($conn, $sql);

if($result){
    header('Location: login.html?error=none');
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