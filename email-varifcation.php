
<?php 
 session_start();
 $email=$_GET['email'];
 echo $email;
 include('db.php');
 $sql="UPDATE `user` SET `mailchk`='1' WHERE email='$email'";
  if (mysqli_query($con,$sql))
   {
  	?>
         <script type="text/javascript">
         	alert("Email Varified");
         	window.close();
         </script>
  	<?php
  }
?>