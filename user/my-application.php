
<?php 
 include('header.php');
 if (empty($_SESSION['id'])) 
 {
   header("location:../index.php");
}
?>

  
  <div class="container mt-5 p-t-3 mb-4 pb-5">
    <div class="row">
         <div class="col-lg-8 bg p-3">
            <h2 class="text-white"><i>Recent Applications</i></h2>
            <p class="text-white ">Below you will find job roles you have applied for</p>

                    <?php 
                     include('../db.php');
                     $id=$_SESSION['id'];
                     $sql="SELECT * FROM jobpost INNER JOIN apply_job_post ON jobpost.j_id=apply_job_post.jobpost_id WHERE apply_job_post.u_id='$id'";
                     $res=mysqli_query($con,$sql);
                     if (mysqli_num_rows($res)>0) {
                         
                         while($row=mysqli_fetch_assoc($res)){
                          ?>
                           
                        <div class="attachment-block clearfix p-2 mb-3 bg-light rounded">
                            <h4 class="attachment-heading"><a href="view-job-post.php?id=<?php echo $row['j_id']; ?>"><?php echo $row['jobtitle']; ?></a></h4>
                            <div class="attachment-text padding-2">
                              <div class="pull-left"><i class="bi bi-calendar"></i> <?php echo $row['post_on']; ?></i></div>  
                               <div class="pull-left"> <i class="bi bi-cash"></i>  <?php echo $row['minsal']; ?> - <?php echo $row['maxsal']; ?> Rupess </div>
                               <div class="pull-left"> <i class="bi bi-briefcase"></i> <?php echo $row['exp']; ?></div> 
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
