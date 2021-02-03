<?php
require('phpmailer/class.phpmailer.php');

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Username = "magzane1@gmail.com";
$mail->Password = "PutYourGmailPasswordHere";
$mail->Host     = "smtp.gmail.com";
//$mail->Mailer   = "smtp";
$mail->SetFrom($_POST["userEmail"], $_POST["userName"]);
$mail->AddAddress("magzane1@gmail.com");	
$mail->Subject = ("Magzane - Got a new contact form enquiry ".  $_POST["userName"] . " - Call: " .$_POST["Contact"]);
$mail->WordWrap   = 80;
$mail->MsgHTML("Name: " .  $_POST["userName"] . "<br />" . "Contact: " .  $_POST["Contact"] . "<br />" . "Email: " .  $_POST["userEmail"] . "<br />" . "Message: " .   $_POST["message"] );
    //Attach single files.
    // if (isset($_FILES['userfile']) &&
    // $_FILES['userfile']['error'] == UPLOAD_ERR_OK) {
    // $mail->AddAttachment($_FILES['userfile']['tmp_name'],
                         // $_FILES['userfile']['name']);
//}
    // this is working but no extenstion $mail->AddAttachment($_FILES['userfile']['tmp_name']);
$mail->IsHTML(true);
if(!$mail->Send()) {
	echo "<p class='text-danger'>Problem in Sending Mail.</p>";
} else {
	echo "<p class='text-white'>Thanks for submitting your message, One of our associate will call you shortly.</p>";
}	
?>