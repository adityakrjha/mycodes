<?php
echo "string1";
require("mail/class.phpmailer.php");
echo "string";
$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "smtp.gmail.com";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "calltutors2015@gmail.com";  // SMTP username
$mail->Password = "callutkarsh"; // SMTP password
$mail->Port = 465;
 $mail->Mailer = "smtp";
$mail->SMTPSecure = 'ssl';
$mail->From = "calltutors2015@gmail.com";
$mail->FromName = "Utkarsh";
$mail->AddAddress("utkarsh578@gmail.com", "Utkarsh");

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
//$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
//$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "Here is the subject";
$mail->Body    = "This is the HTML message body <b>in bold!</b>";
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";
?>