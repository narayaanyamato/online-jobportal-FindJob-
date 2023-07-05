
<?php 
 include('header.php');
 if (empty($_SESSION['id'])) 
 {
   header("location:../index.php");

}

 include('../db.php');
$id=$_SESSION['id'];
$sql="SELECT * FROM `user` where id='$id' ";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res);
;?>

<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="alert alert-info bg p-2 text-white" role="alert">
       <strong>WELCOME!  , </strong> <?php echo $row['fname']; ?> <?php echo $row['lname']; ?>
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
                          <p class="py-2 text-muted"><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></p>
                      </div>
                      <div class="d-flex align-items-center justify-content-between border-bottom">
                          <p class="py-2">Email</p>
                          <p class="py-2 text-muted"><?php echo $row['email']; ?></p>
                      </div>
                      <div class="d-flex align-items-center justify-content-between border-bottom">
                          <p class="py-2">Phone</p>
                          <p class="py-2 text-muted"><?php echo $row['phone']; ?></p>
                      </div>
                      <div class="d-flex align-items-center justify-content-between border-bottom">
                          <p class="py-2">Date of Birth</p>
                          <p class="py-2 text-muted"><?php echo $row['dob']; ?></p>
                      </div>
                      <div class="d-flex align-items-center justify-content-between border-bottom">
                          <p class="py-2">Address</p>
                          <p class="py-2 text-muted"><?php echo $row['address']; ?></p>
                      </div>
                      <div class="d-flex align-items-center justify-content-between border-bottom">
                          <p class="py-2">State</p>
                          <p class="py-2 text-muted"><?php echo $row['state']; ?></p>
                      </div>

                      <div class="d-flex align-items-center justify-content-between border-bottom">
                          <p class="py-2">Branch</p>
                          <p class="py-2 text-muted"><?php echo $row['stream']; ?></p>
                      </div>
                      <div class="d-flex align-items-center justify-content-between border-bottom">
                          <p class="py-2">Education</p>
                          <p class="py-2 text-muted"><?php echo $row['highql']; ?></p>
                      </div>
                      <div class="d-flex align-items-center justify-content-between border-bottom">
                          <p class="py-2">City</p>
                          <p class="py-2 text-muted"><?php echo $row['city']; ?></p>
                      </div>
                      <div class="d-flex align-items-center justify-content-between border-bottom">
                          <p class="py-2">Resume</p>
                          <p class="py-2 text-muted"><a href="../cv/<?php echo $row['cv']; ?>"><i class="bi bi-file-earmark-text"></i></a></p>
                      </div>
                      <div class="d-flex align-items-center justify-content-between border-bottom">
                          <p class="py-2">Skill</p>
                          <p class="py-2 text-muted"><?php echo $row['skill']; ?></p>
                      </div>
                      <div class="d-flex align-items-center justify-content-between border-bottom">
                          <p class="py-2">Summary:</p>
                          <p class="py-2 text-muted text-justify"><?php echo $row['bio']; ?></p>
                      </div>
                  </div>
          </div>
        </div>    
    </div>
    <div class="col-lg-4 bg p-3">
      
      <div class="card mt-5" >
      <img src="https://img.freepik.com/free-vector/recruitment-concept-illustration_23-2148621466.jpg?w=740&t=st=1683995688~exp=1683996288~hmac=9def349556ce58990be5ced74ed620384d320e3e98d49709454a407643ac4de1" class="card-img-top" alt="Toatal job post appliedhire.png">
      <div class="card-body">
        <h5 class="card-title">Total Job post applied</h5>
        <?php  
             include('../db.php');
                     $id=$_SESSION['id'];
                     $sql="SELECT * FROM jobpost INNER JOIN apply_job_post ON jobpost.j_id=apply_job_post.jobpost_id WHERE apply_job_post.u_id='$id'";
                     $res=mysqli_query($con,$sql);
                     $total=mysqli_num_rows($res);

        ?>
        <p class="card-text"><?php echo $total; ?></p>
      </div>
      <div class="card-body border-top">
        <a href="jobs.php" class="card-link">View Jobs</a>
        <a href="my-application.php" class="card-link">View Applied post</a>
      </div>
      </div>

      
    </div>
  </div>
</div>



<?php 
 include('footer.php');

?>
