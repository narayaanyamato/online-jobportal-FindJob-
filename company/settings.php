

<?php 
 include('header.php');
 if (empty($_SESSION['c_id'])) 
 {
   header("location:../index.php");
}
?>

  
  <div class="container mt-5 p-t-3 mb-4 pb-5">
  	<div class="row">
  		 <div class="col-lg-10 bg p-3">
            <h2 class="text-white"><i>Change Password</i></h2>
            <p class="text-white ">Type in new password that you want to use</p>

                    <div class="attachment-block clearfix p-3 rounded">
		               <form method="post">
						  <div class="form-group">
						    <label for="exampleInputEmail1"  class="text-white">Psssword</label>
						    <input type="password" name="pass" required class="form-control" 
						     placeholder="Enter password">
						   
						  </div>
						  <div class="form-group">
						    <label for="exampleInputPassword1"  class="text-white">Confirm Password</label>
						    <input type="password" name="conpass" required class="form-control" placeholder="Password">
						  </div>
						 
						  <button type="submit" name="change" class="btn btn-light">Change</button>
						</form>
		            </div>           
          </div>
  		
  	</div>
  </div>

    <div class="container mt-5 p-t-3 mb-4 pb-5">
  	<div class="row">
  		 <div class="col-lg-10 bg p-3">
  		 	 <h2 class="text-white"><i>Deactivate Account</i></h2>
 
                    <div class="attachment-block clearfix p-3 rounded">
		               <form method="post">
		                  <label class="text-white"><input type="checkbox" required=""> I Want To Deactivate My Account</label>
		                  <br>
		                  <button type="submit" name="Deactivate" class="btn btn-light">Deactivate My Account</button>
		                </form>
		            </div>           
          </div>
  		
  	</div>
  </div>
  <?php 

   include('../db.php');
   if (isset($_POST['change'])) {
       
       $pass=mysqli_real_escape_string($con,$_POST['pass']);
       $id=$_SESSION['c_id'];
       echo $id;
       $sql="update company set pass='$pass' where c_id='$id'";

        if (mysqli_query($con,$sql))
         {
        ?>
        <script type="text/javascript">alert("password Changed");window.open("index.php","_self");</script>
        <?php	

        }
        else{
        	 ?>
        <script type="text/javascript">alert("password not Changed")</script>
        <?php	
        }
   }

   if (isset($_POST['Deactivate'])) {

   	include('../db.php');
   	 $id=$_SESSION['c_id'];
       $sql="update company set active='0' where c_id='$id'";
       if (mysqli_query($con,$sql))
        {
       	?>
        <script type="text/javascript">alert("Account Deactived");window.open("../logout.php");</script>
        <?php	
        exit();
       }
   }

  ?>

<?php 
 include('footer.php');
?>
