
<?php 
 include('header.php');
 if (empty($_SESSION['id'])) 
 {
   header("location:../index.php");
}
?>

 <div class="container mt-5 p-t-3 mb-4 pb-5">
    <div class="row">
       <div class="col-lg-8 bg p-3">
         
          <?php 
            $id=$_GET['id'];
            include('../db.php');
            
            $sql="SELECT * FROM jobpost INNER JOIN company ON jobpost.jon_id=company.c_id WHERE j_id='$_GET[id]'";
            $res=mysqli_query($con,$sql);
            $count=mysqli_num_rows($res);
            echo $id;
            $row=mysqli_fetch_assoc($res);
        ?>

                   <h2 class="text-white"><i><?php echo $row['jobtitle']; ?></i></h2>
                    <div class="attachment-block clearfix p-3 bg-light rounded">
                    <div class="pull-left"><strong class="text-orange"><i class="bi bi-calendar"></i> <?php echo $row['post_on']; ?></strong></div>
                      <div class="pull-left"> <strong class="text-orange"><i class="bi bi-briefcase"></i> <?php echo $row['exp']; ?></strong></div> 
                        <div class="pull-left"> <i class="bi bi-book"></i><strong class="text-orange"> <?php echo $row['qualification']; ?></strong></div>
                        <div class="pull-left"> <i class="bi bi-cash"></i> <strong class="text-orange"> <?php echo $row['minsal']; ?> - <?php echo $row['maxsal']; ?> Rupess</strong></div>
                        <div class="pull-left"> <i class="bi bi-pin-fill"></i><strong class="text-orange"> <?php echo $row['city']; ?></strong></div>
                        
                      <div class="pull-right p-3"> <?php echo $row['desc']; ?> </div>

                      <div class="pull-right">
                        <?php
                        $j_id=$row['j_id'];
                       $sql="SELECT * FROM apply_job_post WHERE u_id='$_SESSION[id]' AND jobpost_id='$j_id'";
                          $res=mysqli_query($con,$sql);
                          $val=0;
                          if(mysqli_num_rows($res)>0){
                            $val=$val+1;
                          }
                          if ($val==1) {
                            ?>
                             <button type="button" name="apply" class="btn btn-primary" disabled>Applied</button>
                            <?php
                          }
                          else{
                            
                            ?>
                          <button type="button" name="apply" class="btn btn-primary"><a class="text-white" href="apply.php?j_id=<?php echo $row['j_id'] ?>&&c_id=<?php echo $row['c_id']; ?>">Apply</a></button>
                            <?php
                          }
                         ?>
                    
                       
                      </div>
                  </div>
            
          </div>
           <div class="col-lg-4 bg p-3">
            
                    <div class="attachment-block clearfix p-3 mt-5 bg-light rounded">
                    <div class="card" style="width: 18rem;">
                    <img src="../logo/<?php echo $row['logo']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $row['cname']; ?></h5>
                      <p class="card-text"><?php echo $row['cbio']; ?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item"><i class="bi bi-window"></i> <a href="<?php echo $row['Website']; ?>"><?php echo $row['Website']; ?></a></li>
                      <li class="list-group-item"><i class="bi bi-envelope"></i> <?php echo $row['mail']; ?></li>
                      <li class="list-group-item"><i class="bi bi-headphones"></i> <?php echo $row['phone']; ?></li>
                    </ul>
                     <ul class="list-group list-group-flush">
                      
                      <li class="list-group-item"><i class="bi bi-pin-fill"></i> <?php echo $row['state']; ?>,<?php echo $row['city']; ?></li>
                     
                    </ul>
                  
                  </div>
                    
                </div>               

                        
          </div>
      
    </div>
  </div>

<?php
 
  include('../db.php');
  if (isset($_GET['apply'])) {
    
    echo "working";
  }

 ?>


  

<?php 
 include('footer.php');
?>
