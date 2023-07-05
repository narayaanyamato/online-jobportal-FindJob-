
<?php 
 include('header.php');
 if (empty($_SESSION['c_id'])) 
 {
   header("location:../index.php");
   exit();
}
 include('../db.php');
 $id=$_SESSION['c_id'];
 $sql="SELECT * FROM `company` where c_id='$id'";
 $res=mysqli_query($con,$sql);
 $row=mysqli_fetch_assoc($res);

?>



<div class="container  mt-5 mb-4 bg rounded">
   <h1 class="text-center text-white margin-bottom-20 p-3">UPDATE COMPANY PROFILE</h1>
  <form method="post"  enctype="multipart/form-data">
  <div class="row ">
    <div class="col col-lg-6 col-12 mb-3">
       <div class="form-group">
          <input type="text" class="form-control" id="fname" name="name"  placeholder="Enter Your Name *" required  value="<?php echo $row['name']; ?>">
        </div>
    </div>
    <div class="col col-lg-6 col-12 mb-3">
      <div class="form-group">
          <input type="text" class="form-control" id="lname" name="cname"  placeholder="Enter Your Company Name *" required value="<?php echo $row['cname']; ?>">
        </div>
    </div>
    
  </div>


  <div class="row">
    <div class="col col-lg-6 col-12 mb-3">
       <div class="form-group">
          <input type="Email" class="form-control" id="email" name="email"  placeholder="Enter Email Address *" required value="<?php echo $row['mail']; ?>">
        </div>
    </div>
    <div class="col col-lg-6 col-12 mb-3">
      <div class="form-group">
          <input type="Tel" class="form-control"  id="tel" name="phone"  placeholder="Enter Mobile Number *" required value="<?php echo $row['phone']; ?>">
        </div>
    </div>
    
  </div>

 <div class="row">
    <div class="col col-lg-6 col-12 mb-3">
       <div class="form-group">
                <input class="form-control input-lg" type="text"  id="satae" name="state" placeholder="State * " required value="<?php echo $row['state']; ?>">
        </div>
    </div>
    <div class="col col-lg-6 col-12 mb-3">
      <div class="form-group">
                <input class="form-control input-lg" type="text" id="city"  name="city" placeholder="City *" required value="<?php echo $row['city']; ?>">
              </div>
    </div>
    
  </div>

  <div class="row">
  
    <div class="col col-lg-6 col-12 mb-3">
      <div class="form-group">
          <input type="Text" class="form-control"  id="web" name="website"  placeholder="Enter Website *" required value="<?php echo $row['Website']; ?>">
        </div>
    </div>

    <div class="col col-lg-6 col-12 mb-3">
      <div class="form-group">
                <label class="text-white" >Attach Company Logo</label>
                <input type="file" name="logo" required   accept="image/*"  class="form-control" value="<?php echo $row['logo']; ?>">
          </div>
    </div>
    
  </div>


  <div class="row">
    <div class="col col-lg-6 col-12 mb-3">
       <div class="form-group">
          <textarea class="form-control" name="aboutc" id="aboutc" rows="3" placeholder=" About your Company *" required><?php echo $row['cbio']; ?></textarea>
        </div>
    </div>

    <div class="col col-lg-6 col-12 mb-3">
     <img src="../logo/<?php echo $row['logo']; ?>" height="100px" width="100px">
    </div>
    
  </div>

  
         <div class="form-group">
                <button type="submit"  name="update" class="btn mb-2 bg-light btn-secondry">Update</button>
          </div>
    
  </div>
  </form>
</div>




<?php
 include('../db.php');
 if (isset($_POST['update']))
  {
   $name=mysqli_real_escape_string($con, $_POST['name']);
    $cname=mysqli_real_escape_string($con,$_POST['cname']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $phone=mysqli_real_escape_string($con,$_POST['phone']);
    $bio=mysqli_real_escape_string($con,$_POST['aboutc']);
    $website=mysqli_real_escape_string($con,$_POST['website']);

    $state=mysqli_real_escape_string($con,$_POST['state']);
    $city=mysqli_real_escape_string($con,$_POST['city']);
  
    $ffname=0;
    if(is_uploaded_file($_FILES['logo']['tmp_name']))
    {
      $ffname=uniqid().$_FILES['logo']['name'];
       if (move_uploaded_file($_FILES['logo']['tmp_name'], "../logo/$ffname"))
        {
       // echo "file moved";
       }
    }

     $id=$_SESSION['c_id'];

      $sql="UPDATE `company` SET `name`='$name',`cname`='$cname',`Website`='$website',`phone`='$phone',`mail`='$email',`cbio`='$bio',`state`='$state',`city`='$city',`logo`='$ffname' WHERE c_id='$id' ";
       $sql1="select * from company where c_id='$id'";
         $res1=mysqli_query($con,$sql1);
         $row1=mysqli_fetch_assoc($res1);
          if(unlink("../logo/".$row1['logo']))
          {
              if (mysqli_query($con,$sql)) {

                  ?>
               <script type="text/javascript">alert("Updated Sucessfully!");
                  window.open("index.php","_self");
              </script>
                <?php
              }
              else{
                //echo "again check";
                ?>
               <script type="text/javascript">alert("Try Again Check !");</script>
                <?php
              }

          }

}

 

 ?>





  


  

<?php 
 include('footer.php');
?>
