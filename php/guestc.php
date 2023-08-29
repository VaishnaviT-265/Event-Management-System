<?php include('constant.php'); ?>
<?php 
if (isset($_POST["save"])) {
  $dob=$_POST['Date'];
  $dob=strtotime($dob);
  $dob=date('d-m-Y',$dob);
$sql=mysqli_query($conn,"INSERT INTO `guest lecture` (`Fname`,`industry`, `Type`, `Date`, `Subject`, `Venue`, `Time`,`Beneficiary`,`coordinator`,`Year`) VALUES('".$_POST["Fname"]."','".$_POST["industry"]."', '".$_POST["Type"]."', '".$dob."', '".$_POST["Subject"]."', '".$_POST["Venue"]."' , '".$_POST["Time"]."','".$_POST["Beneficiary"]."','".$_POST["coordinator"]."', '".$_POST["Year"]."')");
if($sql){
  header("location:view_guest.php");
 }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Guest Lecture Record</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body style="background-image: url(clg5.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
 <form  method="post">
  <table style="width: 30%; height: 60%; background-color: #f0f0f0; border-color: #800000; margin-top: 60px; border-top-style: hidden; border-radius: 15px;" align="center"  class="table table-hover" >
  	  <tr><td colspan="2"><a href="Home_page.php"data-toggle="tooltip" data-placement="bottom" title="Back"><input type="Button" style="margin-left: 400px; border-style: hidden; font-weight: 600; cursor: pointer; color: black;" name="cancel" value="X"></a><h2 style="font-family: montserrat;"><b><center>Guest Lecture</center></b></h2></td></tr>
  	  <tr><td style="color: #adadad;">Full Name:</td><td><input type="Fname" style="border-color: white; border-top-style:hidden" name="Fname" class="form-control" required=""></td></tr>
       <tr><td style="color: #adadad;">Name of Industry:</td><td><input type="text" style="border-color: white; border-top-style:hidden" name="industry" class="form-control" required=""></td></tr>
  		<tr><td style="color: #adadad; ">Type:</td><td><input type ="Type" name="Type" style="border-color: white" class="form-control" required="">
  	    </td></tr>
      <tr><td style="color: #adadad; ">Date:</td><td><input type="Date" name="Date" style="border-color: white" class="form-control" required=""></td></tr>
  	  <tr><td style="color: #adadad; ">Subject:</td><td><input type="Subject" style="border-color: white" name="Subject" class="form-control" required=""></td></tr>
  	   <tr><td style="color: #adadad; ">Venue:</td><td><input type="text" name ="Venue" style="border-color: white" class="form-control" required=""> 
      </td></tr>
       <tr><td style="color: #adadad; ">Time:</td><td><input type="Time" style="border-color: white" name="Time" class="form-control" required=""></td></tr>
       <tr><td style="color: #adadad; ">Beneficiary:</td><td><input type="text" name ="Beneficiary" style="border-color: white" class="form-control" required=""> 
       <tr><td style="color: #adadad;">Name of Co-ordinator:</td><td><input type="text" style="border-color: white; border-top-style:hidden" name="coordinator" class="form-control" required=""></td></tr>
       <tr><td style="color: #adadad;">Year:</td><td><input type="text" style="border-color: white; border-top-style:hidden" name="Year" class="form-control" required=""></td></tr>
      <tr><td colspan="2" align="center"><a href="guestc.php"><input type="submit" style="width: 75%; height: 50px; border: 1px solid; background: blue; border-radius: 25px; font-size: 18px; color: #e9f4fb; font-weight: 700; cursor: pointer; outline: none; border-color: #2691d9; transition: .5s;" value="Submit" name="save" class="btn btn-primary"></a></td></tr>
  </table></form>
</body>
</html>