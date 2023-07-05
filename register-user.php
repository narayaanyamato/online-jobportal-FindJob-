

<?php 

include('header.php');
?>

<div class="container  mt-5 primary p-2 rounded">
	 <h1 class="text-center text-white margin-bottom-20 p-3">CREATE YOUR PROFILE</h1>
	<form method="post"  enctype="multipart/form-data" onsubmit="return validate();">
	<div class="row ">
		<div class="col col-lg-6 col-12 mb-3">
			 <div class="form-group">
			    <input type="text" class="form-control" id="fname" name="fname"  placeholder="Enter First Your Name *"  >
			  </div>
		</div>
		<div class="col col-lg-6 col-12 mb-3">
			<div class="form-group">
			    <input type="text" class="form-control" id="lname" name="lname"  placeholder="Enter Your Last Name *">
			  </div>
		</div>
		
	</div>

	<div class="row">
		<div class="col col-lg-6 col-12 mb-3">
			 <div class="form-group">
			    <input type="password" class="form-control" id="pass" name="pass" placeholder="Enter password *" onkeypress="myFunction()" >
			  </div>
		</div>
		<div class="col col-lg-6 col-12 mb-3">
			<div class="form-group">
			    <input type="password" class="form-control" id="conpass" name="conpass"  placeholder="Enter confirm password *" >
			  </div>
		</div>
		
	</div>

	<div class="row">
		<div class="col col-lg-6 col-12 mb-3">
			 <div class="form-group">
			    <input type="Email" class="form-control" id="email" name="email"  placeholder="Enter Email Address *" >
			  </div>
		</div>
		<div class="col col-lg-6 col-12 mb-3">
			<div class="form-group">
			    <input type="Tel" class="form-control"  id="tel" name="phone"  placeholder="Enter Mobile Number *">
			  </div>
		</div>
		
	</div>


	<div class="row">
		<div class="col col-lg-6 col-12 mb-3">
			 <div class="form-group">
			    <textarea class="form-control" name="aboutme" id="aboutme" rows="3" placeholder="Brief intro about yourself *" ></textarea>
			  </div>
		</div>
		<div class="col col-lg-6 col-12 mb-3">
			<div class="form-group">
			    <textarea class="form-control" name="Address" id="Address"  rows="3" placeholder="Address *" ></textarea>
			  </div>
		</div>
		
	</div>

	<div class="row">
		<div class="col col-lg-6 col-12 mb-3">
			 <div class="form-group">
			 	<label class="text-white">DateOfBirth</label>
			    <input type="date" class="form-control" id="dob" name="dob" >
			  </div>
		</div>
		<div class="col col-lg-6 col-12 mb-3">
			 <div class="form-group">
                <input class="form-control input-lg" type="text"  id="state" name="state" placeholder="State * ">
              </div>
		</div>
		
	</div>

	<div class="row">
		<div class="col col-lg-6 col-12 mb-3">
			<div class="form-group">
                <input class="form-control input-lg"  type="text" id="age" min="18" max="60" name="age" placeholder="Age" >
              </div>
		</div>
		<div class="col col-lg-6 col-12 mb-3">
			 <div class="form-group">
                <input class="form-control input-lg" type="text" id="city"  name="city" placeholder="City *">
              </div>
		</div>
		
	</div>

	<div class="row">
		<div class="col col-lg-6 col-12 mb-3">
			<div class="form-group">
				<label class="text-white">Year of Passing</label>
                <input class="form-control input-lg" type="date" id="yearofpass"  name="yearofpass" placeholder="Year of pass">
              </div>
		</div>
		<div class="col col-lg-6 col-12 mb-3">
			 <div class="form-group">
                 <textarea class="form-control" id="skill" rows="3" name="skill" placeholder="Skill Set *"></textarea>
			  </div>
              </div>
		</div>


	<div class="row">
		<div class="col col-lg-6 col-12 mb-3">
			<div class="form-group">
                <input class="form-control input-lg" type="text" id="highql" name="highql" placeholder="Highest Qualification " >
              </div>
		</div>
		<div class="col col-lg-6 col-12 mb-3">
			 <div class="form-group">
                  <input class="form-control input-lg" type="text" id="design" name="designination" placeholder="Designnation * ">
			  </div>
              </div>
		</div>


		<div class="row">
		<div class="col col-lg-6 col-12 mb-3">
			<div class="form-group">
                <input class="form-control input-lg" type="text"  id="stream" name="stream" placeholder="Stream">
              </div> 

              <div class="form-group checkbox mt-3">
                <label  class="text-white"><input  name="cond" id="cond" type="checkbox"> I accept terms & conditions</label>
              </div>   
		</div>
		<div class="col col-lg-6 col-12 mb-3">
			<div class="form-group">
                <label style="color: white;">File Format PDF Only!</label>
                <input type="file" name="resume" id="resume"  class="form-control" accept="application/pdf">
              </div>
          </div>

		</div>

         <div class="form-group">
                <button type="submit"  name="add" class="btn mb-2 bg-light btn-secondry">Register</button>
          </div>
		
	</div>
  </form>
