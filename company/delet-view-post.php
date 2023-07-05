<?php 
include 'header.php';

if (empty($_SESSION['c_id'])) 
 {
   header("location:../index.php");
}


include('../db.php');
 $j_id=$_GET['j_id'];
 $sql="DELETE FROM `jobpost` WHERE j_id='$j_id'";
 if (mysqli_query($con,$sql)) {
    ?>
        <script type="text/javascript">alert("job post Deleted");window.open("my-job-post.php","_self")</script>
        <?php
 }
 else{
    ?>
        <script type="text/javascript">alert("job not Deleted");</script>
        <?php
 }


?>
