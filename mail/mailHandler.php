<?php
if ($_POST) {
    $to_email = "gali@crossfitherzliya.com";
    
//$to_email = "aviadhahami@gmail.com";
    //Sanitize input data using PHP filter_var().
    $user_name = filter_var($_POST["userName"], FILTER_SANITIZE_STRING);
    $user_email = filter_var($_POST["userMail"], FILTER_SANITIZE_EMAIL);
    $message = filter_var($_POST["userText"], FILTER_SANITIZE_STRING);


    //email body
    $message_body = $message . "\r\n\r\n-" . $user_name . "\r\nEmail : " . $user_email;

    //proceed with PHP email.
    $headers = 'From: ' . $user_name . '' . "\r\n" .
        'Reply-To: ' . $user_email . '' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    $subject = "An email from the Xfit website!";
    $send_mail = mail($to_email, $subject, $message_body, $headers);
    if (!$send_mail) {
        //If mail couldn't be sent output error. Check your PHP email configuration (if it ever happens)
        $output = "0";
        die($output);
    } else {
        $output = "1";
        die($output);
    }
}



?>