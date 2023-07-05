

<?php
include('header.php');

if (empty($_SESSION['c_id'])) 
 {
   header("location:../index.php");
}
  
?>

                <?php 
                  include('../db.php');
                  $id=$_GET['uid'];
                  $sql="SELECT * FROM user WHERE id='$id'";
                  $res=mysqli_query($con,$sql);
                  $row=mysqli_fetch_assoc($res);
                 
                ?>
        <div class="container">
        	<div class="col-md-10 bg mt-5 mb-5 p-3">
                  <div class="pull-left border-bottom">
                  <h2 class="text-white"><b><i><?php echo $row['fname']; ?> <?php echo $row['lname'] ?> </i></b></h2>
                </div>
                <div class="pull-right">
                    <div class="pull-left text-white p-2">
                    	<div class="pull-left text-white"><strong class="text-orange">Summary</strong></div>
                     <?php echo $row['bio']; ?>
                 </div>
                  <div class="pull-left text-white p-2">
                    	<div class="pull-left text-white"><strong class="text-orange">Contacts</strong></div>
                     Phone : <?php echo $row['phone']; ?><br>
                     Email : <?php echo $row['email'] ;?>
                 </div>

                 <div class="pull-left text-white p-2">
                    	<div class="pull-left text-white"><strong class="text-orange">Location</strong></div>
                      <?php echo $row['address']; ?><br>
                       <?php echo $row['state']; ?>, <?php echo $row['city']; ?><br>
                     
                 </div>
                    <div class="pull-left text-white p-2">
                    	<div class="pull-left text-white"><strong class="text-orange">Education ,Exprience and Skill</strong></div>
                      Qualification : <?php echo $row['highql']; ?><br>
                     Working Exprience : <?php echo $row['designation']; ?><br>
                     Skill : <?php echo $row['skill']; ?><br>
                     
                 </div>
                 <div class="pull-left text-white"><strong class="text-orange">Resume<br> 
                   <a href="../cv/<?php echo $row['cv']; ?>"  targert="_blabk" class="btn btn-info">View  Resume</a><br><br><br><br>
                </div>
              
                <div>
                 
                   <div class="row">
                    <div class="col-md-6 pull-left">
                    	<form method="post">
                            <div class="form-floating">
                              <textarea class="form-control" placeholder="Leave  Msg.. " name="uderreview"></textarea>
                              <label for="floatingTextarea"></label>
                            </div>
                    		 <button name="review" value="review" class="btn btn-success">Mark Under Review</button>
                    	</form>
                    </div>
                    <div class="col-md-6 pull-right">
                     
                      <form method="post">
                        <div class="form-floating">
                            <textarea class="form-control" name="reject" placeholder="Leave Reject Msg..." id="floatingTextarea"></textarea>
                            <label for="floatingTextarea"></label>
                            </div>
                    		 <button name="rejected" value="rejected" class="btn btn-danger">Reject Application</button>
                    	</form>
                    </div>
                  </div>
                </div>

                <div>
                </div>
            </div>

        </div>
</div>

<?php 


   if(array_key_exists('review', $_POST)) { 
        
        include('../db.php');
$jp_id= $_GET['jobpost_id'];
$uid=$_GET['uid'];
$c_id=$_SESSION['c_id'];
$_SESSION['under']=$_POST['uderreview'];
echo $jp_id;

$sql="UPDATE `apply_job_post` SET `status`='0' WHERE `jobpost_id`='$jp_id' and `c_id`='$c_id' and `u_id`='$uid';";
 if (mysqli_query($con,$sql)) {

      ?>
        <script type="text/javascript">alert("Mark As Under Review");window.open('../under-review-mail.php?id=<?php echo $uid; ?>&&jpid=<?php echo $_GET['jobpost_id']; ?>',"_self")</script>
      <?php	
 }
 else
 {
   ?>
        <script type="text/javascript">alert("Try Again")</script>
      <?php
 }
    } 

if(array_key_exists('rejected', $_POST)) { 
        
        include('../db.php');
$jp_id= $_GET['jobpost_id'];
$uid=$_GET['uid'];
$c_id=$_SESSION['c_id'];
$_SESSION['reject']=$_POST['reject'];
$sql="UPDATE `apply_job_post` SET `status`='2' WHERE `jobpost_id`='$jp_id' and `c_id`='$c_id' and `u_id`='$uid';";
 if (mysqli_query($con,$sql)) {
      ?>
        <script type="text/javascript">alert("Rejected");window.open('../reject-mail.php?id=<?php echo $uid; ?>&&jpid=<?php echo $_GET['jobpost_id'] ?>','_self')</script>
      <?php	
 }
 else
 {
   ?>
        <script type="text/javascript">alert("Try Again")</script>
      <?php
 }
    } 
?>

<?php

include('footer.php');
 ?>