<?php

$method = strtoupper( $_SERVER['REQUEST_METHOD'] );
if ( 'POST' != $method ) {
	exit( 'Invalid request' );
}

// CONFIGURE RECAPTCHA
define( 'GR_SECRET', '' );
define( 'GR_URL', '' );

if ( ! defined( "PHP_EOL" ) ) {
	define( "PHP_EOL", "\r\n" );
}


/*
 * Mail server configuration
 * If you have a GMail account, you can set it up like this (for testing)
 *
	define( 'SMTP_SERVER', 'smtp.gmail.com' );
	define( 'SMTP_USER', 'your-address@gmail.com' );
	define( 'SMTP_PASS', 'your-gmail-password-here' );
	define( 'SMTP_PORT', '587' );
 */
define( 'SMTP_SERVER', 'smtp.gmail.com' );
define( 'SMTP_USER', 'ankit111pandey@gmail.com' );
define( 'SMTP_PASS', '@Sdf4321' );
define( 'SMTP_PORT', '587' );

// Enter the email address that you want to emails to be sent to and name.
// Example $address = "john.doe@yourdomain.com";
define( 'RECIPIENT_EMAIL_ADDRESS', "" );
define( 'RECIPIENT_NAME', "" );


function validateRecaptcha( $secret, $response, $url = GR_URL )
{
	$ch = curl_init( $url );
	curl_setopt( $ch, CURLOPT_POST, 1 );
	$params = array(
		'secret' => urlencode( $secret ),
		'response' => urlencode( $response ),
	);
	curl_setopt( $ch, CURLOPT_POSTFIELDS, $params );
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
	$result = curl_exec( $ch );
	$result = json_decode( $result );
	curl_close( $ch );
	return ( isset( $result->success ) && $result->success );
}


/*
 * Validate the contact form & recaptcha
 * @return array The list of sanitized fields
 */
function validateContactForm()
{
	// Sanitize fields
	$name = ( isset( $_POST['name'] ) ? strip_tags( $_POST['name'] ) : '' );
	$lastname = ( isset( $_POST['lastname'] ) ? strip_tags( $_POST['lastname'] ) : '' );
	$email = ( isset( $_POST['email'] ) ? strip_tags( $_POST['email'] ) : '' );
	$subject = ( isset( $_POST['subject'] ) ? strip_tags( $_POST['subject'] ) : '' );
	$message = ( isset( $_POST['message'] ) ? strip_tags( $_POST['message'] ) : '' );
	$g_response = ( isset( $_POST['g-recaptcha-response'] ) ? $_POST['g-recaptcha-response'] : '' );

	// Validate inputs
	if ( empty( $name ) ) {
		echo '<div class="alert alert-warning error"><p><strong>Attention!</strong> Name is required.</p></div>';
		exit();
	}
	if ( empty( $lastname ) ) {
		echo '<div class="alert alert-warning error"><p><strong>Attention!</strong> Last name is required.</p></div>';
		exit();
	}
	if ( empty( $email ) ) {
		echo '<div class="alert alert-warning error"><p><strong>Attention!</strong> Email is required.</p></div>';
		exit();
	}
	if ( filter_var( $email, FILTER_VALIDATE_EMAIL ) === false ) {
		echo '<div class="alert alert-warning error"><p><strong>Attention!</strong> You have entered an invalid e-mail address, try again.</p></div>';
		exit();
	}
	if ( empty( $subject ) ) {
//		$subject = 'You have been contacted from your website by ' . $name;
		echo '<div class="alert alert-warning error"><p><strong>Attention!</strong> Subject is required.</p></div>';
		exit();
	}
	if ( empty( $message ) ) {
		echo '<div class="alert alert-warning error"><p><strong>Attention!</strong> Message is required.</p></div>';
		exit();
	}
	if ( get_magic_quotes_gpc() ) {
		$message = stripslashes( $message );
	}
	if ( empty( $g_response ) ) {
		echo '<div class="alert alert-warning error"><p><strong>Attention!</strong> Please confirm you are not a robot by filling in the captcha.</p></div>';
		exit();
	}
	/*if ( ! validateRecaptcha( GR_SECRET, $g_response, GR_URL ) ) {
		echo '<div class="alert alert-warning error"><p><strong>Attention!</strong> Captcha is not correct.</p></div>';
		exit();
	}*/

	//#! If there is an attachment
	$hasAttachment = false;
	if ( isset( $_FILES['uploaded_file'] ) && ! empty( $_FILES['uploaded_file']['tmp_name'] ) ) {
		//#! make sure the file was uploaded
		if ( empty( $_FILES['uploaded_file']['size'] ) || ! empty( $_FILES['uploaded_file']['error'] ) ) {
			echo '<div class="alert alert-warning error"><p><strong>Attention!</strong> The file could not be uploaded.</p></div>';
			exit();
		}
		if ( ! file_exists( $_FILES['uploaded_file']['tmp_name'] ) ) {
			echo '<div class="alert alert-warning error"><p><strong>Attention!</strong> The file could not be uploaded.</p></div>';
			exit();
		}
		$hasAttachment = true;
	}

	return array(
		'name' => $name,
		'lastname' => $lastname,
		'email' => $email,
		'subject' => $subject,
		'message' => $message,
		'attachment' => ( $hasAttachment ? array(
			'name' => $_FILES['uploaded_file']['name'],
			'type' => $_FILES['uploaded_file']['type'],
			'path' => $_FILES['uploaded_file']['tmp_name'],
		) : array() )
	);
}


function sendMail()
{
	$fields = validateContactForm();

	//#! Setup vars
	$name = $fields['name'] . ' ' . $fields['lastname'];
	$email = $fields['email'];
	$subject = $fields['subject'];
	$message = $fields['message'];
	$attachment = $fields['attachment'];

	require 'PHPMailer/PHPMailerAutoload.php';

	$mail = new PHPMailer();

	//#! No output
	$mail->SMTPDebug = 0;
	
	$mail->isSMTP();
	$mail->Host = SMTP_SERVER;
	$mail->SMTPAuth = true;
	$mail->Username = SMTP_USER;
	$mail->Password = SMTP_PASS;
	$mail->SMTPSecure = 'tls';
	$mail->Port = SMTP_PORT;

	$mail->setFrom( $email, $name );
	$mail->addAddress( RECIPIENT_EMAIL_ADDRESS, RECIPIENT_NAME );
	$mail->addReplyTo( $email, $name );

	// Add attachments
	if ( ! empty( $attachment ) ) {
		$mail->addAttachment( $attachment['path'], $attachment['name'] );
	}
	// Set email format to HTML
	$mail->isHTML( true );

	$mail->Subject = $subject;

	//#! Setup the message

	$body = "<p>You have been contacted by $name , the message is as follows:</p>";
	$body .= "<div>\"$message\"</div>";
	$body .= "<p>You can contact $name via email at: <strong>$email</strong></p>";

	$mail->Body = $body;
	//#! This is the body in plain text for non-HTML mail clients
	$mail->AltBody = strip_tags( $body );

	//if ( ! $mail->send() ) {
		///mylog('Error sending the email: ' . $mail->ErrorInfo);
		// Email has NOT been sent successfully, echo an error message.
		//echo '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button><div class="alert alert-danger"><strong>ERROR!</strong> The email was not sent, either try again or later.</div>';
	//}
	//else {
		// Email has sent successfully, echo a notice.
//echo '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button><p>Thank you <strong>' . $name . '</strong>, your message has been submitted to us.</p></div>';
	//}
    if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}

}

sendMail();

