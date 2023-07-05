
<?php 
 include('header.php');
 if (empty($_SESSION['c_id'])) 
 {
   header("location:../index.php");
}
?>

  
  <div class="container mt-5 p-t-3 mb-5 pb-5">
  	<div class="row pt-4 pb-4 mt-5 mb-5">
  		 <div class="col-lg-10 bg  p-3">
            <h2 class="text-white"><i>Recent Applications</i></h2>
             <?php 

                include('../db.php');
                $c_id=$_SESSION['c_id'];
              $sql = "SELECT * FROM jobpost INNER JOIN apply_job_post ON jobpost.j_id=apply_job_post.jobpost_id  INNER JOIN user ON user.id=apply_job_post.u_id WHERE apply_job_post.c_id='$c_id'";


                $res=mysqli_query($con,$sql);
                if (mysqli_num_rows($res)>0) {

                    while ($row=mysqli_fetch_assoc($res)) {

                      ?>
                      <div class="attachment-block clearfix bg-light mb-3 p-2">
                        <h4 class="attachment-heading"><a  href="user-application.php?uid=<?php echo $row['id'] ?> && jobpost_id=<?php echo $row['j_id'] ?>"><?php echo $row['jobtitle']?>@(<?php echo $row['fname'] ?> <?php echo $row['lname'] ?>)</a></h4>
                        <div class="attachment-text padding-2">
                          <div class="pull-left"><i class="fa fa-calendar"></i> <?php echo $row['post_on'] ?></div>  
                             <?php
                               if ($row['status']==1) {
                                 ?>
                                  <div class="pull-right"><strong class="text-green">Pending</strong></div> 

                                 <?php
                               }
                               else if($row['status']==0)
                                   {
                                     ?>
                                    <div class="pull-right"><strong class="text-green">Under Review</strong></div> 
                                     <?php
                                   }
                                   else{
                                    ?>
                                     <div class="pull-right"><strong class="text-green">Rejected</strong></div> 
                                    <?php
                                   }
                               ?>                                 
                        </div>
                    </div>
                      <?php
                      
                }
              }
             ?>           

                        
        </div>
  		
  	</div>
  </div>

  

<?php 
 include('footer.php');
?>
