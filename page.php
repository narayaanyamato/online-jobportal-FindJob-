


<?php 

 include('db.php');
 $page=$_GET['page'];

  if ($page==""|| $page==1) {
  	$p=0;
  }
  else{
  	$p=($page*2)-2;
  }
 $sql="select *from jobpost limit $p,2 ";
 $res=mysqli_query($con,$sql);
 if(mysqli_num_rows($res)>0){
 	while ($row=mysqli_fetch_assoc($res)) {
 		?>
 		  <p><?php echo $row['jobtitle']; ?></p>
 		<?php
 		// code...
 	}
 }




 //pages count


  $sql="select *from jobpost";
 $res=mysqli_query($con,$sql);
 $pages=mysqli_num_rows($res);

 $a=$pages/2;
 $a=ceil($a);


   ?>
    <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>

    <?php

    for($i=1;$i<$a;$i++){
   	?>
   <a href="page.php?page=<?php echo $i; ?>"><?php echo $i ?></a>
   	<?php
   }

     ?>

    <li class="page-item"><a class="page-link" href="#">1</a></li>
   
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>

   <?php


   

?>