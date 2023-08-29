<?php include('constant.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script src="jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  	<meta charset="utf-8">
  	<title>Login form</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  	<link rel="stylesheet" type="text/css" href="loginform_style.css">
  </head>
  <body style="background-image: url(clg5.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
  	<div class="center" style="margin-top: 40px">
      <div><a href="index.html"  data-toggle="tooltip" data-placement="bottom" title="Back"><input type="button" name="close" value="X" style="margin-left: 365px; margin-top:12px;cursor: pointer; font-weight: 600; border: none; "></a></div>
  		<h1>Sign In</h1>
  		<form method="post">
  			<div class="txt_field">
  			     <input type="text" name="Username" required>
  			     <span></span>
  			     <label>Username</label>
  			</div>
  			<div class="txt_field">
  			     <input type="password"  name="Password" required>
  			     <span></span>
  			     <label>Password</label>
  			</div>
  			<div class="pass"><a href="forgotpass.php">Forgot Password?</div>
  			<input type="submit" name="save" value="Login" ></button>
  			<div class="signup_link">
  				Not a member? <a href="register.php">Signup</a>
  		</form>

  	</div> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert/1.1.3/sweetalert.min.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    }</script>
  </body>
  </html>
  <?php 
   
if(isset($_POST["save"])){
  $user=$_POST["Username"];
  $pass=$_POST["Password"];
  $sql=mysqli_query($conn,"select * from registration where Username='".$user."' and Password='".$pass."' ");
  $var=mysqli_num_rows($sql);
  if($var !=0){
    $result=mysqli_fetch_array($sql); 
    $_SESSION["LogID"]=true;
    $_SESSION['Username']=$result['Username'];
    $_SESSION['Password']=$result['Password'];
    $alert="<script>alert('You Have Login Successfully !!')
    window.location='Home_page.php'</script>";
    echo $alert;
        
           
    }
  
  else {
          
         $alert="<script>alert('Invalid Login !!!  Please try again!!')</script>";
         echo $alert;
     }
  }
?> 