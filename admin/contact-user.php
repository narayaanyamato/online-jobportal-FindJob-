<?php
include('header.php');

 if (empty($_SESSION['id'])) {
 	?>
      <script type="text/javascript">window.open('admin-login.php',"_self");</script>
 	<?php
 }

 ?>


 
<div class="container mt-5 p-t-3 pb-5 mb-4 pb-5">
     <div class="row">
           <div class="col-lg-10 bg mt-5 mb-5 p-3">
            <h2 class="text-white"><i>Contact User Details</i></h2>
           

                    <div class="attachment-block clearfix p-3 bg-light rounded">
                        <table class="table">
                                     <thead>
                                       <tr>
                                        <th>Id</th>
                                      <th> Name</th>
                                     <th>Email</th>
                                     <th>Subject</th>
                                     <th>Msg</th>
                                     <th>Delete</th>
                                       </tr>
                                     </thead>
                                     <tbody>
                                       <tr>
                                        <?php
                                        include('../db.php');
                                        $sql="SELECT * FROM `contact`"; 
                                    $res=mysqli_query($con,$sql);
                                     if (mysqli_num_rows($res)>0) {
                                        while ($row=mysqli_fetch_assoc($res)) {
                                             ?>
                                          <tr>
                                              <th scope="row"><?php echo $row['cont_id'];?></th>
                                                  <td><?php echo $row['name'];?></td>
                                                  <td><?php echo $row['email'];?></td>
                                                  <td><?php echo $row['sub'] ?></td>
                                                  <td><?php echo $row['msg']; ?></td>
                                                  <td><a href="delete-contact.php?id=<?php echo $row['cont_id']; ?>"><i class="bi bi-x-circle"></i></a></td>
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
include('footer.php');
 ?>