
<?php 
 include('header.php');
 if (empty($_SESSION['c_id'])) 
 {
   header("location:../index.php");
}

include('../db.php');
$cid=$_SESSION['c_id'];
$sql="SELECT * FROM `company` where c_id='$cid' ";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res);

?>


<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="alert alert-info bg p-2 text-white" role="alert">
       <strong>WELCOME!  , </strong> <?php echo $row['name']; ?>
   </div>
    </div>
    
  </div>
</div>




  <div class="container p-t-3  pb-5">
        <div class="row">
           <div class="col-lg-8 bg">
                <h2 class="text-white"><i>USER PROFILE DETAILS </i></h2>
                      <div class="attachment-block clearfix rounded">
                       <div class="col-md-12 ps-md-4">

                    <div class="col-12 bg-light mb-3 pb-3">
                      <div class="d-flex align-items-center justify-content-between border-bottom">
                          <p class="py-2">Full Name</p>
                          <p class="py-2 text-muted"><?php echo $row['name']; ?>;</p>
                      </div>
                      <div class="d-flex align-items-center justify-content-between border-bottom">
                          <p class="py-2">Email</p>
                          <p class="py-2 text-muted"><?php echo $row['mail']; ?></p>
                      </div>
                      <div class="d-flex align-items-center justify-content-between border-bottom">
                          <p class="py-2">Phone</p>
                          <p class="py-2 text-muted"><?php echo $row['phone']; ?></p>
                      </div>
                     
                      <div class="d-flex align-items-center justify-content-between border-bottom">
                          <p class="py-2">Website</p>
                          <p class="py-2 text-muted"><a href="<?php echo $row['Website']; ?>"><?php echo $row['Website']; ?></a></p>
                      </div>
                      <div class="d-flex align-items-center justify-content-between border-bottom">
                          <p class="py-2">State</p>
                          <p class="py-2 text-muted"><?php echo $row['state']; ?></p>
                      </div>

                      <div class="d-flex align-items-center justify-content-between border-bottom">
                          <p class="py-2">City</p>
                          <p class="py-2 text-muted"><?php echo $row['city']; ?></p>
                      </div>
                      <div class="d-flex align-items-center justify-content-between border-bottom">
                          <p class="py-2">Logo</p>
                          <p class="py-2 text-muted"><a href="../logo/<?php echo $row['logo']; ?>"><i class="bi bi-file-image-fill"></i></a></p>
                      </div>
                      
                      <div class="d-flex align-items-center justify-content-between border-bottom">
                          <p class="py-2">Summary:</p>
                          <p class="py-2 text-muted text-justify"><?php echo $row['cbio']; ?></p>
                      </div>
                  </div>
          </div>
        </div>    
    </div>
    <div class="col-lg-4 bg p-3">
      
      <div class="card mt-5" >
      <img src="https://regask.com/wp-content/uploads/2022/02/Why-are-some-companies-struggling-to-meet-their-sustainability-and-ESG-targets.png" class="card-img-top" alt="Toatal job post appliedhire.png">
      
    
      </div>
    </div>
  </div>
</div>
  
  <div class="container mt-5 p-t-3">
    <div class="row pt-4 pb-4 mt-5 mb-5">
       <div class="col-lg-10 bg  p-3">
            <h2 class="text-white"><i>Overview</i></h2>
            <p class="text-white "> In this dashboard you are able to change your account settings,<br> post and manage your jobs. Got a question? Do not hesitate to drop us a mail.</p>

                    <div class="attachment-block clearfix p-3  rounded">
                    <div class="row">
                      <div class="col-md-6 bg-light">
                        <div class="info-box bg-c-yellow">
                          <span class="info-box-icon bg-red"><i class="bi bi-file-person-fill" width="32" height="32"></i></span>
                          <div class="info-box-content">
                            <span class="info-box-text p-2">Job Posted</span>
                            <?php 
                            include('../db.php');
                            $id=$_SESSION['c_id'];
                            $sql="select * from jobpost where jon_id='$id'";
                            $res=mysqli_query($con,$sql);
                            $count=mysqli_num_rows($res);
                            ?>
                          <span class="info-box-number text-info"><?php echo $count;?></span>
                          </div>
                        </div>                
                      </div>
                        </div>

                        <div class="row mt-3">
                           <div class="col-md-6 bg-light ">
                            <div class="info-box bg-c-yellow">
                              <span class="info-box-icon bg-green"><i class="bi bi-file-earmark"></i></span>
                              <div class="info-box-content p-1">
                                <?php

                              include('../db.php');
                              $c_id=$_SESSION['c_id'];
                            $sql = "SELECT * FROM jobpost INNER JOIN apply_job_post ON jobpost.j_id=apply_job_post.jobpost_id  INNER JOIN user ON user.id=apply_job_post.u_id WHERE apply_job_post.c_id='$c_id'";
                              $res=mysqli_query($con,$sql);
                              $tpost=mysqli_num_rows($res);

                                 ?>
                                <span class="info-box-text">Application For Jobs</span>
                                                    <span class="info-box-number text-info text-bold"><?php echo $tpost; ?> </span>
                              </div>
                            </div>
                      </div>
                        </div>
                      </div>

                      

                        
          </div>
      
    </div>
  </div>

  

<?php 
 include('footer.php');
?>
