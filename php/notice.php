<?php include('constant.php'); ?>
<?php 
if (isset($_POST["save"])) {
  $dob=$_POST['Date'];
  $dob=strtotime($dob);
  $dob=date('d-m-Y',$dob);
$sql=mysqli_query($conn,"INSERT INTO `sport event` (`Event`, `Venue`, `Date`,`year`,`Beneficiaries`,`time`,`coordinator`) VALUES('".$_POST["Event"]."', '".$_POST["Venue"]."' ,  '".$dob."','".$_POST["year"]."','".$_POST["bene"]."','".$_POST["time"]."','".$_POST["coordinator"]."')");
if($sql){
  header("location:view_notice.php");
}
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Notice</title>

  </head>
  <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">

</head>
<body style="background-image: url(clg5.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
 <form method="post">
  
  <table style="width:30%;height: 60%;background-color: #f0f0f0; border-color: #800000; margin-top: 60px; border-top-style: hidden; border-radius: 15px;" align="center"  class="table table-hover" >

      <tr><td colspan="2"><a href="Home_page.php" data-toggle="tooltip" data-placement="bottom" title="Back"><input type="Button" style="margin-left: 400px; border-style: hidden; font-weight: 600; cursor: pointer; color: black;" name="cancel" value="X"></a><h2 style="font-family: montserrat;"><b><center>Event Notice</center></b></h2></td></tr>
      <tr><td style="color: #adadad; ">Event Name:</td><td><input type="text" style="border-color: white" name="Event" class="form-control" required=""></td></tr>

       <tr><td style="color: #adadad; "> Venue:</td><td><input type="text" style="border-color: white" name="Venue" class="form-control" required=""></td></tr>
        <tr><td style="color: #adadad; ">Date:</td><td><input type="Date" style="border-color: white" name="Date" class="form-control" required=""></td></tr>
        <tr><td style="color: #adadad; ">year:</td><td><input type="text" style="border-color: white" name="year" class="form-control" required=""></td></tr>
        <tr><td style="color: #adadad; ">Beneficiaries:</td><td><input type="text" style="border-color: white" name="bene" class="form-control" required=""></td></tr>
        <tr><td style="color: #adadad; ">Time:</td><td><input type="time" style="border-color: white" name="time" class="form-control" required=""></td></tr>
        <tr><td style="color: #adadad; ">Program Co-ordinator:</td><td><input type="text" style="border-color: white" name="coordinator" class="form-control" required=""></td></tr>
      <tr><td colspan="2" align="center"><a href="report1.php"><input type="submit" style="width: 75%;
  height: 50px;
  border: 1px solid;
  background: blue;
  border-radius: 25px;
  font-size: 18px;
  color: #e9f4fb;
  font-weight: 700;
  cursor: pointer;
  outline: none; border-color: #2691d9;
  transition: .5s;" value="Submit" name="save" class="btn btn-primary"></a></td></tr>

  </table></form>
 
  
</body>
</html>