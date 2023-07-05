
<?php 
 include('header.php');
 if (empty($_SESSION['c_id'])) 
 {
   header("location:../index.php");
}
//echo $_SESSION['id'];
?>

<?php
  include('../db.php');
  $sql = "SELECT * FROM chatbox WHERE chat_id='$_GET[id]' and (id_user='$_SESSION[c_id]' OR id_touser='$_SESSION[c_id]')";
  $res=mysqli_query($con,$sql);
  if(mysqli_num_rows($res)>0){
  $row=mysqli_fetch_assoc($res);
  if ($row['fromuser']=='user') {
    $sql1="SELECT * FROM company WHERE c_id='$row[id_touser]'";
    $res1=mysqli_query($con,$sql1);
    if(mysqli_num_rows($res1)>0){
      $company=mysqli_fetch_assoc($res1);
    }

     $sql2="SELECT * FROM user WHERE id='$row[id_user]'";
    $res2=mysqli_query($con,$sql2);
    if(mysqli_num_rows($res2)>0){
      $user=mysqli_fetch_assoc($res2);
    }
  }
  else{

     $sql1="SELECT * FROM company WHERE c_id='$row[id_touser]'";
    $res1=mysqli_query($con,$sql1);
    if(mysqli_num_rows($res1)>0){
      $company=mysqli_fetch_assoc($res1);
    }

     $sql2="SELECT * FROM user WHERE id='$row[id_user]'";
    $res2=mysqli_query($con,$sql2);
    if(mysqli_num_rows($res2)>0){
      $user=mysqli_fetch_assoc($res2);
    }

  }
 }


 ?>

  
  <div class="container mt-5 p-t-3 mt-5 mb-4 pb-5">
    <div class="row">
         <div class="col-lg-10 mb-5 bg p-3">
            <h2 class="text-white m-4"><a href="mails.php"><i class="bi bi-arrow-left-square-fill"></i></a> Read Message</i></h2>
             <div class="card border-top" >
              <div class="card-header"><h6 class="card-title">From : <?php if($row['fromuser']=='user') {echo $user['fname'];echo "(user)"; }else {echo $company['cname'];echo"(company)"; }?> <span class="text-right d-block"> <?php echo date("d-M-Y h:i a", strtotime($row['creat_on'])); ?></span> </h6></div>
              <div class="card-body text-secondary">
                <p class="card-text">Sub : <?php echo $row['sub']; ?></p>
                <p class="card-text"><?php echo $row['msg']; ?></p>
              </div>
            </div>
             <hr class="bg-white">

             <?php

                $sqlReply = "SELECT * FROM replay_chat WHERE mail_id='$_GET[id]'";
                $resultReply = $con->query($sqlReply);
                if($resultReply->num_rows > 0) {
                  while($rowReply =  $resultReply->fetch_assoc()) {
                    ?>

                  <div class="box box-primary">
                    <div class="card p-3  bg-white rounded">
                      <div class="mailbox-read-info">
                        <h6 class="">Reply Message</h6>
                        <h6>From: <?php if($rowReply['usertype'] == "user") { echo $user['fname'];echo "(candidate)"; } else { echo $company['cname'];echo "(company);"; } ?>
                          <span class="mailbox-read-time text-muted"> ||  <?php echo date("d-M-Y h:i a", strtotime($rowReply['creat_at'])); ?></span></h6>
                      </div>
                      <div class="mailbox-read-message">
                        <?php echo stripcslashes($rowReply['msg']); ?>
                      </div>
                    </div>
                  </div>
                   <hr class="bg-white">
                    <?php
                  }
                }
                ?>
                
               <div class="box box-primary">
                  <!-- /.box-header -->
                  <div class="box-body no-padding">
                    <div class="mailbox-read-info">
                      <h3 class="text-white">Send Reply</h3>
                    </div>
                    <div class="mailbox-read-message">
                      <form  method="post">
                        <div class="form-group">
                          <textarea class="form-control input-lg" id="description" name="desc" placeholder="Sent Replay..."></textarea>
                        
                        </div>
                        <div class="form-group">
                          <button type="submit" name="replay" class="btn btn-flat btn-success">Reply</button>
                        </div>
                      </form>
                    </div>
                    <!-- /.mailbox-read-message -->
                  </div>
                  <!-- /.box-body -->
                </div>

    </div>
  </div>
</div>

<?php
 include('../db.php');
 if (isset($_POST['replay'])) {
   
     $replay=$_POST['desc'];
     $mail_id=$_GET['id'];
     $uid=$_SESSION['id'];

     $sql="INSERT INTO `replay_chat`(`mail_id`, `user_id`, `usertype`, `msg`) VALUES ('$mail_id','$uid','user','$replay')";

      if(mysqli_query($con,$sql))
      {
        ?>
        <script type="text/javascript">alert("Msg Sent Successfuly");window.open("read-mail.php?id=<?php echo $mail_id; ?>")</script>
        <?php
       

      }
      else{
        ?>
        <script type="text/javascript">alert("Try Again !");</script>

        <?php
      }

 }
 ?>
 

<?php 
 include('footer.php');
?>
