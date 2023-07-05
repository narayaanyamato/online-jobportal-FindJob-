<?php
include('header.php');

 if (empty($_SESSION['id'])) {
 	?>
      <script type="text/javascript">window.open('admin-login.php',"_self");</script>
 	<?php
 }

 ?>

<style type="text/css">
    .label{
        border-radius: 2px;
        margin: 2px;
        padding: 3px;
    }
</style>
 
<div class="container mt-5 ">
     <div class="row">
           <div class="col-lg-10 bg mt-5 mb-5 p-3">
            <h2 class="text-white"><i>Candidates Details</i></h2>
                    <div class="attachment-block bg-light rounded">
                        <table class="table table-responsive-sm">
                                     <thead>
                                       <tr>
                                       
                                      <th>Name</th>
                                      <th>Qualification</th>
                                     <th>Skills</th>
                                     <th>City</th>
                                     <th>State</th>
                                     <th>Status</th>
                                     <th>CV</th>
                                     <th>Action</th>
                                    
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

                                        $sql="SELECT * FROM `user` limit $page_first,$results_per_page "; 
                                    $res=mysqli_query($con,$sql);
                                     if (mysqli_num_rows($res)>0) {
                                        while ($row=mysqli_fetch_assoc($res)) {
                                              $skills = $row['skill'];
                                           $skills = explode(',', $skills);
                                             ?>
                                          <tr>
                                             
                                                  <td><?php echo $row['fname'];?>  <?php echo $row['lname'];?></td>
                                                  <td><?php echo $row['highql'];?></td>
                                                  <td><?php  foreach ($skills as $value) {
                            echo ' <span class="label bg text-white">'.$value.'</span>';
                          } ?></td>
                                                  <td><?php echo $row['city'] ?></td>
                                                  <td><?php echo $row['state']; ?></td>
                                                  <td><?php if ($row['active']==0) {
                                                     

                                                      ?>
                                                      <a href="applications-deactive.php?id=<?php echo $row['id']; ?>">active</a>
                                                      <?php
                                                  }else{

                                                     ?>
                                                      <a href="applications-active.php?id=<?php echo $row['id']; ?>">DeActive</a>
                                                      <?php
                                                  } ?></td>
                                                  <td><a href="../cv/<?php echo $row['cv'] ?>"><i class="bi bi-file-earmark-text"></i></a></td>
                                                  <td><a href="delete-applicant.php?id=<?php echo $row['id']; ?>"><i class="bi bi-x-circle"></i></a></td>
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
$sql="SELECT * FROM `user`"; 
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
     <li class="page-item"><a class="page-link" href="applications.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
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