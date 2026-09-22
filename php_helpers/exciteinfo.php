<?php 
require_once('/php_helpers/PHPMailer/PHPMailerAutoload.php');
$mail = new \PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = 'login';
$mail->SMTPSecure = 'false';
$mail->Host = 'mail.excitetemplate.com';
$mail->Port = 25;
$mail->Username = 'mail@excitetemplate.com';
$mail->Password = 'excite@21';
$mail->SetFrom('mail@excitetemplate.com', 'excite');
$mail->Subject = 'The subject';
$mail->Body = 'The content';
$mail->IsHTML(true);
$mail->AddAddress('$from');
$mail->Send(); 

if(isset($_POST['submit'])){
    $to = "mail@excitetemplate.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $contact = $_POST['contact'];
    $subjectuser = $_POST['subjectuser'];
    $subject = " Excite Template Inquiry Form";
    $subject2 = "Excite Template Inquiry Form";
    $message = " Name:" . $name . " " . $last_name . "\n\n" . "Email_Id:" . $_POST['email'] . "\n\n" . "Contact-No:" . $contact . "\n\n" . "Subject:" . $subjectuser . "\n\n" . "Message:" . $_POST['message'];
    $message2 = "Thank you Contact Us , we will contact you shortly." . "\n\n" . "Dear Customer," . $name . $last_name . "\n\n" . "Subject:" . $subjectuser . "\n\n" . "Your Message:" . $_POST['message'] . "\n\n" . "\n\n" . "EXCITE TEMPLATE ," . "\n\n" . "mail@excitetemplate.com" . "\n\n" . "http://www.excitetemplate.com/" ;
/* // Validate inputs
if(empty($name)){
	echo '<div class="alert alert-warning error"><p><strong>Attention!</strong> Name is required.</p></div>';
	exit();
}
if(empty($lastname)){
	echo '<div class="alert alert-warning error"><p><strong>Attention!</strong> Last name is required.</p></div>';
	exit();
}
if(empty($contact)){
	echo '<div class="alert alert-warning error"><p><strong>Attention!</strong> Contact is required.</p></div>';
	exit();
}
if(empty($email)){
	echo '<div class="alert alert-warning error"><p><strong>Attention!</strong> Email is required.</p></div>';
	exit();
}
if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
	echo '<div class="alert alert-warning error"><p><strong>Attention!</strong> You have entered an invalid e-mail address, try again.</p></div>';
	exit();
}
if(empty($subject)){
	$subject = 'You have been contacted from your website by ' . $name;
}
if(empty($message)){
	echo '<div class="alert alert-warning error"><p><strong>Attention!</strong> Message is required.</p></div>';
	exit();
} */
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;s
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . $last_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
<html>
    <head>
    <meta http-equiv="refresh" content="0; url=http://www.excitetemplate.com/contact.html" /></head>
</html>
      
