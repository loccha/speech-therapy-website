<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$surname = htmlspecialchars($_POST["surname"], ENT_QUOTES, 'UTF-8');
$name = htmlspecialchars($_POST["name"], ENT_QUOTES, 'UTF-8');
$child_surname = htmlspecialchars($_POST["child-surname"], ENT_QUOTES, 'UTF-8');
$child_name = htmlspecialchars($_POST["child-name"], ENT_QUOTES, 'UTF-8');
$phone = htmlspecialchars($_POST["phone"], ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_POST["email"], ENT_QUOTES, 'UTF-8');
$child_age = $_POST["child-age"];
$school_level = $_POST["school-level"];
$monday = isset($_POST["monday"]) ? 'Lundi: disponible' : 'Lundi: indisponible';
$tuesday = isset($_POST["tuesday"]) ? 'Mardi: disponible': 'Mardi: indisponible';
$wednesday = isset($_POST["wednesday"]) ? 'Mercredi: disponibile': 'Mercredi: indisponible';
$thursday = isset($_POST["thursday"]) ? 'Jeudi: disponibile': 'Jeudi: indisponible';
$friday = isset($_POST["friday"]) ? 'Vendredi: disponibile': 'Vendredi: indisponible'; 
$message = htmlspecialchars($_POST["message"], ENT_QUOTES, 'UTF-8');

$send_username = $_ENV['EMAIL_SEND_USERNAME'];
$send_password = $_ENV['EMAIL_SEND_PASSWORD'];
$dest_username = $_ENV['EMAIL_DEST_USERNAME'];

$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = $send_username; 
    $mail->Password = $send_password; 

    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->CharSet = PHPMailer::CHARSET_UTF8;

    // From
    $mail->setFrom($send_username, "CL Orthophoniste");

    // Dest
    $mail->addAddress($dest_username, 'Camille');

    $mail->isHTML(true);
    $mail->Subject = 'Nouvelle demande de rendez-vous';
    $mail->Body    = '<b>Prénom: </b>'. $surname .' <br>
                      <b>Nom: </b>'. $name .'<br>
                      <b>Prénom de l\'enfant: </b> '. $child_surname .'<br>
                      <b>Nom de l\'enfant: </b>'. $child_name .'<br>
                      <b>Âge de l\'enfant: </b> '. $child_age .' <br>
                      <b>Niveau de scolarité: </b> '. $school_level .'<br>
                      <b>Numéro de téléphone: </b>'. $phone .'<br>
                      <b>Adresse courriel: </b>' . $email . '<br><br> 
                      <b>Disponibilités: </b><br>' 
                        . $monday . '<br>' . $tuesday . '<br>' . $wednesday . '<br>' . $thursday . '<br>' . $friday . '<br><br>
                      <b>Inquiétudes: </b> '. $message .'<br>';

    $mail->send();

    header("Location: confirmation.html");
    die();

} catch (Exception $e) {
    echo "Échec de l'envoi du formulaire. Veuillez réessayer plus tard.";
}
?>
