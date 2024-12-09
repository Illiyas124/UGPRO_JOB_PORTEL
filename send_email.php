<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    $to = "illiyasin2001@gmail.com";
    $subject = "Contact Form Submission";
    $headers = "From: ". $name. "<". $email. ">\r\n";
    $headers.= "Reply-To: ". $email. "\r\n";
    $headers.= "Content-Type: text/plain; charset=utf-8\r\n";

    if(mail($to, $subject,  $message, $headers)){
        http_response_code(200);
        echo "Message sent successfully!";
    }else{
        http_response_code(500);
        echo "Failed to send message!";
    }
}else{
    http_response_code(403);
    echo "Access denied!";
}

?>