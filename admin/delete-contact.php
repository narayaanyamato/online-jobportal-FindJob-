<?php
  include '../db.php';
  $id=$_GET['id'];
  $sql="DELETE FROM `contact` WHERE cont_id='$id'";
   if (mysqli_query($con,$sql)) {
    	?>
           <script type="text/javascript">alert("Contact trashed");window.open('contact-user.php','_self')</script>
    	<?php
    } 
    else{
    	?>
           <script type="text/javascript">alert("Try Again");</script>
    	<?php
    }
 ?>