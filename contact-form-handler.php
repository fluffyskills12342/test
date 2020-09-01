<?php

    $name = $_POST['email'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];
    
    

    $email_form = 'victory.esports20@gmail.com';

    $email_subject = "Neue Bewerbung";

    $email_body = "Nutzername: $name.\n".
        "Nutzer E-Mail: $visitor_email.\n". 
            "Nutzer Nachricht: $message.\n";

    $to = "victory.esports20@gmail.com";

    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";
    
    mail($to, $email_subject, $email_body, $headers);

    header("Location: index.html");
    ?>
    