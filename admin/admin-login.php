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
    <title>Admin DashBoard!</title>
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
        color:rgb(44, 49, 110); 5
       }
    </style>
  </head>
  <body>
<div class="container mt-5">
	<div class="row justify-content-center align-items-center text-center p-2">
		<div class="m-1 col-sm-8 col-md-6 col-lg-4 shadow-sm p-3 mb-5 bg border rounded">
			<div class="pt-5 pb-5 bg">
				
				<p class="text-center text-uppercase text-white">Admin Login</p>
				<form class="form text-center" method="post">
					<div class="form-group input-group-md">
						<input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
						
					</div>
					<div class="form-group input-group-md">
						<input type="password" class="form-control" name="pass" id="password" placeholder="Password">
						
					</div>
					<button class="btn btn-lg btn-block btn-primary mt-4" name="login" type="submit">
                        Login
               </button>
					
				</form>

			</div>
			
		</div>
	</div>
</div>

</body>

<?php 
 include('../db.php');
 if (isset($_POST['login'])) {
 $email=$_POST['email'];
 $pass=$_POST['pass'];
 $sql="SELECT * FROM `admin` WHERE email='$email' and pass='$pass';";
 $res=mysqli_query($con,$sql);
 if(mysqli_num_rows($res)>0){
 	?>
<script type="text/javascript">alert("login Sucessfully");window.open("index.php","_self");</script>
 	<?php
 	$sql="SELECT * from admin where email='$email'";
 	$res=mysqli_query($con,$sql);
 	$row=mysqli_fetch_assoc($res);
 	$_SESSION['id']=$row['id'];
 }
 else{
 	?>
<script type="text/javascript">alert("Enter Valid Email and Password !");</script>
 	<?php
 }	
 }

?>