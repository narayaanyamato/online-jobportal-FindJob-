 
 <?php
     include('header.php');
   ?>
  <div class="container-fluid p-0">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="https://media.istockphoto.com/id/1457826802/nl/foto/young-brunette-woman-in-casual-clothes-working-with-laptop-using-mobile-phone-at-cafe.jpg?s=612x612&w=0&k=20&c=rYiM8rJRGavtNi_AtL2wm9E6nVHlbDfy8nJ5V1L2MkY=" alt="Find The Perfect Job That You Deserved">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">Find The Perfect Job That You Deserved</h1>
                                    
                                   
                                    <a href="user/jobs" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Find A Talent</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="https://media.istockphoto.com/id/1218794947/nl/foto/jonge-meisjes-die-thuis-tijdens-covid-19-pandemie-bestuderen.jpg?s=612x612&w=0&k=20&c=5vr3iL4ypBQJ1g569K_sb3ckQBYHniq2gu9SX6ghF_Y=" alt="Find The Best Startup Job That Fit You">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">Find The Best Startup Job That Fit You</h1>
                                   
                                    <a href="user/jobs.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Search A Job</a>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Search Start -->
        <div class="container-fluid primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
            <div class="container">
                <form method="post" action="search.php">
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                            <div class="col-md-6">
                                <input type="text" name="title" class="form-control border-0" placeholder="Job Title Keyword " />
                            </div>
                            
                            <div class="col-md-6">
                               <input type="text" name="loc" class="form-control border-0" placeholder=" Enter Location" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" name="serch" class="btn btn-dark border-0 w-100">Search</button>
                    </div>
                </div>
            </form>
            </div>

        </div>

        

 <section id="company" class="content-header  mb-4 mt-4">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center latest-job margin-bottom-20">
            <h1 class="primary-c">Companies</h1>
            <p class="p-3 ">Hiring? Register your company for free, browse our talented pool, post and track job applications</p>            
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 col-md-4 mb-3">
            <div class="thumbnail company-img">
              <img src="img/postjob.png"  class="img-fluid" alt="Browse Jobs">
              <div class="caption">
                <h3 class="text-center p-3">Post A Job</h3>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-md-4 mb-3">
            <div class="thumbnail company-img">
              <img src="img/manage.jpg" class="img-fluid" alt="Apply & Get Interviewed">
              <div class="caption">
                <h3 class="text-center p-3">Manage & Track</h3>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-md-4 mb-3">
            <div class="thumbnail company-img">
              <img src="img/hire.png" class="img-fluid"  alt="Start A Career">
              <div class="caption">
                <h3 class="text-center p-3">Hire</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <section id="candidates" class="content-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center latest-job margin-bottom-20">
            <h1 class="primary-c text-center mb-5  wow fadeInUp">Candidates</h1>
            <p class="p-3">Finding a job just got easier. Create a profile and apply with single mouse click.</p>            
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 col-md-4">
            <div class="thumbnail candidate-img">
              <img src="img/browse.jpg" class="img-fluid" alt="Browse Jobs">
              <div class="caption">
                <h3 class="text-center p-3">Browse Jobs</h3>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-md-4">
            <div class="thumbnail candidate-img">
              <img src="img/interviewed.jpeg" class="img-fluid" alt="Apply &amp; Get Interviewed">
              <div class="caption">
                <h3 class="text-center p-3">Apply &amp; Get Interviewed</h3>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-md-4">
            <div class="thumbnail candidate-img">
              <img src="img/career.jpg" class="img-fluid" alt="Start A Career">
              <div class="caption">
                <h3 class="text-center p-3">Start A Career</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

        <!-- Jobs Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 primary-c wow fadeInUp" data-wow-delay="0.1s">Job Listing</h1>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
                  
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <?php

                            include('db.php');
                            $sql="SELECT * FROM `company` INNER join jobpost on jobpost.jon_id=company.c_id limit 5";
                            $res=mysqli_query($con,$sql);
                             if(mysqli_num_rows($res)>0){
                                while($row=mysqli_fetch_assoc($res)){
                                    ?>
                                      <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="logo/<?php echo $row['logo']; ?>" alt="<?php echo $row['cname'] ?>" style="width: 80px; height: 80px;">
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
                                         <?php            
                                        $start_datetime = new DateTime(); 
                                        $diff = $start_datetime->diff(new DateTime($row['post_on'])); 
                                            ?>

                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i> <?php echo $diff->days.' Days Ago<br>' ?></small>
                                    </div>
                                </div>
                            </div>
                                    <?php
                                }
                             }
                             ?>
                           
                            <a class="btn btn-primary py-3 px-5" href="user/jobs.php">Browse More Jobs</a>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- Jobs End -->

      

          <?php
     include('footer.php');
      ?>

