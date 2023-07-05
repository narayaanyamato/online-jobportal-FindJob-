<?php 
 session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Job Portal | Online Job Portal</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="Keyword" content="Job openings ,Career opportunities, Job search, Employment ,Job listings ,Resume ,builder, Professional ,development ,Job alerts, Application,tracking system ,job board">
    <meta name="description" content="Fnd your dream job with our online job portal. Browse thousands of job openings in various industries and locations. Our platform connects job seekers with top employers, making it easy to find the perfect job match. From entry-level to executive positions, we offer a wide range of opportunities for professionals at all levels. Whether you're looking for a full-time or part-time position, we've got you covered. Our user-friendly interface allows you to filter job listings by location, industry, and experience level, making it easy to find the right job for you. Join our community of job seekers today and take the first step towards your career goals. Start exploring our job openings now!">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/AdminLTE.min.css">
    <link rel="stylesheet" href="css/_all-skins.min.css">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-sucess shadow ">
           <div class="container">
               <a href="index.php" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
                <h1 class="m-0 ">FindJob</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.php" class="nav-item nav-link ">Home</a>
                    <a href="about.php" class="nav-item nav-link ">About</a>
                    <?php
                       if(!empty($_SESSION['id'])){
                        ?>
                        <a href="user/jobs.php" class="nav-item nav-link">Jobs</a>
                        <?php
                       }
                     ?>
                   
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                    <?php 
                         if (empty($_SESSION['id'])&& empty($_SESSION['c_id'])) {
                             // code...
                            ?>
                            <a href="login.php" class="nav-item nav-link">Login</a>
                            <a href="signup.php" class="nav-item nav-link">Signup</a>
                            <?php
                         }
                         else {

                            if (isset($_SESSION['id'])) {
                                ?>
                                <a href="user/index.php" class="nav-item nav-link">Dashboard</a>
                                <?php
                            }
                            else if(isset($_SESSION['c_id'])){
                                ?>
                                <a href="company/index.php" class="nav-item nav-link">Dashboard</a>
                                <?php
                            }
                            
                            ?>
                             <a href="logout.php" class="nav-item nav-link">logout</a>
                            <?php
                         }
                    ?>
                </div>
               
            </div>
               
           </div>
        </nav>
        