</div>

<script type="text/javascript">

	function validate() {
		 var errormsg="";
		if(document.getElementById('fname').value==""){
			 errormsg+="Enter first Name \n";
			document.getElementById('fname').style.borderColor="red";
			
		}
		else{
			document.getElementById('fname').style.borderColor="";
		}

		if(document.getElementById('lname').value==""){
			 errormsg+="Enter Last Name \n";
			document.getElementById('lname').style.borderColor="red";
			
		}
		else{
				document.getElementById('lname').style.borderColor="";
		}
		if(document.getElementById('pass').value==""){
			 errormsg+="Enter password \n";
			document.getElementById('pass').style.borderColor="red";
			
		}
		else{
			document.getElementById('pass').style.borderColor="";
		}

		if(document.getElementById('conpass').value==""){
			 errormsg+="Enter confirm password \n";
			document.getElementById('conpass').style.borderColor="red";
			
		}

		else{
		if(document.getElementById('conpass').value!=document.getElementById('pass').value){
			 errormsg+=" password does not match  \n";
			document.getElementById('conpass').style.borderColor="red";
			
		}
		else{
			document.getElementById('conpass').style.borderColor="";
		}
	}

	if(document.getElementById('email').value==""){
			 errormsg+="Enter Email * \n";
			document.getElementById('email').style.borderColor="red";
			
		}
		else{
			 re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

			if (!re.test(document.getElementById('email').value)) {
           errormsg+="Enter valid Email id * \n";
			document.getElementById('email').style.borderColor="red";
			}
			else{

			document.getElementById('email').style.borderColor="";
			}
		}


		if(document.getElementById('tel').value==""){
			 errormsg+="Enter Phone number \n";
			document.getElementById('tel').style.borderColor="red";
			
		}
		else{
			re=/^[6-9]\d{9}$/
			if (!re.test(document.getElementById('tel').value))
			 {
          errormsg+="Enter valid Phone number \n";
			document.getElementById('tel').style.borderColor="red";
			 }
			 else{

			document.getElementById('tel').style.borderColor="";
			 }
		}

		if(document.getElementById('aboutme').value==""){
			 errormsg+="Write some about you! \n";
			document.getElementById('aboutme').style.borderColor="red";		
		}
		else{
			document.getElementById('aboutme').style.borderColor="";
		}

		if(document.getElementById('Address').value==""){
			 errormsg+="Enter your Addres! \n";
			document.getElementById('Address').style.borderColor="red";	
		}
		else{
			document.getElementById('Address').style.borderColor="";
		}

  if(document.getElementById('dob').value==""){
			 errormsg+=" Select Date of Birth \n"; 
			document.getElementById('dob').style.borderColor="red";	
		}
		else{
			document.getElementById('dob').style.borderColor="";	
		}

  if(document.getElementById('state').value==""){
			 errormsg+=" Enter your State \n"; 
			document.getElementById('state').style.borderColor="red";	
		}
		else{
			document.getElementById('state').style.borderColor="";	
		}
   
   if(document.getElementById('age').value==""){
			 errormsg+=" Enter your age \n"; 
			document.getElementById('age').style.borderColor="red";	
		}
		else{
			document.getElementById('age').style.borderColor="";
		}
		if(document.getElementById('city').value==""){
			 errormsg+=" Enter your City \n"; 
			document.getElementById('city').style.borderColor="red";	
		}
    else{
    	document.getElementById('city').style.borderColor="";
    }
  
    if(document.getElementById('yearofpass').value==""){
			 errormsg+=" Select Year of Passs \n"; 
			document.getElementById('yearofpass').style.borderColor="red";	
		}
		else{
       document.getElementById('yearofpass').style.borderColor="";	
		}

		if(document.getElementById('skill').value==""){
			 errormsg+=" Enter your Skill  \n"; 
			document.getElementById('skill').style.borderColor="red";	
		}
		else{
			document.getElementById('skill').style.borderColor=""
		}

   if(document.getElementById('highql').value==""){
			 errormsg+=" Enter Highest Qualification  \n"; 
			document.getElementById('highql').style.borderColor="red";	
		}
		else{
				document.getElementById('highql').style.borderColor="";	
		}

		if(document.getElementById('design').value==""){
			 errormsg+=" Enter your Desinationn   \n"; 
			document.getElementById('design').style.borderColor="red";	
		}
		else{
			document.getElementById('design').style.borderColor=""
		}

		if(document.getElementById('stream').value==""){
			 errormsg+=" Enter your Stream   \n"; 
			document.getElementById('stream').style.borderColor="red";	
		}
		else{
			document.getElementById('stream').style.borderColor="";
		}

    if(document.getElementById('cond').checked ==false){
			 errormsg+="Select Condition  \n"; 
			document.getElementById('cond').style.borderColor="red";	
		}
		else{
			document.getElementById('cond').style.borderColor="";	
		}

		if(document.getElementById('resume').value==""){
			 errormsg+="Select your CV   \n"; 
			document.getElementById('resume').style.borderColor="red";	
		}
		else{
       document.getElementById('resume').style.borderColor="";
		}


     if(errormsg!=""){
         alert(errormsg);
         return false;
     }

	}
