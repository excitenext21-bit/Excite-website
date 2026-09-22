<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $to = 'manish@excitesys.com';
    $subject = 'Contact Us Form Submission';
    $headers = "From: " . $name . " <" . $email . ">\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $message_body = "<p>Name: " . $name . "</p>\n";
	$message_body .= "<p>Contact: " . $phone . "</p>\n";
    $message_body .= "<p>Email: " . $email . "</p>\n";
    $send_mail = mail($to, $subject, $message_body, $headers);
    if ($send_mail) {
        echo 'Thank you for contacting us. We will get back to you soon.';
    } else {
        echo 'Sorry, something went wrong. Please try again later.';
    }
}

?>