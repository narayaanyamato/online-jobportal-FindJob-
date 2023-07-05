

 <?php
session_start();

include('db.php');
$id=$_GET['id'];
$sql="select * from user where id='$id'";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res);
 $name=$row['fname'];
 $email=$row['email'];
 $desc=$_SESSION['reject'];

 $jpid=$_GET['jpid'];
 $sql1="select * from jobpost where j_id='$id'";
$res1=mysqli_query($con,$sql1);
$row1=mysqli_fetch_assoc($res1);
 $jtitle=$row1['jobtitle'];
 
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
    $mail->Subject = 'WE REGRET TO INFORM YOU ';
    $mail->Body    = ' 

<!DOCTYPE html>
<html>
<head>
  <title>Candidate Resume Rejection</title>
  <style type="text/css">
    .container {
      width: 600px;
      margin: 0 auto;
      text-align: center;
      font-family: arial;
      border: 1px solid #eee;
      padding: 20px;
      ;
    }
    h1 {
      color: #f25162;
      margin-bottom: 5px;
      text-transform: uppercase;
      letter-spacing: 1px;
    }
    p {
      margin-top: 20px;
      line-height: 2;
    
    }
    hr {
      border-top: 1px solid #f25162;
    }
  </style>
</head>
<body>
  <div class="container">
   <p>Hello '.$name.',</p>
  <p>'.$desc.'</p>
  <p>Thanks for your patience!</p>
  
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