</script>

<?php
 include('db.php');
 if (isset($_POST['add']))
  {
 	 $fname=mysqli_real_escape_string($con, $_POST['fname']);
  	$lname=mysqli_real_escape_string($con,$_POST['lname']);
  	$pass=mysqli_real_escape_string($con,$_POST['pass']);
  	$email=mysqli_real_escape_string($con,$_POST['email']);
  	$phone=mysqli_real_escape_string($con,$_POST['phone']);
  	$bio=mysqli_real_escape_string($con,$_POST['aboutme']);
  	$address=mysqli_real_escape_string($con,$_POST['Address']);
  	$dob=mysqli_real_escape_string($con,$_POST['dob']);
  	$state=mysqli_real_escape_string($con,$_POST['state']);
  	$age=mysqli_real_escape_string($con,$_POST['age']);
  	$city=mysqli_real_escape_string($con,$_POST['city']);
  	$yearofpass=mysqli_real_escape_string($con,$_POST['yearofpass']);
  	$skill=mysqli_real_escape_string($con,$_POST['skill']);
  	$highql=mysqli_real_escape_string($con,$_POST['highql']);
  	$design=mysqli_real_escape_string($con,$_POST['designination']);
  	$stream=mysqli_real_escape_string($con,$_POST['stream']);
  	$ffname=0;
  	if(is_uploaded_file($_FILES['resume']['tmp_name']))
  	{
  		$ffname=uniqid().$_FILES['resume']['name'];
  		 if (move_uploaded_file($_FILES['resume']['tmp_name'], "cv/$ffname"))
  		  {
  		 	echo "file moved";
  		 }
  	}

  	$qry="SELECT email FROM `user` WHERE email='$email'";
    $res=mysqli_query($con,$qry);
     if (mysqli_num_rows($res)>0)
      {
     			?>
     <script type="text/javascript">alert(" Email! Address Allredy Registred !");
    </script>
  		<?php
      }

  	else{


  		$sql="INSERT INTO `user`( `fname`, `lname`, `pass`, `email`, `phone`, `bio`, `address`, `dob`, `state`, `age`, `city`, `yearofpass`, `skill`, `highql`, `designation`, `stream`, `cv`, `active`, `mailchk`) VALUES ('$fname','$lname','$pass','$email','$phone','$bio','$address','$dob','$state','$age','$city','$yearofpass','$skill','$highql','$design','$stream','$ffname','0','0')";
  	if (mysqli_query($con,$sql)) {

  		$_SESSION['name']=$fname;
  		$_SESSION['email']=$email;
  			?>
     <script type="text/javascript">alert("Check Your Mail and Varify Email!");
       window.open("mail.php","_self");
    </script>
  		<?php
  	}
  	else{
  		//echo "again check";
  		?>
     <script type="text/javascript">alert("Try Again Check !");</script>
  		<?php
  	}

  	}

 }

 ?>
<?php 
include('footer.php');

?>

