<?php
  include '../db.php';
  $id=$_GET['id'];
  $sql="DELETE FROM `company` WHERE c_id='$id'";
   if (mysqli_query($con,$sql)) {
    	?>
           <script type="text/javascript">alert("Company trashed");window.open('companies.php','_self')</script>
    	<?php
    } 
    else{
    	?>
           <script type="text/javascript">alert("Try Again");</script>
    	<?php
    }
 ?>