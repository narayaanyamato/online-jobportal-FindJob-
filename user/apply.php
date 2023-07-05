<?php 
 include('header.php');
 if (empty($_SESSION['id'])) 
 {
   header("location:../index.php");
}

if (isset($_GET)) {
  
    $j_id=$_GET['j_id'];
    $c_id=$_GET['c_id'];
    $u_id=$_SESSION['id'];
    include('../db.php');

    $sql="SELECT * FROM apply_job_post WHERE u_id='$_SESSION[id]' AND jobpost_id='$j_id'";
    $res=mysqli_query($con,$sql);
    if (mysqli_num_rows($res)>0) {
        
        ?>
        <script type="text/javascript">alert("You Have Applied and wait For Requiter Action!");
         window.close();
         window.open("index.php");
      </script>
        <?php
    }
    else{
      $sql="INSERT INTO `apply_job_post`(`jobpost_id`, `c_id`, `u_id`, `status`) VALUES ('$j_id','$c_id','$u_id','1')";

       if(mysqli_query($con,$sql)){
          ?>
        <script type="text/javascript">alert("Applied Sucessfully!");window.open("../apply-mail.php?cid=<?php echo $_GET['c_id'];?>&jid=<?php echo $_GET['j_id'];?>","_self");</script>
        <?php
       }
       else{
         ?>
        <script type="text/javascript">alert("try Again!");</script>
        <?php
       }
    }

}




 include('footer.php');

?>