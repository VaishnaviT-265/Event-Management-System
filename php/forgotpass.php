<?php include('constant.php'); ?>
<?php
if (isset($_POST["update"])) {
  $pass=$_POST["newpass"];
  $user=$_POST["Username"];
  $sql=mysqli_query($conn,"UPDATE `registration` SET `Password`='".$pass."' WHERE `Username`='".$user."'");
  if($sql){
    $alert="<script>alert('Password Changed !!')
    window.location='login_form.php'</script>";
         echo $alert;
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  	<meta charset="utf-8">
  	<title>Forget Password</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="forgotpass_style.css">
  </head>
  <body style="background-image: url(clg5.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
  	<div class="center" style="margin-top: 15px;">
      <div><a href="login_form.php" data-toggle="tooltip" data-placement="bottom" title="Back"><input type="button" name="close" value="X" style="margin-left: 365px; margin-top: 15px; cursor: pointer; font-weight: 600; border: none; "></a></div>
  		<h1>Create New Password</h1>
  		<form method="post">
        <div class="txt_field">
             <input type="text" name="Username" >
             <span></span>
             <label>Username</label>
        </div>
  			<div class="txt_field">

  			     <input type="password" name="newpass" required>
  			     <span></span>
  			     <label>New Password</label>
  			</div>
  			
  			
  			<input type="submit" name="update" value="Save">
  			<br><br><br><br>
  		</form>
  </body>
  </html>