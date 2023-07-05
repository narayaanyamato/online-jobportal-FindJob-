
<?php 
include('header.php');

?>

   <div class="container mt-5 mb-5 p-4">
   	  <div class="row mt-5 mb-5 p-4">
   	  	   <div class="col col-lg-5 mx-auto d-block h-100 primary p-4 rounded">
   	  	   	<h1 class="text-center text-light">User Login!</h1>
   	  	   	 <form class="form-group" method="post">
			  <div class="form-group mb-3"> 
			    <input type="email" name="email" class="form-control" placeholder="Enter email">
			  </div>
			  <div class="form-group mb-3">
			   
			    <input type="password" name="pass" class="form-control"  placeholder="Password">
			  </div>
			  <div class="form-group">
			  	<button type="submit" name="login" class="btn mb-2 bg-light btn-secondry">Login</button>
			  </div>
			</form>

			 <div class="form-check">
			    <small id="emailHelp" class="text-white" > <a href="" data-bs-toggle="modal" data-bs-target="#Modal"> Forget Password</a></small><br>
              <small id="emailHelp" class="form-text text-right text-white" > <i><a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">Active Account [did't Receive mail]</a> </i></small>
			  </div>
   	  	   </div>
   	   </div>
	</div>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Account Active !</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post">
           <div class="mb-3">
             <label for="exampleInputEmail1" class="form-label">Email address</label>
             <input type="email" class="form-control" name="email" placeholder="Enter Email" >
             
           </div>
           <div class="mb-3">
             <label for="exampleInputPassword1" class="form-label">User name</label>
             <input type="text" class="form-control" name="name" placeholder="Enter Full name">
           </div>
          
           <button type="submit" name="varify" class="btn btn-primary">Varify link</button>
         </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
   
      </div>
    </div>
  </div>
</div>




<!-- Modal -->
<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Forget Password</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post">
        <div class="mb-3">
          <label for="exampleInputEmail1"  class="form-label">Email address</label>
          <input type="email" class="form-control" name="email" required id="exampleInputEmail1" aria-describedby="emailHelp">
          
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="pass" class="form-control" required id="exampleInputPassword1">
        </div>
         <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="conpass" class="form-control" required id="exampleInputPassword1">
        </div>
       
        <button type="submit" name="forget" class="btn btn-primary">Update</button>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<?php 
 include('db.php');

 if (isset($_POST['forget'])) {
 
  $email=$_POST['email'];
 $pass=$_POST['pass'];
 $conpass=$_POST['conpass'];
 echo $email;
 echo $pass;
  if ($pass==$conpass) {
     
 $sql="UPDATE `user` SET `pass`='$pass' WHERE email='$email'";
     if(mysqli_query($con,$sql)){
       
       ?>
         <script type="text/javascript">alert("New Password Setuped");</script>
       <?php
     }
     else{
      ?>
         <script type="text/javascript">alert("try again");</script>
       <?php
     }
   }
   else{

    ?>
         <script type="text/javascript">alert(" Password Doesnot Match");</script>
       <?php
   }
 }

?>



<?php
  if (isset($_POST['varify'])) {
      
      $email=$_POST['email'];
      $name=$_POST['name'];

      $_SESSION['email']=$email;
      $_SESSION['name']=$name;
       ?>
       <script type="text/javascript">alert("Check ypur Mail And varify");window.open('mail.php',"_self")</script>
       <?php
  }
 ?>
<?php 

include('db.php');
if (isset($_POST['login']))
 {
	$email=$_POST['email'];
	$pass=$_POST['pass'];
    $sql="SELECT * FROM `user` WHERE email='$email'and mailchk=0";
    $res=mysqli_query($con,$sql);
    if(mysqli_num_rows($res)>0){
    ?>
    <script type="text/javascript">alert("Varify Email Address !");</script>
    <?php
 
    }
    else{

    $sql="SELECT * FROM `user` WHERE email='$email' and active=1";
    $res=mysqli_query($con,$sql);
    if (mysqli_num_rows($res)>0)
    {
      ?>
    <script type="text/javascript">alert("Account inactive !");</script>
    <?php
    }

    else{

    $sql="SELECT * FROM `user` WHERE email='$email'and pass='$pass'";
    $res=mysqli_query($con,$sql);
    if (mysqli_num_rows($res)>0) {


       ?>
    <script type="text/javascript">alert("Login Sucessfully!");window.open("user/index.php","_self");</script>
        <?php

        $qrl="SELECT * FROM `user` WHERE email='$email'";
         $ress=mysqli_query($con,$qrl);
         $row=mysqli_fetch_assoc($ress);
          $_SESSION['id']=$row['id'];
    
    }
    else {

       ?>
    <script type="text/javascript">alert("Enter valid Email Address and Password!");</script>
    <?php
    }

    }

  }

}

?>

<?php 
include('footer.php');
?>