<?php
require('class.phpmailer.php');

//echo "zxc";
//exit;
$mail = new PHPMailer();

print_r($mail);
exit;
$subject = "Test Mail using PHP mailer";
$content = "<b>This is a test mail using PHP mailer class.</b>";
$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port     = 587;  
$mail->Username = "rgmonish@gmail.com";
$mail->Password = "mahi@3192";
$mail->Host     = "smtp.gmail.com";
$mail->Mailer   = "smtp";
$mail->SetFrom("vincy@phppot.com", "PHPPot");
$mail->AddReplyTo("vincy@phppot.com", "PHPPot");
$mail->AddAddress("rgmonish@gmail.com");
$mail->Subject = $subject;
$mail->WordWrap   = 80;
$mail->MsgHTML($content);
$mail->IsHTML(true);

echo $mail->Send();

echo 'zcc';


if(!$mail->Send()) 
	echo "Problem on sending mail";
else 
echo "Mail sent";
?>
