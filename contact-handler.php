<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'chestnuts.web.portfolio@gmail.com';

    $email_subject = "Contact $name";

    $email_body = "Name: $name\n".
        "Email: $visitor_email\n".
        "Message: $message\n";

    $to = "chestnuts.web.portfolio@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: contact.html");

