<?php 
include 'header.php';

if (empty($_SESSION['c_id'])) 
 {
   header("location:../index.php");
}


?>



 <div class="container mt-5 mb-5 p-t-3 mb-4 pt-3 pb-5">
  	<div class="row">
  		 <div class="col-lg-10 mt-5 mb-5 bg p-3">

  		 	<?php 
            $id=$_GET['id'];
            include('../db.php');
            $sql="select * from jobpost where j_id='$id'";
            $res=mysqli_query($con,$sql);
            $row=mysqli_fetch_assoc($res);
  		 	?>
            <h2 class="text-white"><i><?php echo $row['jobtitle']; ?></i></h2>

                    <div class="attachment-block clearfix p-3 bg-light rounded">
		               
		                <div class="attachment-text padding-2">
		                  <div class="pull-left"><strong class="text-orange"><i class="bi bi-calendar"></i> <?php echo $row['post_on']; ?></strong></div>
		                  <div class="pull-left"> <strong class="text-orange"><i class="bi bi-briefcase"></i> <?php echo $row['exp']; ?></strong></div> 
		                    <div class="pull-left"> <i class="bi bi-book"></i><strong class="text-orange"> <?php echo $row['qualification']; ?></strong></div>
		                  <div class="pull-right p-3"> <?php echo $row['desc']; ?> </div>    
                      <div class="pull-right p-3 mt-3">

                      <button type="button" class="btn btn-primary mr-3 "><a class="text-white" href="edit-view-post.php?j_id=<?php echo $row['j_id']; ?>">Edit post</a></button>
                       <button type="button" class="btn btn-danger "><a class="text-white"  href="delet-view-post.php?j_id=<?php echo $row['j_id']; ?>">Delete post</a></button>
                       </div>                            
		                </div>
		            </div>

                      

                        
          </div>
  		
  	</div>
  </div>


<?php 
include 'footer.php';
?>