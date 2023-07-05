<?php
include('header.php');

 if (empty($_SESSION['id'])) {
 	?>
      <script type="text/javascript">window.open('admin-login.php',"_self");</script>
 	<?php
 }

 ?>


 
<div class="container mt-5 ">
     <div class="row">
           <div class="col-lg-12 bg mt-5 mb-5 p-3">
            <h2 class="text-white"><i>Companies</i></h2>
                    <div class="attachment-block bg-light rounded">
                        <table class="table table-responsive-sm">
                                     <thead>
                                       <tr>
                                         <th>Company Logo</th>
                                      <th>Company Name</th>
                                      <th>Account Creator Name</th>
                                     <th>Email</th>
                                     <th>Phone</th>
                                     <th>City</th>
                                     <th>State</th>
                                     <th>Country</th>
                                      <th>Status</th>
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

                                        $sql="SELECT * FROM `company` limit $page_first,$results_per_page "; 
                                    $res=mysqli_query($con,$sql);
                                     if (mysqli_num_rows($res)>0) {
                                        while ($row=mysqli_fetch_assoc($res)) {
                                             ?>
                                          <tr>
                                                  <td><img src="../logo/<?php echo $row['logo'];?>" style="width: 80px; height: 80px;"></td>
                                                  <td><?php echo $row['cname'];?></td>
                                                  <td><?php echo $row['name'];?></td>
                                                  <td><?php echo $row['mail'] ?></td>
                                                  <td><?php echo $row['phone']; ?></td>
                                                  <td><?php echo $row['city'] ?></td>
                                                  <td><?php echo $row['state']; ?></td>
                                                  <td><?php echo $row['country'] ?></td>
                                                  <td><?php if($row['active']==1){echo "Active";}elseif($row['active']==0){ 
                                                      
                                                      echo "reject";
                                                   }else{

                                                    ?>
                                                     <a href="active.php?id=<?php echo $row['c_id']; ?>">Active</a>
                                                    <a href="reject.php?id=<?php echo $row['c_id']; ?>">Reject</a>
                                                    <?php
                                                   }

                                                    ?></td>
                                                  <td><a href="delete-companies.php?id=<?php echo $row['c_id']; ?>"><i class="bi bi-x-circle"></i></a></td>
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
$sql="SELECT * FROM `company`"; 
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


  </div>

 <?php
include('footer.php');
 ?>