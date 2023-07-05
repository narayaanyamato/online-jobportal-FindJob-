<?php
include('header.php');

 if (empty($_SESSION['id'])) {
 	?>
      <script type="text/javascript">window.open('admin-login.php',"_self");</script>
 	<?php
 }

 ?>


 
<div class="container mt-5 p-t-3 pb-5 pb-5">
     <div class="row">
           <div class="col-lg-10 bg mb-5 mt-5 p-3">
            <h2 class="text-white"><i>Active Job Posts</i></h2>
           

                    <div class="attachment-block clearfix p-3 bg-light rounded">
                        <table class="table">
                                     <thead>
                                       <tr>
                                        <th>Id</th>
                                      <th>Job Name</th>
                                     <th>Company Name</th>
                                     <th>Date Created</th>
                                     <th>View</th>
                                     <th>Delete</th>
                                       </tr>
                                     </thead>
                                     <tbody>
                                       <tr>
                                        <?php
                                        include('../db.php');

                                        if (!isset($_GET['page'])) {
                                           $page=1;
                                        }
                                        else{
                                            $page=$_GET['page'];
                                        }
                                        $results_per_page=3;
                                        $page_first=($page-1)*$results_per_page;

                                           //echo $page_first;
                                        $sql="SELECT * FROM company INNER join jobpost ON jobpost.jon_id=company.c_id limit $page_first,$results_per_page"; 
                                    $res=mysqli_query($con,$sql);
                                     if (mysqli_num_rows($res)>0) {
                                        while ($row=mysqli_fetch_assoc($res)) {
                                             ?>
                                          <tr>
                                              <th scope="row"><?php echo $row['j_id'];?></th>
                                                  <td><?php echo $row['jobtitle'];?></td>
                                                  <td><?php echo $row['cname'];?></td>
                                                  <td><?php echo date("d-M-Y", strtotime($row['post_on'])); ?></td>
                                                  <td><a href="view-job-post.php?id=<?php echo $row['j_id']; ?>">View Job </a></td>
                                                  <td><a href="delete-job-post.php?id=<?php echo $row['j_id']; ?>"><i class="bi bi-x-circle"></i></a></td>
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

     <?php
 include('../db.php');
$sql="SELECT * FROM company INNER join jobpost ON jobpost.jon_id=company.c_id;"; 
$res=mysqli_query($con,$sql);
$page=mysqli_num_rows($res);
$a=$page/3;
$a=ceil($a);

?>

<nav aria-label="Page navigation">
  <ul class="pagination">
    <li class="page-item">
    </li>
    <?php
 for($i=1;$i<=$a;$i++){

    ?>
     <li class="page-item"><a class="page-link" href="active-jobs.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
    <?php
  }
     ?>

    </li>
  </ul>
</nav>

<?php
  
 
   ?>
  </div>


  

 <?php
include('footer.php');
 ?>