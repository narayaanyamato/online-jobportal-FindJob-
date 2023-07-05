
 <?php
session_start();

if (empty($_SESSION['id'])) 
 {
   header("location:index.php");
}

include('db.php');
 $id=$_GET['cid'];
  $sql1="SELECT * FROM company WHERE c_id='$id'";
  $res1=mysqli_query($con,$sql1);
  $row1=mysqli_fetch_assoc($res1);
  $cname=$row1['cname'];
  $city=$row1['city'];
  $state=$row1['state'];

  $jid=$_GET['jid'];
  $sql2="SELECT * FROM jobpost WHERE j_id='$jid'";
  $res2=mysqli_query($con,$sql2);
  $row2=mysqli_fetch_assoc($res2);
  $jobt=$row2['jobtitle'];



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


$mail = new PHPMailer(true);
 
 $uid=$_SESSION['id'];
 $qry="select * from user where id='$uid'";
 $result=mysqli_query($con,$qry);
 $user=mysqli_fetch_assoc($result);
 $email=$user['email'];
 $name=$user['fname'];

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
    $mail->Subject = 'FindJob Application:'.$jobt.'';
    $mail->Body    = ' <!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="utf-8"> <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name="x-apple-disable-message-reformatting">  <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <title>Applied new job post</title> 
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <style>

        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,
body {
    margin: 0 auto !important;
    padding: 0 !important;
    height: 100% !important;
    width: 100% !important;
    background: #f1f1f1;
}

/* What it does: Stops email clients resizing small text. */
* {
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}

/* What it does: Centers email on Android 4.4 */
div[style*="margin: 16px 0"] {
    margin: 0 !important;
}

/* What it does: Stops Outlook from adding extra spacing to tables. */
table,
td {
    mso-table-lspace: 0pt !important;
    mso-table-rspace: 0pt !important;
}

/* What it does: Fixes webkit padding issue. */
table {
    border-spacing: 0 !important;
    border-collapse: collapse !important;
    table-layout: fixed !important;
    margin: 0 auto !important;
}

/* What it does: Uses a better rendering method when resizing images in IE. */
img {
    -ms-interpolation-mode:bicubic;
}

/* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
a {
    text-decoration: none;
}

/* What it does: A work-around for email clients meddling in triggered links. */
*[x-apple-data-detectors],  /* iOS */
.unstyle-auto-detected-links *,
.aBn {
    border-bottom: 0 !important;
    cursor: default !important;
    color: inherit !important;
    text-decoration: none !important;
    font-size: inherit !important;
    font-family: inherit !important;
    font-weight: inherit !important;
    line-height: inherit !important;
}

/* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
.a6S {
    display: none !important;
    opacity: 0.01 !important;
}

/* What it does: Prevents Gmail from changing the text color in conversation threads. */
.im {
    color: inherit !important;
}


img.g-img + div {
    display: none !important;
}


@media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
    u ~ div .email-container {
        min-width: 320px !important;
    }
}
/* iPhone 6, 6S, 7, 8, and X */
@media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
    u ~ div .email-container {
        min-width: 375px !important;
    }
}
/* iPhone 6+, 7+, and 8+ */
@media only screen and (min-device-width: 414px) {
    u ~ div .email-container {
        min-width: 414px !important;
    }
}


    </style>

    <!-- CSS Reset : END -->

    <!-- Progressive Enhancements : BEGIN -->
    <style>

      .primary{
  background: #17bebb;
}
.bg_white{
  background: #ffffff;
}
.bg_light{
  background: #f7fafa;
}
.bg_black{
  background: #000000;
}
.bg_dark{
  background: rgba(0,0,0,.8);
}
.email-section{
  padding:2.5em;
}

/*BUTTON*/
.btn{
  padding: 10px 15px;
  display: inline-block;
}
.btn.btn-primary{
  border-radius: 5px;
  background: #17bebb;
  color: #ffffff;
}
.btn.btn-white{
  border-radius: 5px;
  background: #ffffff;
  color: #000000;
}
.btn.btn-white-outline{
  border-radius: 5px;
  background: transparent;
  border: 1px solid #fff;
  color: #fff;
}
.btn.btn-black-outline{
  border-radius: 0px;
  background: transparent;
  border: 2px solid #000;
  color: #000;
  font-weight: 700;
}
.btn-custom{
  color: rgba(0,0,0,.3);
  text-decoration: underline;
}

