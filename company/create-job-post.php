<?php 
include 'header.php';

if (empty($_SESSION['c_id'])) 
 {
   header("location:../index.php");
}

?>
<script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
<div class="container mt-5 p-t-3 mb-4 pb-5">
  	<div class="row">
  		 <div class="col-lg-10 bg p-3">
            <h2 class="text-white"><i>Create Job Post</i></h2>

                    <div class="attachment-block clearfix p-3  rounded">
		                <form method="post">
							  <div class="form-group">
							    
							    <input type="text" class="form-control" name="title"  placeholder="Enter Job Title *" required>
							  </div>
							   <div class="form-group">
							   <textarea class="form-control" name="jobdesc" id="editor" placeholder="Enter Job Description *" required>
							   	
							   </textarea>
							  </div>
							 
							  <div class="form-group">
							    <input type="text" class="form-control" name="maxsal" placeholder="Max Salary *" required>
							  </div>

							   <div class="form-group">
							    <input type="text" class="form-control" name="msal"  placeholder="Min Salary *" required>
							  </div>
							   <div class="form-group">
							    <input type="text" class="form-control" name="exp" placeholder="Expriences *" required>
							  </div>
							 
							  <div class="form-group">
							    <input type="text" class="form-control" name="qul" placeholder="Qualificarion required *" required>
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

  	$sql="INSERT INTO `jobpost`(`jon_id`, `jobtitle`, `desc`, `minsal`, `maxsal`, `exp`, `qualification`) VALUES ('$jid','$title','$jobdesc','$msal','$maxsal','$exp','$qul')";

  	  if (mysqli_query($con,$sql)) {
  	  	?>
        <script type="text/javascript">alert("job posted..");window.open("index.php","_self")</script>
  	  	<?php
  	  }

  	  else{
  	  	?>
        <script type="text/javascript">alert("job not  posted..");</script>
  	  	<?php
  	  }
  }

 ?>

<?php 
include 'footer.php';
?>