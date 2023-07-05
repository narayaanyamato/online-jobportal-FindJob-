
<?php

session_start();

if (empty($_SESSION['c_id'])) 
 {
   header("location:../index.php");
}

include('../db.php');
$jp_id= $_SESSION['j_id'];
$uid=$_SESSION['uid'];

$c_id=$_SESSION['c_id'];
$sql="UPDATE `apply_job_post` SET `status`='000' WHERE `jobpost_id`='$jp_id' and `c_id`='$c_id' and`u_id`='$u_id'";
 if (mysqli_query($con,$sql)) {
      ?>
        <script type="text/javascript">alert("Mark As Under Review");//window.open('job-applications.php',"_self")</script>
      <?php	
 }
 else
 {
   ?>
        <script type="text/javascript">alert("Try Again")</script>
      <?php
 }

 