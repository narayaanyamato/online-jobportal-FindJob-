<?php 
include 'header.php';

if (empty($_SESSION['c_id'])) 
 {
   header("location:../index.php");
}

?>



<div class="container mt-5 p-t-3 pb-5 mb-4 pb-5">
  	<div class="row">
  		 <div class="col-lg-10 bg mt-5 mb-5 p-3">
            <h2 class="text-white"><i>My Job Posts</i></h2>
            <p class="text-white ">In this section you can view all job posts created by you</p>

                    <div class="attachment-block clearfix p-3 bg-light rounded">
		              <table class="table">
							  <thead>
							    <tr>
							      <th scope="col">Id</th>
							      <th scope="col">JobTitle</th>
							      <th scope="col">View</th>
							     
							    </tr>
							  </thead>
							  <tbody>
							    <tr>
							    	<?php
							    	include('../db.php');
							    	$id=$_SESSION['c_id'];
							    	$sql="select * from jobpost where jon_id='$id'"; 
                                    $res=mysqli_query($con,$sql);
                                     if (mysqli_num_rows($res)>0) {
                                      	while ($row=mysqli_fetch_assoc($res)) {
                                      		?>
                                          <tr>
                                          	 <th scope="row"><?php echo $row['j_id'];?></th>
							               <td><?php echo $row['jobtitle'];?></td>
							               <td><a href="view-job-post.php?id=<?php echo $row['j_id']; ?>">View Job Detail</a></td>
                                          </tr>
                                      		<?php
                                      		// code...
                                      	}
                                      } 
							    	?>
							      
							      
							    </tr>
							   
							  </tbody>
							</table>
		            </div>

                      

                        
          </div>
  		
  	</div>
  </div>


<?php 
include 'footer.php';
?>