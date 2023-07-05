<?php 
 session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Company DashBoard!</title>
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
       .bg-c-yellow .bi{
        padding: 5px;
        font-size:40px;
        color:rgb(44, 49, 110); ;
       }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="index.php">Admin Panel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon">Menu</span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Dashboard <i class="bi bi-speedometer"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="active-jobs.php">Active jobs <i class="bi bi-briefcase-fill"></i> </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact-user.php">Contacts <i class="bi bi-headphones"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="applications.php"> Applications <i class="bi bi-person-lines-fill"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="companies.php">Companys <i class="bi bi-building"></i></a>
      </li>
        
      <li class="nav-item">
        <a class="nav-link " href="../logout.php">Logout <i class="bi bi-arrow-right-circle-fill"></i> </a>
      </li>
    </ul>
  </div>
    </div>
   </nav>

  