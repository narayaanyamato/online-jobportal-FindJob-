<?php
  include '../db.php';
  $id=$_GET['id'];
  $sql="select * FROM `user` WHERE id='$id'";
  $res=mysqli_query($con,$sql);
  $row=mysqli_fetch_assoc($res);
  $cv=$row['cv'];
   if (unlink("../cv/".$row['cv'])) {
      
   $sql="DELETE FROM `user` WHERE id='$id'";
   if (mysqli_query($con,$sql)) {
       
        ?>
           <script type="text/javascript">alert("User trashed");window.open('applications.php','_self')</script>
        <?php
    } 
    else{
        ?>
           <script type="text/javascript">alert("Try Again");</script>
        <?php
    }
    } 
    else{
    	?>
           <script type="text/javascript">alert("Try Again");</script>
    	<?php
    }
 ?>

 