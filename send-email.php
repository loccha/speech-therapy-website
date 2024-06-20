<?php

$name = $_POST["name"];
$email = $_POST["email"];

require "vendor/autoload.php"

use PHPMailer\PHPMailer\PHPMailer;
use PHPmailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp-mail.outlook.com"
$mail->SMTPSecure = PHPMAILER::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "charlotte.locas@hotmail.com"
$mail->Password = "sjmadtc310514:)"

$mail->setForm($email, $name);
$mail->addAddress("charlotte.locas@hotmail.com", "Charlotte");

$mail->Subject = "New mail";
$mail->Body = "This is a test";

$mail->send();

echo "email sent";