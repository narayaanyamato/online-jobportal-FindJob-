

<?php

include 'db.php';
  if (isset($_POST['add'])) {

  	$fname=$_POST['fname'];
  	$lname=$_POST['lname'];
  	$pass=$_POST['pass'];
  	$email=$_POST['email'];
  	$phone=$_POST['phone']
  	$about=$_POST['aboutme'];
  	$address=$_POST['Address'];
  	$dob=$_POST['dob'];
  	$state=$_POST['state'];
  	$age=$_POST['age'];
  	$city=$_POST['city'];
  	$yearofpass=$_POST['yearofpass'];
  	$skill=$_POST['skill'];
  	$highql=$_POST['highql'];
  	$design=$_POST['designination'];
  	$stream=$_POST['stream'];
  	$fname=0;
  	if(is_uploaded_file($_FILES['resume']['tmp_name']))
  	{
  		$fname=$_FILES['resume']['name'];
  		 if (move_uploaded_file($_FILES['resume']['tmp_name'], "cv/$fname"))
  		  {
  		 	echo "file moved";
  		 }

  	}
 $hash = md5(uniqid());
  	$sql="INSERT INTO `users`( `firstname`, `lastname`, `email`, `password`, `address`, `city`, `state`, `contactno`, `qualification`, `stream`, `passingyear`, `dob`, `age`, `designation`, `resume`, `hash`, `active`, `aboutme`, `skills`) VALUES ('$fname','$state','[value-9]','[value-10]','$phone','$highql','$dob','$age','$design','$fname','$hash','0','$about','$skill')";
  	if (mysqli_query($con,$sql)) {
  		
  		echo "User Added";
  	}
  	else{
  		echo "again check";
  	}

  }
?>