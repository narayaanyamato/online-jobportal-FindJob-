
<?php 
 include('header.php');
 if (empty($_SESSION['id'])) 
 {
   header("location:../index.php");
}
?>

  
  <div class="container mt-5 p-t-3 mb-4 pb-5">
  	<div class="row">
  		 <div class="col-lg-10 bg p-3">
            <h2 class="text-white"><i>Latest Jobs</i></h2>
            <p class="text-white ">Below you will find job roles </p>
            <form method="post">
                <div class="input-group mb-3">
          <input type="Search" class="form-control" name="serch" placeholder="Search Job Title" aria-label="Recipient's username" aria-describedby="button-addon2">
          <button class="btn btn-outline-primary" type="submit" name="ser" type="button">Search</button>
         </div>
            </form>
            <?php
          include('../db.php');
              if(isset($_POST['ser'])) {
                   $title=$_POST['serch'];
                   $sql="SELECT * FROM jobpost WHERE jobtitle LIKE '%$title%'";
                   $val=mysqli_query($con,$sql);
                 if (mysqli_num_rows($val)>0) {
                      
                      while($row=mysqli_fetch_assoc($val)){

                      ?>
                      
                      <div class="attachment-block clearfix mb-3 p-3 bg-light rounded">
                    <h4 class="attachment-heading"><a href="view-job-post.php?id=<?php echo $row['j_id']; ?>"><?php echo $row['jobtitle'] ?></a></h4>
                    <div class="attachment-text padding-2">
                      <div class="pull-left"><i class="bi bi-calendar"></i> <?php echo $row['jobtitle'] ?></div> 
                       <?php            
                    $start_datetime = new DateTime(); 
                    $diff = $start_datetime->diff(new DateTime($row['post_on'])); 
                         ?>

                      <div class="pull-left"><i class="bi bi-calendar"></i> <?php  echo $diff->days.' Days Ago<br>'; ?></div> 
                      <i class="bi bi-briefcase"> &nbsp; </i><?php echo $row['exp'] ?>  |
                      <i class="bi bi-book"></i> <?php echo $row['qualification']; ?> |
                      <i class="bi bi-cash"></i>  <?php echo $row['minsal']; ?> - <?php echo $row['maxsal']; ?>                              
                    </div>
                     </div>

                      <?php
                      }
                     

                    }
                    else {

                     ?>
                      <div class="alert alert-danger" role="alert">
                       Not Found such type Job !
                      </div>
                     <?php
                    }
                
              }
              else{
         ?>
                <?php
                 include('../db.php');
                 $sql="SELECT * FROM `jobpost`";
                  $res=mysqli_query($con,$sql);
                  if (mysqli_num_rows($res)>0) {
                      
                      while($row=mysqli_fetch_assoc($res)){
                        ?>
                    <div class="attachment-block clearfix mb-3 p-3 bg-light rounded">
                    <h4 class="attachment-heading"><a href="view-job-post.php?id=<?php echo $row['j_id']; ?>"><?php echo $row['jobtitle'] ?></a></h4>
                    <div class="attachment-text padding-2">
                      <div class="pull-left"><i class="bi bi-person-badge"></i> <?php echo $row['jobtitle'] ?></div> 
                       <?php            
                    $start_datetime = new DateTime(); 
                    $diff = $start_datetime->diff(new DateTime($row['post_on'])); 
                         ?>

                      <div class="pull-left"><i class="bi bi-calendar"></i> <?php  echo $diff->days.' Days Ago<br>'; ?></div> 
                      <i class="bi bi-briefcase"> &nbsp;</i><?php echo $row['exp'] ?>  |
                      <i class="bi bi-book"></i> <?php echo $row['qualification']; ?> |
                      <i class="bi bi-cash"></i>  <?php echo $row['minsal']; ?> - <?php echo $row['maxsal']; ?>                              
                    </div>
                     </div>

                        <?php
                      }
                  }

               $sql="SELECT * FROM `jobpost`";
                $res=mysqli_query($con,$sql);
                $page=mysqli_num_rows($res);
                $a=$page/3;
                $a=ceil($a);
                 ?>

                 <div class="container">
                  <nav aria-label="Page navigation ml-3">
                    <ul class="pagination">
                      <li class="page-item">
                      </li>
                      <?php
                   for($i=1;$i<=$a;$i++){

                      ?>
                       <li class="page-item"><a class="page-link" href="jobs.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                      <?php
                    }
                       ?>

                      </li>
                    </ul>
                  </nav>
                  </div>

                 <?php



                }
                 ?>

                                        
          </div>
  		
  	</div>
  </div>


  

<?php 
 include('footer.php');
?>
