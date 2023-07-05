

<?php 

include('header.php');
?>

<div class="container  mt-5 primary p-2 rounded">
	 <h1 class="text-center text-white margin-bottom-20 p-3">CREATE COMPANY PROFILE</h1>
	<form method="post"  enctype="multipart/form-data" onsubmit="return validate();">
	<div class="row ">
		<div class="col col-lg-6 col-12 mb-3">
			 <div class="form-group">
			    <input type="text" class="form-control" id="name" name="name"  placeholder="Enter Your Name *" >
			  </div>
		</div>
		<div class="col col-lg-6 col-12 mb-3">
			<div class="form-group">
			    <input type="text" class="form-control" id="cname" name="cname"  placeholder="Enter Your Company Name *" >
			  </div>
		</div>
		
	</div>

	<div class="row">
		<div class="col col-lg-6 col-12 mb-3">
			 <div class="form-group">
			    <input type="password" class="form-control" id="pass" name="pass" placeholder="Enter password *" >
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
			    <input type="Tel" class="form-control"  id="tel" name="phone"  placeholder="Enter Mobile Number *" >
			  </div>
		</div>
		
	</div>

	<div class="row">
	
		<div class="col col-lg-12col-12 mb-3">
			<div class="form-group">
			    <input type="Text" class="form-control"  id="web" name="website"  placeholder="Enter Website Url *" >
			  </div>
		</div>
		
	</div>


	<div class="row">
		<div class="col col-lg-6 col-12 mb-3">
			 <div class="form-group">
			    <textarea class="form-control" name="aboutc" id="aboutc" rows="3" placeholder=" About your Company *" ></textarea>
			  </div>
		</div>

		<div class="col col-lg-6 col-12 mb-3">
			<select class="form-select" name="country" id="Country">
				  <option selected value="0">Open this select Country</option>
				   <?php
           include('db.php');
           $sql="Select * from countries";
           $res=mysqli_query($con,$sql);
            if (mysqli_num_rows($res)>0) {

            	  while ($row=mysqli_fetch_assoc($res)) {
            	  	?>
                   <option value="<?php echo $row['name'] ?>"><?php echo $row['name'] ?></option>
            	  	<?php
            	  }
            }
				    ?>
				  
				</select>
		</div>
		
	</div>

	<div class="row">
		<div class="col col-lg-6 col-12 mb-3">
			 <div class="form-group">
                <input class="form-control input-lg" type="text"  id="state" name="state" placeholder="State * " >
        </div>
		</div>
		<div class="col col-lg-6 col-12 mb-3">
			<div class="form-group">
                <input class="form-control input-lg" type="text" id="city"  name="city" placeholder="City *" >
              </div>
		</div>
		
	</div>


		<div class="row">
		<div class="col col-lg-6 col-12 mb-3">
			
              <div class="form-group checkbox mt-3">
                <label  class="text-white"><input  name="cond" id="cond" type="checkbox"> I accept terms & conditions</label>
              </div>   
		</div>
		<div class="col col-lg-6 col-12 mb-3">
			<div class="form-group">
                <label >Attach Company Logo</label>
                <input type="file" name="logo"  id="logo"  class="form-control">
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
	function validate()
	{
		 var errormsg="";
		if(document.getElementById('name').value==""){
			 errormsg+="Enter Your Name \n";
			document.getElementById('name').style.borderColor="red";
		}
		else{
			document.getElementById('name').style.borderColor="";
		}

		if(document.getElementById('cname').value==""){
			 errormsg+="Enter Company Name \n";
			document.getElementById('cname').style.borderColor="red";
		}
		else{
			document.getElementById('cname').style.borderColor="";
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

 if(document.getElementById('web').value==""){
			 errormsg+="Enter Company website ..\n";
			document.getElementById('web').style.borderColor="red";
			
	  }
	  else{
	  	document.getElementById('web').style.borderColor="";
	  }

	  if(document.getElementById('aboutc').value==""){
			 errormsg+="Write About your Company  ..\n";
			document.getElementById('aboutc').style.borderColor="red";
			
	  }
	  else{
	  	document.getElementById('aboutc').style.borderColor="";
	  }

	   if(document.getElementById('Country').value=="0"){
			 errormsg+="Select Country  ..\n";
			document.getElementById('aboutc').style.borderColor="red";
			
	  }
	  else{
	  	document.getElementById('aboutc').style.borderColor="";
	  }

	  if(document.getElementById('state').value==""){
			 errormsg+=" Enter your State \n"; 
			document.getElementById('state').style.borderColor="red";	
		}
		else{
			document.getElementById('state').style.borderColor="";	
		}

	  if(document.getElementById('city').value==""){
			 errormsg+=" Enter your City \n"; 
			document.getElementById('city').style.borderColor="red";	
		}
    else{
    	document.getElementById('city').style.borderColor="";
    }

    if(document.getElementById('cond').checked ==false){
			 errormsg+="Select Condition  \n"; 
			document.getElementById('cond').style.borderColor="red";	
		}
		else{
			document.getElementById('cond').style.borderColor="";	
		}

		if(document.getElementById('logo').value==""){
			 errormsg+="Select your CV   \n"; 
			document.getElementById('logo').style.borderColor="red";	
		}
		else{
       document.getElementById('logo').style.borderColor="";
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
 	 $name=mysqli_real_escape_string($con, $_POST['name']);
  	$cname=mysqli_real_escape_string($con,$_POST['cname']);
  	$pass=mysqli_real_escape_string($con,$_POST['pass']);
  	$email=mysqli_real_escape_string($con,$_POST['email']);
  	$phone=mysqli_real_escape_string($con,$_POST['phone']);
  	$bio=mysqli_real_escape_string($con,$_POST['aboutc']);
  	$website=mysqli_real_escape_string($con,$_POST['website']);
    $country=mysqli_real_escape_string($con,$_POST['country']);
  	$state=mysqli_real_escape_string($con,$_POST['state']);
  	$city=mysqli_real_escape_string($con,$_POST['city']);
  
  	$ffname=0;
  	if(is_uploaded_file($_FILES['logo']['tmp_name']))
  	{
  		$ffname=uniqid().$_FILES['logo']['name'];
  		 if (move_uploaded_file($_FILES['logo']['tmp_name'], "logo/$ffname"))
  		  {
  		 	echo "file moved";
  		 }
  	}

  	$qry="SELECT * FROM `company` WHERE mail='$email'";
    $res=mysqli_query($con,$qry);
     if (mysqli_num_rows($res)>0)
      {
     			?>
     <script type="text/javascript">alert(" Email! Address Allredy Registred !");
    </script>
  		<?php
      }
  	else{

  		$sql="INSERT INTO `company`(`name`, `cname`, `pass`, `Website`, `phone`, `mail`, `cbio`, `country`, `state`, `city`, `logo`, `active`) VALUES ('$name','$cname','$pass','$website','$phone','$email','$bio','$country','$state','$city','$ffname','2')";
  	if (mysqli_query($con,$sql)) {

  			?>
     <script type="text/javascript">alert("Registred Sucessfully!");
       window.open("company-login.php","_self");
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
