<?php
  include '../db.php';
  //$id=$_GET['id'];
  $sql="select *  FROM `user` WHERE id='1'";
   $res=mysqli_query($con,$sql);
   $row=mysqli_fetch_assoc($res);
   $cv=$row['cv'];
   echo $cv;
   if( )
   {
      echo "working";
   }
   else{
    echo "not";
   }
 ?>