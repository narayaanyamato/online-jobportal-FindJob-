<?php

include '../db.php';
$id=$_GET['id'];
$sql="UPDATE `company` SET `active`='0' WHERE c_id='$id'";
 
 if (mysqli_query($con,$sql)) {
  	?>
     <script type="text/javascript">alert('Rajected');window.open('companies.php',"_self");</script>
  	<?php
  } 
  else{
  	?>
     <script type="text/javascript">alert('not actived');</script>
  	<?php
  }
?>