<?php 
include 'header.php';

if (empty($_SESSION['c_id'])) 
 {
   header("location:../index.php");
}
include('../db.php');
$j_id=$_GET['j_id'];
$sql="SELECT * FROM `jobpost` WHERE j_id='$j_id'";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res);
?>
<script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
<div class="container mt-5 p-t-3 mb-4 pb-5">
  	<div class="row">
  		 <div class="col-lg-10 bg p-3">
            <h2 class="text-white"><i>Edit Job Post</i></h2>

                    <div class="attachment-block clearfix p-3  rounded">
		                <form method="post">
							  <div class="form-group">
							    
							    <input type="text" class="form-control" name="title"  placeholder="Enter Job Title *" value="<?php echo $row['jobtitle'];?>" required>
							  </div>
							   <div class="form-group">
							   <textarea class="form-control" name="jobdesc" id="editor" placeholder="Enter Job Description *" required><?php echo $row['desc'];?>
							   	
							   </textarea>
							  </div>
							 
							  <div class="form-group">
							    <input type="text" class="form-control" value="<?php echo $row['maxsal'];?>" name="maxsal" placeholder="Max Salary *" required>
							  </div>

							   <div class="form-group">
							    <input type="text" class="form-control" name="msal" value="<?php echo $row['minsal'];?>"  placeholder="Min Salary *" required>
							  </div>
							   <div class="form-group">
							    <input type="text" class="form-control" name="exp" placeholder="Expriences *" value="<?php echo $row['exp'];?>" required>
							  </div>
							 
							  <div class="form-group">
							    <input type="text" class="form-control" name="qul" placeholder="Qualificarion required *" value="<?php echo $row['qualification'];?>" required>
							  </div>
							 
							 
							 
							  <button type="submit" name="postjob" class="btn btn-light">Submit</button>
							</form>

		                </div>
		            </div>

                      

                        
          </div>
  		
  	</div>
  </div>


   <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>



<?php
  if (isset($_POST['postjob'])) {
  	
  	include('../db.php');

  	$title=mysqli_real_escape_string($con,$_POST['title']);
  	$jobdesc=mysqli_real_escape_string($con,$_POST['jobdesc']);
  	$maxsal=mysqli_real_escape_string($con,$_POST['maxsal']);
  	$msal=mysqli_real_escape_string($con,$_POST['msal']);
  	$qul=mysqli_real_escape_string($con,$_POST['qul']);
  	$exp=mysqli_real_escape_string($con,$_POST['exp']);
  	$jid=$_SESSION['c_id'];
    $j_id=$_GET['j_id'];
  	$sql="UPDATE `jobpost` SET `jobtitle`='$title',`desc`='$jobdesc',`minsal`='$msal',`maxsal`='$maxsal',`exp`='$exp',`qualification`='$qul' WHERE `j_id`='$j_id'";

  	  if (mysqli_query($con,$sql)) {
  	  	?>
        <script type="text/javascript">alert("job post Edited");window.open("my-job-post.php","_self")</script>
  	  	<?php
  	  }

  	  else{
  	  	?>
        <script type="text/javascript">alert("job not Edited");</script>
  	  	<?php
  	  }
  }

 ?>

<?php 
include 'footer.php';
?>