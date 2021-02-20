<?php

if(isset($_POST['submit'])){
    
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $visitor_email = $_POST['email'];
    $visitor_country = $_POST['country'];
    $message = $_POST['subject'];

    $email_from = "pvanderlaat@gmail.com";
    $email_subject = "New Contact Form Submission";
    $email_body = "You have received a new message from the user $fname $lname\n" . "Email Address: $visitor_email\n" . "Located: $visitor_country\n" . "Here is the message:\n $message";

    $email_to = "pvanderlaat@gmail.com";
    $headers = "From: $email_from \r\n";

    mail($email_to, $email_subject, $email_body, $headers);
    header("Location: contact.html");
    }   
?>