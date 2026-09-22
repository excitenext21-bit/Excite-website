<?php
require_once "Mail.php";

if(isset($_POST['submit']))
{
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $contact=$_POST['contact'];
    $subject_user=$_POST['subject_user'];
    $message=$_POST['message'];
    $email=$_POST['email'];
    $from = $_POST['email'];
    $to = "manish@excitetemplate.com";
    $subject = "Excite Template Enquiry";
    $host = "mail.excitetemplate.com";
    $port = "25";
    $username = "manish@excitetemplate.com";
    $password = "excite@21";
    /*$body = "Excite Template";
  $host = "smtp.gmail.com";
    $port = "587";
  $username = "ankit111pandey@gmail.com";
  $password = "6139700007";*/

    
    $body = '<!DOCTYPE >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Excite Template</title>
<style type="text/css">
* {
	-webkit-font-smoothing: antialiased;
}
body {
	Margin: 0;
	padding: 0;
	min-width: 100%;
	font-family: Arial, sans-serif;
	-webkit-font-smoothing: antialiased;
	mso-line-height-rule: exactly;
}
table {
	border-spacing: 0;
	color: #333333;
	font-family: Arial, sans-serif;
}
img {
	border: 0;
}
.wrapper {
	width: 100%;
	table-layout: fixed;
	-webkit-text-size-adjust: 100%;
	-ms-text-size-adjust: 100%;
}
.webkit {
	max-width: 600px;
}
.outer {
	Margin: 0 auto;
	width: 100%;
	max-width: 600px;
}
.full-width-image img {
	width: 100%;
	max-width: 600px;
	height: auto;
}
.inner {
	padding: 10px;
}
p {
	Margin: 0;
	padding-bottom: 10px;
}
.h1 {
	font-size: 21px;
	font-weight: bold;
	Margin-top: 15px;
	Margin-bottom: 5px;
	font-family: Arial, sans-serif;
	-webkit-font-smoothing: antialiased;
}
.h2 {
	font-size: 18px;
	font-weight: bold;
	Margin-top: 10px;
	Margin-bottom: 5px;
	font-family: Arial, sans-serif;
	-webkit-font-smoothing: antialiased;
}
.one-column .contents {
	text-align: left;
	font-family: Arial, sans-serif;
	-webkit-font-smoothing: antialiased;
}
.one-column p {
	font-size: 14px;
	Margin-bottom: 10px;
	font-family: Arial, sans-serif;
	-webkit-font-smoothing: antialiased;
}
.two-column {
	text-align: center;
	font-size: 0;
}
.two-column .column {
	width: 100%;
	max-width: 300px;
	display: inline-block;
	vertical-align: top;
}
.contents {
	width: 100%;
}
.two-column .contents {
	font-size: 14px;
	text-align: left;
}
.two-column img {
	width: 100%;
	max-width: 300px;
	height: auto;
}
.two-column .text {
	padding-top: 10px;
}
.three-column {
	text-align: center;
	font-size: 0;
	padding-top: 10px;
	padding-bottom: 10px;
}
.three-column .column {
	width: 100%;
	max-width: 200px;
	display: inline-block;
	vertical-align: top;
}
.three-column .contents {
	font-size: 14px;
	text-align: center;
}
.three-column img {
	width: 100%;
	max-width: 180px;
	height: auto;
}
.three-column .text {
	padding-top: 10px;
}
.img-align-vertical img {
	display: inline-block;
	vertical-align: middle;
}
@media only screen and (max-device-width: 480px) {
table[class=hide], img[class=hide], td[class=hide] {
	display: none !important;
}
.contents1 {
	width: 100%;
}
.contents1 {
	width: 100%;
}
.contents1 {
	width: 100%;
}
.contents1 {
	width: 100%;
}
.contents1 {
	width: 100%;
}
.contents1 {
	width: 100%;
}
</style>
<!--[if (gte mso 9)|(IE)]>
	<style type="text/css">
		table {border-collapse: collapse !important;}
	</style>
	<![endif]-->
</head>

<body style="Margin:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;min-width:100%;background-color:#f3f2f0;">
<center class="wrapper" style="width:100%;table-layout:fixed;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;background-color:#f3f2f0;">
  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#f3f2f0;" bgcolor="#f3f2f0;">
    <tr>
      <td width="100%"><div class="webkit" style="max-width:600px;Margin:0 auto;"> 
          
          <!--[if (gte mso 9)|(IE)]>

						<table width="600" align="center" cellpadding="0" cellspacing="0" border="0" style="border-spacing:0" >
							<tr>
								<td style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;" >
								
          
          
          <table class="outer" align="center" cellpadding="0" cellspacing="0" border="0" style="border-spacing:0;Margin:0 auto;width:100%;max-width:600px;">
            <tr>
              <td style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;">
                
                <!-- ======= start two column ======= -->
                
                <table cellpadding="0" cellspacing="0" border="0" width="100%" bgcolor="#FFFFFF"  style=" border-left:1px solid #e8e7e5; border-right:1px solid #e8e7e5">
                  <tr>
                    <td background="http://www.excitetemplate.com/images/email.jpg" bgcolor="#ce283d" width="600" height="300" valign="top" align="center"  style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:center;font-size:0;background-size:cover;"
class="two-column">
                      
                      <div>
                        
                        <div class="column" style="width:100%;max-width:299px;display:inline-block;vertical-align:top;margin-right: 40%;">
                          <table width="100%" style="border-spacing:0">
                            <tr>
                              <td class="inner" style="padding-top:20px;padding-bottom:10px; padding-right:10px;padding-left:30px;"><table class="contents1" style="border-spacing:0; width:100%">
                                  <tr>
                                    <td   align="center" valign="left" style="padding-top:20px; padding-right:30px">
                                        <img src="http://www.excitetemplate.com/images/excite-template-logo.png" width="250" alt="" style="border-width:0;width:100%; height:auto; left:0" />
                                        
                           
                                        
                                      <table border="0" align="center" cellpadding="0" cellspacing="0" style="Margin:0 auto;">
                                        <tbody>
                                          <tr>
                                            <td align="center"><table border="0" cellpadding="0" cellspacing="0" style="Margin:0 auto;">
                                                <tr>
                                                  <td width="120" height="40" align="center" bgcolor="#ffffff" style="-moz-border-radius:10px; -webkit-border-radius:10px; border-radius:10px;"><a href="http://www.excitetemplate.com/" style="width:120; display:block; text-decoration:none; border:0; text-align:center; font-weight:bold;font-size:13px; font-family: Arial, sans-serif; color: #ce283d" class="button_link">Read more » </a></td>
                                                </tr>
                                              </table></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                      </td>
                                  </tr>
                                </table></td>
                            </tr>
                          </table>
                        </div>
                     </div>
                   </td>
                  </tr>
                </table>
                
                <!-- ======= end two column ======= --> 
                
                <!-- ======= start two column ======= -->
                
                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                  <tr>
                    <td background="http://www.excitetemplate.com/images/email_back.jpg" bgcolor="#ce283d" width="600" height="200" valign="top" align="center" style="padding-top:0;">
                      <div>
                        
                        <div class="column" style="width:100%;display:inline-block;">
                          <table width="100%" style="border-spacing:0">
                            <tr>
                              <td class="inner" style="padding:1%;"><table class="contents1" style="border-spacing:0; width:100%">
                                  <tr>
                                    <td   align="center" valign="middle" style="padding-top:20px; padding-right:10px"><p style="color:#ffffff; font-size:35px;">Customer Details</p>
                                     </td>
                                  </tr>
                                  
                                </table></td>
                            </tr>
                          </table>
                        </div>
                        
                        <div class="column" style="width:100%;display:inline-block;">
                          <table width="100%" style="border-spacing:0">
                            <tr>
                              <td class="inner" style="padding:1%;"><table class="contents1" style="border-spacing:0; width:100%">
                                   <tr>
                   <td align="left" valign="middle" style="padding:2px; border: 1px solid #ffffff1f;border-radius: 2%;  width:35%">
                       <p style="font-size:16px; text-decoration:none; color:#fff;">First Name</p>
                    </td> 
                      <td align="left" valign="middle" style="padding:2px; border: 1px solid #ffffff1f;border-radius: 2%;">
                       <p style="font-size:16px; text-transform: uppercase; text-decoration:none; color:#fff;">'. $first_name .'</p>
                    </td>
                     
                   
                  </tr>
                    <tr>
                   <td align="left" valign="middle" style="padding:2px; border: 1px solid #ffffff1f;border-radius: 2%; width:35%">
                       <p style="font-size:16px; text-decoration:none; color:#fff;">Last name :</p>
                    </td> 
                      <td align="left" valign="middle" style="padding:2px; border: 1px solid #ffffff1f;border-radius: 2%;">
                       <p style="font-size:16px; text-transform: uppercase; text-decoration:none; color:#fff;">'.$last_name.'</p>
                    </td>  </tr>
                    <tr>
                   <td align="left" valign="middle" style="padding:2px; border: 1px solid #ffffff1f;border-radius: 2%; width:35%">
                       <p style="font-size:16px; text-decoration:none; color:#fff;">Email address :</p>
                    </td> 
                      <td align="left" valign="middle" style="padding:2px; border: 1px solid #ffffff1f;border-radius: 2%;">
                       <p style="font-size:16px; text-transform: uppercase; text-decoration:none; color:#fff;">'.$email.'</p>
                        </td>
                  </tr>
                    <tr>
                   <td align="left" valign="middle" style="padding:2px; border: 1px solid #ffffff1f;border-radius: 2%; width:35%">
                       <p style="font-size:16px; text-decoration:none; color:#fff;">Contact number :</p>
                    </td> 
                      <td align="left" valign="middle" style="padding:2px; border: 1px solid #ffffff1f;border-radius: 2%;">
                       <p style="font-size:16px; text-transform: uppercase; text-decoration:none; color:#fff;">'. $contact .'</p>
                        </td>
                  </tr>
                    <tr>
                    <td align="Left" valign="middle" style="padding:2px; border: 1px solid #ffffff1f;border-radius: 2%;width:35%">
                       <p style="font-size:16px; text-decoration:none; color:#fff;">Message :</p>
                    </td> 
                      <td align="left" valign="middle" style="padding:2px; border: 1px solid #ffffff1f;border-radius: 2%;">
                       <p style="font-size:16px; text-transform: uppercase; text-decoration:none; color:#fff;">'. $message .'</p>
                        </td>
                  </tr
                                  
                                </table></td>
                            </tr>
                          </table>
                        </div>
                        
                        
                        
                        <div class="column" style="width:100%;max-width:299px;display:inline-block;vertical-align:top;">
                          <table width="100%" style="border-spacing:0">
                            <tr>
                              <td align="right" style="padding:1%"><img src="http://www.excitetemplate.com/images/book.png" width="282" alt="" style="border-width:0;width:100%; height:auto;" /></td>
                            </tr>
                          </table>
                        </div>
                        </div>
                        
                      </td>
                  </tr>
                </table>
                
               
                
                <table cellpadding="0" cellspacing="0" border="0" width="100%" bgcolor="#fff">
               
                  <tr>
                    <td class="two-column"  style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:center;font-size:0;">
                      
                      <div class="column" style="width:100%;max-width:350px;display:inline-block;vertical-align:top;">
                        <table class="contents" style="border-spacing:0; width:100%">
                          <tr>
                            <td width="39%" align="right" style="padding:2%;"><a href="#" target="_blank"><img src="http://www.excitetemplate.com/images/excite-template-logo.png" alt="" width="100%" height="100" style="border-width:0;height:auto; display:block;     background: #000000; " /></a></td>
                            <td width="61%" align="left" valign="middle" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;"><p style="color:#787777; font-size:13px; text-align:left; font-family: Verdana, Geneva, sans-serif"> </td>
                          </tr>
                        </table>
                      </div>
               
                      
                      <div class="column" style="width:100%;max-width:248px;display:inline-block;vertical-align:top;">
                        <table width="100%" style="border-spacing:0">
                          <tr>
                            <td class="inner" style="padding-top:0px;padding-bottom:10px; padding-right:10px;padding-left:10px;"><table class="contents" style="border-spacing:0; width:100%">
                                <tr>
                                  <td width="32%" align="center" valign="top" style="padding-top:10px"><table width="150" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td align="center"><a href="https://www.facebook.com/excitetemplate" target="_blank"><i style="color:#ce293f; font-size:30px" class="fa fa-facebook-official" aria-hidden="true"></i></a></td>
                                      <td align="center"><a href="https://plus.google.com/+Excitetemplatewebdesigner" target="_blank"><i style="color:#ce293f; font-size:30px" class="fa fa-google" aria-hidden="true"></i></a></td>
                                      <td align="center"><a href="https://twitter.com/excitetemplate" target="_blank"><i  style="color:#ce293f; font-size:30px" class="fa fa-twitter" aria-hidden="true"></i></a></td>
                                    </tr>
                                  </table></td>
                                </tr>
                              </table></td>
                          </tr>
                        </table>
                      </div>
                      
             	</td> 											</tr> </table> 									</td>
                  </tr>
                
                </table>
                </td>
            </tr>
          </table>
         
        </div></td>
    </tr>
  </table>
</center>
</body>
</html>';
    $body2 ='
<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title></title>
<style type="text/css">
* {
	-webkit-font-smoothing: antialiased;
}
body {
	Margin: 0;
	padding: 0;
	min-width: 100%;
	font-family: Arial, sans-serif;
	-webkit-font-smoothing: antialiased;
	mso-line-height-rule: exactly;
}
table {
	border-spacing: 0;
	color: #333333;
	font-family: Arial, sans-serif;
}
img {
	border: 0;
}
.wrapper {
	width: 100%;
	table-layout: fixed;
	-webkit-text-size-adjust: 100%;
	-ms-text-size-adjust: 100%;
}
.webkit {
	max-width: 600px;
}
.outer {
	Margin: 0 auto;
	width: 100%;
	max-width: 600px;
}
.full-width-image img {
	width: 100%;
	max-width: 600px;
	height: auto;
}
.inner {
	padding: 10px;
}
p {
	Margin: 0;
	padding-bottom: 10px;
}
.h1 {
	font-size: 21px;
	font-weight: bold;
	Margin-top: 15px;
	Margin-bottom: 5px;
	font-family: Arial, sans-serif;
	-webkit-font-smoothing: antialiased;
}
.h2 {
	font-size: 18px;
	font-weight: bold;
	Margin-top: 10px;
	Margin-bottom: 5px;
	font-family: Arial, sans-serif;
	-webkit-font-smoothing: antialiased;
}
.one-column .contents {
	text-align: left;
	font-family: Arial, sans-serif;
	-webkit-font-smoothing: antialiased;
}
.one-column p {
	font-size: 14px;
	Margin-bottom: 10px;
	font-family: Arial, sans-serif;
	-webkit-font-smoothing: antialiased;
}
.two-column {
	text-align: center;
	font-size: 0;
}
.two-column .column {
	width: 100%;
	max-width: 300px;
	display: inline-block;
	vertical-align: top;
}
.contents {
	width: 100%;
}
.two-column .contents {
	font-size: 14px;
	text-align: left;
}
.two-column img {
	width: 100%;
	max-width: 280px;
	height: auto;
}
.two-column .text {
	padding-top: 10px;
}
.three-column {
	text-align: center;
	font-size: 0;
	padding-top: 10px;
	padding-bottom: 10px;
}
.three-column .column {
	width: 100%;
	max-width: 200px;
	display: inline-block;
	vertical-align: top;
}
.three-column .contents {
	font-size: 14px;
	text-align: center;
}
.three-column img {
	width: 100%;
	max-width: 180px;
	height: auto;
}
.three-column .text {
	padding-top: 10px;
}
.img-align-vertical img {
	display: inline-block;
	vertical-align: middle;
}
@media only screen and (max-device-width: 480px) {
table[class=hide], img[class=hide], td[class=hide] {
	display: none !important;
}
.contents1 {
	width: 100%;
}
.contents1 {
	width: 100%;
}
</style>
<!--[if (gte mso 9)|(IE)]>
	<style type="text/css">
		table {border-collapse: collapse !important;}
	</style>
	<![endif]-->
</head>

<body style="Margin:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;min-width:100%;background-color:#f3f2f0;">
<center class="wrapper" style="width:100%;table-layout:fixed;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;background-color:#f3f2f0;">
  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#f3f2f0;" bgcolor="#f3f2f0;">
    <tr>
      <td width="100%"><div class="webkit" style="max-width:600px;Margin:0 auto;"> 
       <table class="outer" align="center" cellpadding="0" cellspacing="0" border="0" style="border-spacing:0;Margin:0 auto;width:100%;max-width:600px;">
            <tr>
              <td style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;">
                <table border="0" width="100%" cellpadding="0" cellspacing="0"  >
                  <tr>
                    <td><table style="width:100%;" cellpadding="0" cellspacing="0" border="0">
                        <tbody>
                          <tr>
                            <td align="center"><center>
                                <table border="0" align="center" width="100%" cellpadding="0" cellspacing="0" style="Margin: 0 auto;">
                                  <tbody>
                                       
                                    <tr>
                                      <td class="one-column" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;" bgcolor="#FFFFFF">
                                        <table cellpadding="0" cellspacing="0" border="0" width="100%" bgcolor="#20202e">
                                            <tr>
                                            <td>&nbsp;</td>
                                          </tr>
                                          <tr>
                                            <td class="two-column" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:left;font-size:0;" >
                                              <div class="column" style="width:100%;max-width:80px;display:inline-block;vertical-align:top;">
                                                <table class="contents" style="border-spacing:0; width:100%"  >
                                                  <tr>
                                                    <td style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:5px;" align="left"><a href="#" target="_blank"><img src="http://www.excitetemplate.com/images/excite-logo.png" alt="" width="100" height="100" style="border-width:0; max-width:100px;height:auto; display:block" align="left"/></a></td>
                                                  </tr>
                                                </table>
                                              </div>
                                              
                                              
                                              <div class="column" style="width:100%;max-width:518px;display:inline-block;vertical-align:top;">
                                                <table width="100%" style="border-spacing:0" cellpadding="0" cellspacing="0" border="0" >
                                                  <tr>
                                                    <td class="inner" style="padding-top:0px;padding-bottom:10px; padding-right:10px;padding-left:10px;"><table class="contents" style="border-spacing:0; width:100%" cellpadding="0" cellspacing="0" border="0">
                                                        <tr>
                                                          <td align="left" valign="top">&nbsp;</td>
                                                        </tr>
                                                        
                                                      </table></td>
                                                  </tr>
                                                </table>
                                              </div>
                                              </td>
                                          </tr>
                                          <tr>
                                            <td>&nbsp;</td>
                                          </tr>
                                        </table></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </center></td>
                          </tr>
                        </tbody>
                      </table></td>
                  </tr>
                </table>
                
                <!-- ======= end header ======= --> 
                
                <!-- ======= start hero ======= -->
                
                <table class="one-column" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-spacing:0; border-left:1px solid #e8e7e5; border-right:1px solid #e8e7e5; border-bottom:1px solid #e8e7e5; border-top:1px solid #e8e7e5" bgcolor="#FFFFFF">
                  <tr>
                    <td background="https://images.unsplash.com/photo-1483058712412-4245e9b90334?auto=format&fit=crop&w=750&q=80" bgcolor="Grey" width="600" height="300" valign="top" align="center" style="padding:50px 50px 50px 50px">
                    </td>
                  </tr>
                </table>
                
                <!-- ======= end hero  ======= --> 
                <!-- ======= start article ======= -->
                
                <table class="one-column" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-spacing:0; border-left:1px solid #e8e7e5; border-right:1px solid #e8e7e5; border-bottom:1px solid #e8e7e5; border-top:1px solid #e8e7e5" bgcolor="#FFFFFF">
                  <tr>
                    <td align="center" style="padding:50px"><p style="color:#262626; font-size:24px; text-align:center; font-family: Verdana, Geneva, sans-serif">THANKS FOR YOUR ENQUIRY.</p>
                      <p style="color:#262626; font-size:16px; text-align:center; font-family: Verdana, Geneva, sans-serif;">We will get back to you soon. <br />
                       
                      </p>
                      <table border="0" align="center" cellpadding="0" cellspacing="0" style="Margin:0 auto;">
                        <tbody>
                          <tr>
                            <td align="center"><table border="0" cellpadding="0" cellspacing="0" style="Margin:0 auto;">
                                <tr>
                                  <td width="200" height="40" align="center" bgcolor="#20202e" style="-moz-border-radius: 30px; -webkit-border-radius: 30px; border-radius: 30px;"><a href="#" style="width:200; display:block; text-decoration:none; border:0; text-align:center; font-weight:bold;font-size:18px; color: #ffffff" class="button_link">View Wesbsite
                                      </a>
                                    </td>
                                </tr>
                              </table></td>
                          </tr>
                        </tbody>
                      </table>
                     </td>
                  </tr>
                </table>
                
                <!-- ======= end article ======= --> 
                
                <!-- ======= start footer ======= -->
                
                <table cellpadding="0" cellspacing="0" border="0" width="100%" bgcolor=#20202e>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="two-column" style="padding:0px; text-align:center;font-size:0;">
                      
                      <div class="column" style="width:100%;max-width:350px;display:inline-block;vertical-align:top;">
                        <table class="contents" style="border-spacing:0; width:100%">
                          <tr>
                            <td width="39%" align="right" style="padding:1px 1px;"><a href="#" target="_blank"><img src="http://www.excitetemplate.com/images/excite-logo.png" alt="" width="100" height="100" style="border-width:0; max-width:100px;height:auto; display:block; margin: 1%;" align="left">
                                </a>
                                
                            </td>
                          </tr>
                        </table>
                      </div>
             
                      
                      <div class="column" style="width:100%;max-width:248px;display:inline-block;vertical-align:top;">
                        <table width="100%" style="border-spacing:0">
                          <tr>
                            <td class="inner" style="padding-top:0px;"><table class="contents" style="border-spacing:0; width:100%">
                                <tr>
                                  <td width="32%" align="center" valign="top"><table width="150" border="0" cellspacing="0" cellpadding="0">
                                      <tr>
                                        <td width="33" align="center"><a href="#" target="_blank"><img src="http://www.excitetemplate.com/images/facebook.png" alt="facebook" width="36" height="36" border="0" style="border-width:0; max-width:36px;height:auto; display:block; max-height:36px"/></a></td>
                                        <td width="34" align="center"><a href="#" target="_blank"><img src="http://www.excitetemplate.com/images/twitter.png" alt="twitter" width="36" height="36" border="0" style="border-width:0; max-width:36px;height:auto; display:block; max-height:36px"/></a></td>
                                        <td width="33" align="center"><a href="#" target="_blank"><img src="http://www.excitetemplate.com/images/linkedin.png" alt="linkedin" width="36" height="36" border="0" style="border-width:0; max-width:36px;height:auto; display:block; max-height:36px"/></a></td>
                                      </tr>
                                    </table></td>
                                </tr>
                              </table></td>
                          </tr>
                        </table>
                      </div>
                      </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                </table></td>
            </tr>
          </table>
       
        </div></td>
    </tr>
  </table>
</center>
</body>
</html>';
   
    
$headers = array ('MIME-Version' => '1.0rn',
        'Content-Type' => "text/html; charset=ISO-8859-1rn",'From' => $from,
  'To' => $to,
  'Subject' => $subject);
  
$smtp = Mail::factory('smtp',
  array ('host' => $host,
    'auth' => true,
    'username' => $username,
    'password' => $password));

$mail = $smtp->send($to, $headers, $body);
$mail = $smtp->send($from, $headers, $body2);

if (PEAR::isError($mail)) {
  echo("<p>" . $mail->getMessage() . "</p>");
 } else
{
   echo "<script>alert('Mail Sent Successfully')</script>";
    echo "<script>window.open('contact.html','_self')</script>";
 }
}
?>