<?php
$name=$_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from = 'info@yourwebsite.com';
$email_subject ='New form Submission';

$email_body="user Name: $name.\n".
            "user Email: $visitor_email.\n".  
            "subject:$subject.\n".
            "user Message:$message.\n";

            $to = 'rakhundevishal06@gmail.com';
            $headers ="From:$email_from\r\n";
            $headers .="Reply-to: $visitor_email \r\n";

            mail($to,$email_subject,$email_body,$headers);

            header("Location:contact.html");
?>