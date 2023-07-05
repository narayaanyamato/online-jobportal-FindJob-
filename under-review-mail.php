

 <?php
session_start();

include('db.php');
$id=$_GET['id'];
$sql="select * from user where id='$id'";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res);
 $name=$row['fname'];
 $email=$row['email'];
 $desc=$_SESSION['under'];

 $jpid=$_GET['jpid'];
 $sql1="select * from jobpost where j_id='$id'";
$res1=mysqli_query($con,$sql1);
$row1=mysqli_fetch_assoc($res1);
 $jtitle=$row1['jobtitle'];
 echo $jtitle;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


$mail = new PHPMailer(true);
 
 
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
    $mail->setFrom('dontreplayfindjob@gmail.com', 'FindJob');
    $mail->addAddress($email,$name);     //Add a recipient
  
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Your Application for  Resume Under Review !';
    $mail->Body    = '<!DOCTYPE html>
<html>
  <head>
    <title>Candidate Resume Under Review</title>
  </head>
    <style type="text/css">
  body {
    font-family: Verdana, sans-serif;
    font-size: 15px;
    background-color:#f2f2f2;
    margin: 0px;
}
h1 { 
    font-size: 1.2em;
    color: #880015;
    letter-spacing: 2px;
  }
  p {
    font-size: 1.1em;
    color: #666666;
  }
  .email-container{
    width: 600px; 
    margin: 0px auto 0px;
    background-color:#ffffff;
    padding: 20px;
    padding-top: 0px;
    border-radius: 8px;
    box-shadow: 0px 5px 7px #aaaaaa;
  }
  .email-sub-container{
    background-color:#f2f2f2;
    padding: 20px;
    padding-top: 10px;
    margin-bottom: 20px;
    border-radius: 4px;
  }
</style>

<body>
  <div class="email-container">
    <h1></h1>
    <div class="email-sub-container">
      <p>Hello '.$name.',</p>
      <p>'.$desc.'</p>
      <p>Thanks for your patience!</p>
    </div>
  </div>
</body>
</html>';
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
    header("location:company/job-applications.php");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


?>