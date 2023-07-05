<?php

include '../db.php';
$id=$_GET['id'];
$sql="UPDATE `user` SET `active`='0' WHERE id='$id'";
 
 if (mysqli_query($con,$sql)) {
  	?>
     <script type="text/javascript">alert('actived');window.open('applications.php',"_self");</script>
  	<?php
  } 
  else{
  	?>
     <script type="text/javascript">alert('not actived');</script>
  	<?php
  }
?>