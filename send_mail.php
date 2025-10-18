<?php
if(isset($_POST['Contact-Name'])) {
    $name = $_POST['Contact-Name'];
    $email = $_POST['Contact-Email'];
    $message = $_POST['Contact-Message'];
    
    $to = "charlesceagan140@gmail.com";
    $subject = "New Contact Form Message";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: $email";
    
    if(mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message failed to send.";
    }
}
?>