
<?php 
 include('header.php');
 if (empty($_SESSION['id'])) 
 {
   header("location:../index.php");
   exit();
}
 include('../db.php');
 $id=$_SESSION['id'];
 $sql="select * from user where id='$id'";
 $res=mysqli_query($con,$sql);
 $row=mysqli_fetch_assoc($res);

?>


<div class="container  mt-5 mb-4 rounded bg">
   <h1 class="text-center text-white margin-bottom-20 p-3">Edit YOUR PROFILE</h1>
  <form method="post"  enctype="multipart/form-data">
  <div class="row ">
    <div class="col col-lg-6 col-12 mb-3">
       <div class="form-group">
          <input type="text" class="form-control" id="fname" name="fname"  placeholder="Enter First Your Name *" required value="<?php echo $row['fname']; ?>" >
        </div>
    </div>
    <div class="col col-lg-6 col-12 mb-3">
      <div class="form-group">
          <input type="text" class="form-control" id="lname" name="lname"  placeholder="Enter Your Last Name *" required value="<?php echo $row['lname']; ?>" >
        </div>
    </div>
    
  </div>

  <div class="row">
    <div class="col col-lg-6 col-12 mb-3">
       <div class="form-group">
          <input type="Email" class="form-control" id="email" name="email"  placeholder="Enter Email Address *" required value="<?php echo $row['email']; ?>" >
        </div>
    </div>
    <div class="col col-lg-6 col-12 mb-3">
      <div class="form-group">
          <input type="Tel" class="form-control"  id="tel" name="phone"  placeholder="Enter Mobile Number *" required value="<?php echo $row['phone']; ?>" >
        </div>
    </div>
    
  </div>


  <div class="row">
    <div class="col col-lg-6 col-12 mb-3">
       <div class="form-group">
          <textarea class="form-control" name="aboutme" id="aboutme" rows="3" placeholder="Brief intro about yourself *" required  ><?php echo $row['bio']; ?> </textarea>
        </div>
    </div>
    <div class="col col-lg-6 col-12 mb-3">
      <div class="form-group">
          <textarea class="form-control" name="Address" id="Address"  rows="3" placeholder="Address *" required ><?php echo $row['address']; ?></textarea>
        </div>
    </div>
    
  </div>

  <div class="row">
    <div class="col col-lg-6 col-12 mb-3">
       <div class="form-group">
                <input class="form-control input-lg" type="text" id="highql" name="highql" placeholder="Highest Qualification " required value="<?php echo $row['highql']; ?>" >
              </div>
    </div>
    <div class="col col-lg-6 col-12 mb-3">
       <div class="form-group">
                <input class="form-control input-lg" type="text"  id="satae" name="state" placeholder="State * " required value="<?php echo $row['state']; ?>" >
              </div>
    </div>
    
  </div>

  <div class="row">
    <div class="col col-lg-6 col-12 mb-3">
             <div class="form-group">
                <input class="form-control input-lg" type="text"  id="stream" name="stream" placeholder="Stream" required value="<?php echo $row['stream']; ?>" >
              </div> 
    </div>
    <div class="col col-lg-6 col-12 mb-3">
       <div class="form-group">
                <input class="form-control input-lg" type="text" id="city"  name="city" placeholder="City *" required value="<?php echo $row['city']; ?>" >
              </div>
    </div>
    
  </div>

  <div class="row">
    <div class="col col-lg-6 col-12 mb-3">
             <div class="form-group">
                <label style="color: red;">File Format PDF Only!</label>
                <input type="file" name="resume"   class="form-control" required accept="application/pdf">
                 <a href="../cv/<?php echo $row['cv']; ?>">View Resume</a> 
              </div>
    </div>
    <div class="col col-lg-6 col-12 mb-3">
       <div class="form-group">
                 <textarea class="form-control" id="skill" rows="3" name="skill" required  placeholder="Skill Set *"><?php echo $row['skill']; ?></textarea>
               </div>
                   </div>
                 </div>

         <div class="form-group">
                <button type="submit"  name="edit" class="btn mb-2 bg-light btn-secondry">Edit</button>
          </div>
    
      </div>
  </form>
</div>  

<?php

include('../db.php');
if(isset($_POST['edit']))
 {
   $fname=mysqli_real_escape_string($con, $_POST['fname']);
    $lname=mysqli_real_escape_string($con,$_POST['lname']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $phone=mysqli_real_escape_string($con,$_POST['phone']);
    $bio=mysqli_real_escape_string($con,$_POST['aboutme']);
    $address=mysqli_real_escape_string($con,$_POST['Address']);
 
    $state=mysqli_real_escape_string($con,$_POST['state']);
    $city=mysqli_real_escape_string($con,$_POST['city']);
    $skill=mysqli_real_escape_string($con,$_POST['skill']);
    $highql=mysqli_real_escape_string($con,$_POST['highql']);
    $stream=mysqli_real_escape_string($con,$_POST['stream']);
    $ffname=0;
    if(is_uploaded_file($_FILES['resume']['tmp_name']))
    {
      $ffname=uniqid().$_FILES['resume']['name'];
       if (move_uploaded_file($_FILES['resume']['tmp_name'], "../cv/$ffname"))
        {
        //echo "file moved";
       }
    }

  $sql="UPDATE `user` SET `fname`='$fname',`lname`='$lname',`email`='$email',`phone`='$phone',`bio`='$bio',`address`='$address',`state`='$state',`city`='$city',`skill`='$skill',`highql`='$highql',`stream`='$stream',`cv`='$ffname' WHERE id='$id'";

        $sql1="select * from user where id='$id'";
         $res1=mysqli_query($con,$sql1);
         $row1=mysqli_fetch_assoc($res1);
          if(unlink("../cv/".$row1['cv'])){

            if (mysqli_query($con,$sql)) {
              // code...
              ?>
               <script type="text/javascript">alert("Data Updated");window.open('index.php','_self');</script>
              <?php
            }
            else{
              ?>
               <script type="text/javascript">alert("Data not Updated Try Again")</script>
              <?php 
            }
          }

}


?>
 

<?php 
 include('footer.php');
?>
