
<?php
  include '../db.php';
  $id=$_GET['id'];
  $sql="DELETE FROM `jobpost` WHERE j_id='$id'";
   if (mysqli_query($con,$sql)) {
    	?>
           <script type="text/javascript">alert("job post trashed");window.open('active-jobs.php','_self')</script>
    	<?php
    } 
    else{
    	?>
           <script type="text/javascript">alert("Try Again");</script>
    	<?php
    }
 ?>