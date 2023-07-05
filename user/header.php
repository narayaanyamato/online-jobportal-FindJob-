<?php 
 session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="Keyword" content="Job openings ,Career opportunities, Job search, Employment ,Job listings ,Resume ,builder, Professional ,development ,Job alerts, Application,tracking system ,job board">
    <meta name="description" content="Fnd your dream job with our online job portal. Browse thousands of job openings in various industries and locations. Our platform connects job seekers with top employers, making it easy to find the perfect job match. From entry-level to executive positions, we offer a wide range of opportunities for professionals at all levels. Whether you're looking for a full-time or part-time position, we've got you covered. Our user-friendly interface allows you to filter job listings by location, industry, and experience level, making it easy to find the right job for you. Join our community of job seekers today and take the first step towards your career goals. Start exploring our job openings now!">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
   <!-- Option 1: Include in HTML -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>User DashBoard!</title>
    <style type="text/css">
       .navbar{
        background: rgb(44, 49, 110);
        margin-bottom: 30px;
       }
       .navbar .navbar-brand{
        color: whitesmoke;
       }
       .navbar .navbar-nav .nav-item .nav-link{
        color: whitesmoke;
       } 

       .bg{
         background: rgb(44, 49, 110);
         padding: 4px 8px;
       } 
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="index.php">FindJob</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon">Menu</span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="edit-profile.php">Edit Profile <i class="bi bi-person"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="jobs.php">Jobs  <i class="bi bi-list"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="my-application.php">My Application <i class="bi bi-person-lines-fill"></i></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="mails.php">ChatBox <i class="bi bi-chat-dots"></i></a>
      </li>      
      <li class="nav-item">
        <a class="nav-link" href="settings.php">Setting <i class="bi bi-gear"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="../logout.php">Logout <i class="bi bi-arrow-right-circle-fill"></i> </a>
      </li>
    </ul>
  </div>
    </div>
   </nav>

  