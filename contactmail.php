

<?php
// Verify the reCAPTCHA response
$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = [
  'secret' => '6Lem2dgkAAAAALYBeOQ_O9_3L695liOyeolm8Ne0',
  'response' => $_POST['g-recaptcha-response'],
  'remoteip' => $_SERVER['REMOTE_ADDR'],
];
$options = [
  'http' => [
    'header' => 'Content-type: application/x-www-form-urlencoded\r\n',
    'method' => 'POST',
    'content' => http_build_query($data),
  ],
];
$context = stream_context_create($options);
$result = file_get_contents($url, false, $context);
$response = json_decode($result);

if ($response->success) {
  // The reCAPTCHA response is valid, so send the email
  $name = $_POST['name'];
  $companyname = $_POST['company'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Send the email
  $to = 'manish@excitesys.com'; // Replace with your own email address
  $subject = 'Enquiry From Contact Us';
  $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message\nCompany: $companyname";
  $headers = "From: $email";
  if(mail($to, $subject, $body, $headers)){
      
  header('Location: contact.html');
  } else {
      echo 'Sorry, Something went wrong';
  }

  // Redirect to a thank-you page
  exit;
} else {
  // The reCAPTCHA response is invalid, so display an error message
  echo 'Invalid reCAPTCHA response.';
}
?>
