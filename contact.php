<?php
include('header.php');
 ?>




    <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Contact For Any Query</h1>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="row gy-4">
                            <div class="col-md-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="d-flex align-items-center primary rounded p-4">
                                    <div class="bg-white border rounded d-flex flex-shrink-0 align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                                        <i class="fa fa-map-marker-alt text-primary"></i>
                                    </div>
                                    <span class="text-white">761124, Gobara,Ganajam/span>
                                </div>
                            </div>
                            <div class="col-md-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex align-items-center primary rounded p-4">
                                    <div class="bg-white border rounded d-flex flex-shrink-0 align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                                        <i class="fa fa-envelope-open text-primary"></i>
                                    </div>
                                    <span class="text-white">dontreplayfindjob@gmail.com</span>
                                </div>
                            </div>
                            <div class="col-md-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="d-flex align-items-center primary rounded p-4">
                                    <div class="bg-white border rounded d-flex flex-shrink-0 align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                                        <i class="fa fa-phone-alt text-primary"></i>
                                    </div>
                                    <span class="text-white">+92 7847869140</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7506.2721061595375!2d84.59321373748762!3d19.834195426130904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a22c070f3d83b4b%3A0x73a30c706326086b!2sGobara%2C%20Odisha%20761124%2C%20India!5e0!3m2!1sen!2snl!4v1684068307494!5m2!1sen!2snl" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-md-6">
                        <div class="wow fadeInUp mt-3" data-wow-delay="0.5s">
                           
                            <form method="post" onsubmit="return validate();">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="sub" id="subject" placeholder="Subject">
                                            <label for="subject">Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" name="msg" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" name="cont" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            function validate(){
               
               var errormsg="";

                if(document.getElementById('name').value==""){
                    errormsg+="Enter your name  \n"; 
                    document.getElementById('name').style.borderColor="red";    
                }
                else{
                   document.getElementById('name').style.borderColor="";
                }

                 if(document.getElementById('email').value==""){
                    errormsg+="Enter your email  \n"; 
                    document.getElementById('email').style.borderColor="red";    
                }
                else{
                   document.getElementById('email').style.borderColor="";
                }

                 if(document.getElementById('subject').value==""){
                    errormsg+="Write Subject  \n"; 
                    document.getElementById('subject').style.borderColor="red";    
                }
                else{
               document.getElementById('subject').style.borderColor="";
                }

                 if(document.getElementById('message').value==""){
                    errormsg+="Write message  \n"; 
                    document.getElementById('message').style.borderColor="red";    
                }
                else{
               document.getElementById('message').style.borderColor="";
                }



                if(errormsg!=""){
                     alert(errormsg);
                     return false;
                 }


              
            }
        </script>

<?php 
  
  include('db.php');
  if (isset($_POST['cont'])) {
  	 $name=$_POST['name'];
  	 $email=$_POST['email'];
  	 $subj=$_POST['sub'];
  	 $msg=$_POST['msg'];
      $sql="INSERT INTO `contact`( `name`, `email`, `sub`, `msg`) VALUES ('$name','$email','$subj','$msg')";
     if (mysqli_query($con,$sql)) {
     	$_SESSION['email']=$email;
     	$_SESSION['subj']=$subj;
     	$_SESSION['msg']=$msg;
     	$_SESSION['name']=$name;
     	?>
     	 <script type="text/javascript">alert("Thank you Contacy with Us!"); window.open('contact-mail.php','_self');</script>
     	<?php
     	
     }
     else{
     	?>
     	 <script type="text/javascript">alert("try again");</script>
     	<?php
     }
  }


?>

 <?php
include('footer.php');
 ?>