<?php
include('header.php');

 if (empty($_SESSION['id'])) {
 	?>
      <script type="text/javascript">window.open('admin-login.php',"_self");</script>
 	<?php
 }

 ?>
 <style type="text/css">
   body{
    background:url('https://thumbs.dreamstime.com/z/banner-software-ui-development-different-devices-business-app-dashboard-graph-charts-analytics-data-testing-platform-218245324.jpg');
    background-size: 100% 100%;
    backdrop-filter: blur(6px);
   }
 </style>


   <div class="container mt-5 mb-5 pb-3 p-t-3 ">
    <div class="row pt-4 pb-4 mt-5 pb-4 mb-5">
       <div class="col-lg-8 bg  p-3">
            <h2 class="text-white"><i>Job Portal Statistics</i></h2>
            

                    <div class="attachment-block clearfix p-3  rounded">
                    <div class="row mb-3">
                      <div class="col-md-5 bg-light">
                        <div class="info-box bg-c-yellow">
                          <span class="info-box-icon bg-red"><i class="bi bi-briefcase-fill" width="32" height="32"></i></span> <?php 
                            include('../db.php');
                            
                            $sql="select * from company where active='1'";
                            $res=mysqli_query($con,$sql);
                            $count=mysqli_num_rows($res);
                            ?>
                            <span class="fw-bold fs-1" style="font-size: 25px;font-style: italic;"><?php echo $count;?></span>
                          <div class="info-box-content">
                            <span class="info-box-text p-2">ACTIVE COMPANY REGISTERED</span>
                            
                          
                          </div>
                        </div>                
                      </div>
                      <div class="col-md-1 bg">
                           
                      </div>
                      <div class="col-md-5 bg-light">
                        <div class="info-box bg-c-yellow">
                          <span class="info-box-icon bg-red"><i class="bi bi-briefcase-fill" width="32" height="32"></i></span>
                          <?php 
                            include('../db.php');
                            //$id=$_SESSION['c_id'];
                            $sql="select * from company where active='0'";
                            $res=mysqli_query($con,$sql);
                            $count=mysqli_num_rows($res);
                            ?>
                            <span class="info-box-number " style="font-size: 25px;font-style: italic;"><?php echo $count;?></span>
                          <div class="info-box-content">
                            <span class="info-box-text p-2">PENDING COMPANY APPROVAL</span>
                            
                          
                          </div>
                        </div>                
                      </div>
                        </div>

                            <div class="row">
                      <div class="col-md-5 bg-light">
                        <div class="info-box bg-c-yellow">
                          <span class="info-box-icon bg-red"><i class="bi bi-file-person-fill" width="32" height="32"></i></span>
                           <?php 
                            include('../db.php');
                            //$id=$_SESSION['c_id'];
                            $sql="select * from user wher";
                            $res=mysqli_query($con,$sql);
                            $count=mysqli_num_rows($res);
                            ?>
                          <span class="info-box-number" style="font-size: 25px;font-style: italic;"><?php echo $count;?></span>
                          <div class="info-box-content">
                            <span class="info-box-text p-2">REGISTERED CANDIDATES</span> 
                          </div>
                        </div>                
                      </div>
                      <div class="col-md-1 bg">
                           
                      </div>
                      <div class="col-md-5 bg-light">
                        <div class="info-box bg-c-yellow">
                          <span class="info-box-icon bg-red"><i class="bi bi-file-person-fill" width="32" height="32"></i></span>
                          <?php 
                            include('../db.php');
                            //$id=$_SESSION['c_id'];
                            $sql="select * from user where mailchk='0'";
                            $res=mysqli_query($con,$sql);
                            $count=mysqli_num_rows($res);
                            ?>
                            <span class="info-box-number " style="font-size: 25px;font-style: italic;"><?php echo $count;?></span>
                          <div class="info-box-content">
                            <span class="info-box-text p-2">PENDING CANDIDATES CONFIRMATION</span>
                            
                          
                          </div>
                        </div>                
                      </div>
                        </div>

                        <div class="row mt-3">
                           <div class="col-md-5 bg-light ">
                            <div class="info-box bg-c-yellow">
                              <span class="info-box-icon bg-green"><i class="bi bi-person"></i></span>
                               <?php

                              include('../db.php');
                             // $c_id=$_SESSION['c_id'];
                              $sql = "SELECT * FROM jobpost ";
                              $res=mysqli_query($con,$sql);
                              $tpost=mysqli_num_rows($res);

                                 ?>
                                 <span class="info-box-number text-bold" style="font-size: 25px;font-style: italic;"><?php echo $tpost; ?> </span>
                              <div class="info-box-content p-1">
                               
                                <span class="info-box-text">TOTAL JOB POSTS</span>
                                                    
                              </div>
                            </div>



                      </div>


                      <div class="col col-md-1">
                      </div>

                      <div class="col-md-5 bg-light ">
                            <div class="info-box bg-c-yellow">
                              <span class="info-box-icon bg-green"><i class="bi bi-newspaper"></i></span>
                               <?php

                              include('../db.php');
                              //$c_id=$_SESSION['c_id'];
                            $sql = "SELECT * FROM apply_job_post";
                              $res=mysqli_query($con,$sql);
                              $tpost=mysqli_num_rows($res);

                                 ?>
                                 <span class="info-box-number text-bold" style="font-size: 25px;font-style: italic;"><?php echo $tpost; ?> </span>
                              <div class="info-box-content p-1">
                               
                                <span class="info-box-text">TOTAL APPLICATIONS</span>
                                                    
                              </div>
                            </div>
                      </div>
                        </div>



                      </div>

                      

                        
          </div>
      
    </div>
  </div>


 <?php
include('footer.php');
 ?>