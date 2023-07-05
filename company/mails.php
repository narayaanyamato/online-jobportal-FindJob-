
<?php 
 include('header.php');
 if (empty($_SESSION['c_id'])) 
 {
   header("location:../index.php");
}
//echo $_SESSION['id'];
?>

  
  <div class="container mt-5 p-t-3 mt-5 mb-4 pb-5">
    <div class="row">
         <div class="col-lg-8 mb-5 bg p-3">
            <h2 class="text-white m-4"><i>Compose New Message <div class="text-right">
                <a href="create-mail.php" class="btn btn-primary btn-flat"><i class="fa fa-envelope"></i> Create</a>

              </div></i></h2>
             
             <div class="box-body no-padding">
              <div class="table-responsive mailbox-messages">
                <table id="example1" class="table table-hover table-striped">
                  <thead>
                    <tr class="bg-white">
                      <th>Subject</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  include('../db.php');
                    $sql = "SELECT * FROM chatbox WHERE id_touser='$_SESSION[c_id]' OR id_user='$_SESSION[c_id]'";
                    $result = $con->query($sql);
                    if($result->num_rows >  0 ){
                        while($row = $result->fetch_assoc()) {
                  ?>
                  <tr>
                    <td class="mailbox-subject text-white"><a href="read-mail.php?id=<?php echo $row['chat_id'] ?>"><?php echo $row['sub']; ?></a></td>
                    <td class="mailbox-date text-white"><?php echo date("d-M-Y h:i a", strtotime($row['creat_on'])); ?></td>
                  </tr>
                  <?php
                      }
                    }
                  ?>
                  </tbody>

                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
          </div>
    </div>
  </div>

 

<?php 
 include('footer.php');
?>
