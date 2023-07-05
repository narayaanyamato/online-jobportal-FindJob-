
<?php 
 include('header.php');
 if (empty($_SESSION['id'])) 
 {
   header("location:../index.php");
}
//echo $_SESSION['id'];
?>

  
  <div class="container mt-5 p-t-3 mt-5 mb-4 pb-5">
    <div class="row">
         <div class="col-lg-8 mb-5 bg p-3">
            <h2 class="text-white m-4"><i>Compose New Message</i></h2>
           <form method="post">

            <div class="mb-3">
             <select class=" mb-3 form-control" name="company" required>
             
              <?php
                include('../db.php');
                $id=$_SESSION['id'];
                //echo $id;
                 $sql="SELECT * FROM `apply_job_post` INNER JOIN company on apply_job_post.c_id=company.c_id WHERE apply_job_post.u_id='$id' and apply_job_post.status='0'";
                 $res=mysqli_query($con,$sql);
                 if (mysqli_num_rows($res)) {

                      while ($row=mysqli_fetch_assoc($res)) {
                        ?>
                       <option value="<?php echo $row['c_id'] ?>"><?php echo $row['cname'] ?></option>
                        <?php
                        
                      }
                 }
               ?>
             
             
            </select>

            </div>

            <div class="mb-3">
              <input type="text" class="form-control" required name="sub" placeholder="Write Subject">
            </div>
            <div class="mb-3">
              <textarea class="form-control" id="description" name="body" placeholder="Enter your Message" required></textarea>
            </div>
            
            <button type="submit" name="msg" class="btn btn-primary">Sent</button>
            <a href="mails.php"><button type="button" class="text-right btn btn-danger">Discard</button></a>
            </form>
          </div>
    </div>
  </div>

  <?php

   include('../db.php');
   if (isset($_POST['msg'])) {
      
      $to=mysqli_real_escape_string($con,$_POST['company']);
      $sub=mysqli_real_escape_string($con,$_POST['sub']);
      $msg=mysqli_real_escape_string($con,$_POST['body']);
      $uid=$_SESSION['id'];
      $sql="INSERT INTO `chatbox`(`id_user`, `fromuser`, `id_touser`, `sub`, `msg`) VALUES ('$uid','user','$to','$sub','$msg')";
      //echo $msg ;
      if(mysqli_query($con,$sql)){
       ?>
        <script type="text/javascript">alert("Sent Sucessfully!");window.open("mails.php","_self")</script>
       <?php

      }
      else{
        ?>
        <script type="text/javascript">alert("try Again!");</script>
        <?php
      }


   }

  ?>

  

<?php 
 include('footer.php');
?>
