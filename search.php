
<?php
include('header.php');
 ?>

 <div class="conntainer">

 <?php


   if(empty($_POST['title'])&&empty($_POST['loc']))
   {
         
         include('db.php');
             if(isset($_POST['serch'])){
            $title=$_POST['title'];
            //echo $title;
             
              if(isset($_GET['page'])){
               $p=$_POST['page'];
              }
              else{
                $p=1;
              }
              $st=($p-1)*2;
            $loc=$_POST['loc'];
            $sql="SELECT * FROM `company` INNER join jobpost on jobpost.jon_id=company.c_id limit $st,2";
            $res=mysqli_query($con,$sql);
            if (mysqli_num_rows($res)>0) {
                while($row=mysqli_fetch_assoc($res)){
                    
                    ?>
                        <div class="job-item p-4 mb-4 pb-5  mt-5">
                                <div class="row g-4">
                                    <div class="col-sm-10 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="logo/<?php echo $row['logo']; ?>" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3"><a href="view-job-post.php?id=<?php echo $row['j_id']; ?>"><?php echo $row['jobtitle'] ?></a></h5>
                                            <span class="text-truncate me-3"><i class="fa fa-map-marker-alt primary-c me-2"></i><?php echo $row['city']; ?>,<?php echo $row['state']; ?></span>
                                            <span class="text-truncate me-3"><i class="far fa-clock primary-c me-2"></i>Full Time</span>
                                            <span class="text-truncate me-0"><i class="far fa-money-bill-alt primary-c me-2"></i><?php echo $row['minsal']; ?> - <?php echo $row['maxsal']; ?></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <?php 
                                                 if(empty($_SESSION['id'])){}else{
                                                    ?>
                                                   <a class="btn btn-primary" href="user/view-job-post.php?id=<?php echo $row['j_id']; ?>">Apply Now</a>
                                                    <?php
                                                 }

                                            ?>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: <?php echo $row['post_on']; ?></small>
                                    </div>
                                </div>
                            </div>

                    <?php
                }
            }
          
            }


            $sql="SELECT * FROM `company` INNER join jobpost on jobpost.jon_id=company.c_id";
            $res=mysqli_query($con,$sql);
             $page=mysqli_num_rows($res);
             $a=$page/2;
             $a=ceil($a);

             ?>

             <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>

                <?php 
                 for ($i=1; $i <$a ; $i++) {

                 ?>
                   <li class="page-item"><a class="page-link" href="search.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                 <?php
                  }

                ?>
                
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
              </ul>
            </nav>

             <?php

            

   }
   else{
            include('db.php');
             if(isset($_POST['serch'])){
            $title=$_POST['title'];
            //echo $title;
            $loc=$_POST['loc'];
            $sql="SELECT * FROM `company` INNER join jobpost on jobpost.jon_id=company.c_id where jobtitle LIKE '%$title%' or city like '%$loc%';";
            $res=mysqli_query($con,$sql);
            if (mysqli_num_rows($res)>0) {
                while($row=mysqli_fetch_assoc($res)){
                    
                    ?>
                        <div class="job-item p-4 mb-4 pb-5  mt-5">
                                <div class="row g-4">
                                    <div class="col-sm-10 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="logo/<?php echo $row['logo']; ?>" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3"><a href="view-job-post.php?id=<?php echo $row['j_id']; ?>"><?php echo $row['jobtitle'] ?></a></h5>
                                            <span class="text-truncate me-3"><i class="fa fa-map-marker-alt primary-c me-2"></i><?php echo $row['city']; ?>,<?php echo $row['state']; ?></span>
                                            <span class="text-truncate me-3"><i class="far fa-clock primary-c me-2"></i>Full Time</span>
                                            <span class="text-truncate me-0"><i class="far fa-money-bill-alt primary-c me-2"></i><?php echo $row['minsal']; ?> - <?php echo $row['maxsal']; ?></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <?php 
                                                 if(empty($_SESSION['id'])){}else{
                                                    ?>
                                                   <a class="btn btn-primary" href="user/view-job-post.php?id=<?php echo $row['j_id']; ?>">Apply Now</a>
                                                    <?php
                                                 }

                                            ?>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: <?php echo $row['post_on']; ?></small>
                                    </div>
                                </div>
                            </div>

                    <?php
                }
            }
            else{

            	echo "not found";
             }
            }



    }        
 ?>
</div>
 <?php
include('footer.php');
 ?>