h1,h2,h3,h4,h5,h6{
  font-family:Poppins, sans-serif;
  color: #000000;
  margin-top: 0;
  font-weight: 400;
}

body{
  font-family: sans-serif;
  font-weight: 400;
  font-size: 15px;
  line-height: 1.8;
  color: rgba(0,0,0,.4);
}

a{
  color: #17bebb;
}

table{
}
/*LOGO*/

.logo h1{
  margin: 0;
}
.logo h1 a{
  color: #17bebb;
  font-size: 24px;
  font-weight: 700;
  font-family:poppins, sans-serif;
}

/*HERO*/
.hero{
  position: relative;
  z-index: 0;
}

.hero .text{
  color: rgba(0,0,0,.3);
}
.hero .text h2{
  color: #000;
  font-size: 34px;
  margin-bottom: 0;
  font-weight: 200;
  line-height: 1.4;
}
.hero .text h3{
  font-size: 24px;
  font-weight: 300;
}
.hero .text h2 span{
  font-weight: 600;
  color: #000;
}

.text-author{
  bordeR: 1px solid rgba(0,0,0,.05);
  max-width: 50%;
  margin: 0 auto;
  padding: 2em;
}
.text-author img{
  border-radius: 50%;
  padding-bottom: 20px;
}
.text-author h3{
  margin-bottom: 0;
}
ul.social{
  padding: 0;
}
ul.social li{
  display: inline-block;
  margin-right: 10px;
}

/*FOOTER*/

.footer{
  border-top: 1px solid rgba(0,0,0,.05);
  color: rgba(0,0,0,.5);
}
.footer .heading{
  color: #000;
  font-size: 20px;
}
.footer ul{
  margin: 0;
  padding: 0;
}
.footer ul li{
  list-style: none;
  margin-bottom: 10px;
}
.footer ul li a{
  color: rgba(0,0,0,1);
}


@media screen and (max-width: 500px) {


}


    </style>


</head>

<body width="100%" style="margin:20px; padding: 10px !important; mso-line-height-rule: exactly; background-color: #f1f1f1;">
  <center style="width: 100%; background-color: #f1f1f1;">
    <div style="display: none; font-size: 1px;max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
      &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
    </div>
    <div style="max-width: 600px; margin: 0 auto;" class="email-container">
      <!-- BEGIN BODY -->
      <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
        <tr>
          <td valign="top" class="bg_white" style="padding: 1em 2.5em 0 2.5em;">
            <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
              <tr>
                <td class="logo" style="text-align: left;">
                  <h1 style="color: black;font-size: 25px;"><img src="image.similarpng.com/very-thumbnail/2020/11/Blue-correct-icon-on-transparent-background-PNG.png" width="24px" height="24px" style="padding-top: 7px;" > Application Has Been Submitted! </h1>
                </td>
              </tr>
            </table>
          </td>
        </tr><!-- end tr -->
        <tr>
          <td valign="middle" class="hero bg_white">
            <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
              <tr>
                <td style="padding:1px; text-align: left; padding-left: 3em;">
                  <div class="text">
                    <h3 style="color:black; font-family:sans-serif;line-height:1;"><a href="http://localhost/jobportal/user/jobs.php">'.$jobt.'</a></h3>
                  </div>
                   <div class="text" style="padding-bottom:5px;">
                    <h4 style="color:black;"><a'.$cname.' IT Services Pvt.Ltd <br>- '.$city.', '.$state.'</a></h5>
                  </div>
                </td>
                <td><img src="https://www.ivywise.com/cdn-cgi/image/fit=scale-down,quality=50,width=1200/https://www.ivywise.com/core/wp-content/uploads/2017/01/What-Happens-to-Your-College-Application-After-Its-Submitted.jpg" width="150px" height="150px"></td>

              </tr>
            </table>

             <hr>

        <p style="padding-left: 3em">The following items were sent to '.$cname.' IT Services Pvt.Ltd. Good luck!</p>
        <ul>
          <li>Application</li>
          <li>Resume</li>
        </ul>
             <hr>
           <p style="padding-left: 3em"><b>You will receive an application status update from FindJob within a few weeks.</b></p>

          </td>
        </tr><!-- end tr -->
      <!-- 1 Column Text + Button : END -->
      </table>
    

    </div>
  </center>
</body>
</html>';
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
    header("location:user/jobs.php");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


?>