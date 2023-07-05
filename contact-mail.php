
 <?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


$mail = new PHPMailer(true);
 
 $subj=$_SESSION['subj'];
 $email=$_SESSION['email'];
 $msg=$_SESSION['msg'];
 $name=$_SESSION['name'];

try {
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;               
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'dontreplayfindjob@gmail.com';                     //SMTP username
    $mail->Password   = 'lgiftnlpkjjysttg';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($email,$name);
    $mail->addAddress('dontreplayfindjob@gmail.com','Mailer');     //Add a recipient
  
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subj;
    $mail->Body    = $msg;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->addAddress($email);               //Name is optional
    $mail->addReplyTo($email, $name);
    $mail->send();
    echo 'Message has been sent';
    header("location:contact.php");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


?>