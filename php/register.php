<?php include('constant.php'); ?>
<?php
if(!$conn){
  echo "Connection Failed";
}
if (isset($_POST["save"])) {
  $Name=$_POST["FullName"];
  $Dept=$_POST["Dept"];
  $Post=$_POST["Post"];
  $query="SELECT * from `registration` WHERE `FullName`='$Name' and `Dept`='$Dept' and `Post`='$Post'";
  $rest=mysqli_query($conn,$query);
  if(mysqli_num_rows($rest)>0){
    echo "<script>alert('You Have Registered Already...!!');</script>";
  }
  else{
       $sql="INSERT INTO `registration` (`FullName`, `Dept`, `Post`, `Username`, `Password`)VALUES ('".$Name. "','".$Dept."', '".$Post."', '".$_POST["Username"]."', '".$_POST["Password"]."')";
       $result=mysqli_query($conn,$sql);
      if($result){
	        $alert="<script>alert('Registration Successfull...... !!! You are Now Member....!!')
          window.location='login_form.php'
          </script>";
         echo $alert;
}
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>

  </head>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">

</head>
<body style="background-image: url(clg5.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
 <form method="post">
 	<table style="width: 30%; height: 60%; background-color: #f0f0f0; border-color: #1a1a1a; margin-top: 40px;border-top-style: hidden; border-radius: 15px;" align="center"  class="table table-hover" >
  	  <tr><td colspan="2"><a href="login_form.php"  data-toggle="tooltip" data-placement="bottom" title="Back"><input type="Button" style="margin-left: 365px; border-style: hidden; font-weight: 600; cursor: pointer; color: black;" name="cancel" value="X"></a><h2 style="font-family: montserrat;"><b><center>Sign Up</center></b></h2></td></tr>
  	  <tr><td style="color: #adadad;">Full Name:</td><td><input type="text" style="border-color: white; border-top-style:hidden" name="FullName" class="form-control" required=""></td></tr>
  		<tr><td style="color: #adadad; ">Department:</td><td><select name="Dept" style="border-color: white" class="form-control" required="">
  	    <option >Select Deaprtment</option>
  		<option value="Computer Technology">Computer Technology</option>	
  		<option value="Information Technology">Information Technology</option>
  		<option value="Mechanical">Mechanical</option>
  		<option value="Civil">Civil</option>
      <option value="Electrical">Electrical</option>
      <option value="E&Tc">Electronics and Telecommunication</option>
      <option value="Mechatronics">Mechatronics</option>
  		</select></td></tr>
      <tr><td style="color: #adadad; ">Post:</td><td><select name="Post" style="border-color: white" class="form-control" required="">
        <option>Select Post</option>
      <option value="Hod">Head Of Department</option>  
      <option value="Teacher">Teacher</option>
      </select></td></tr>
  	  <tr><td style="color: #adadad; ">Username:</td><td><input type="text" style="border-color: white" name="Username" class="form-control" required=""></td></tr>
  	  <tr><td style="color: #adadad; ">Password:</td><td><input type="password" style="border-color: white" name="Password" class="form-control" required=""></td></tr>
      <tr><td colspan="2" align="center"><input type="submit" style="width: 75%;
  height: 50px;
  border: 1px solid;
  background: blue;
  border-radius: 25px;
  font-size: 18px;
  color: #e9f4fb;
  font-weight: 700;
  cursor: pointer;
  outline: none; border-color: #2691d9;
  transition: .5s;" value="Submit" name="save" class="btn btn-primary"><br><br>
  Already have an Account?<a href="login_form.php"> Sign In</a></td></tr>

  </table></form>
 
  
</body>
</html>