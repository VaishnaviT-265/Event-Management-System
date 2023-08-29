 <?php include('constant.php'); ?>
 <?php 
if (isset($_POST["Update"])) {
	$ID=$_POST["new_ID"];
	$Event=$_POST["new_Event"];
	$Venue=$_POST["new_Venue"];
	$Date=$_POST["new_Date"];
  $year=$_POST["new_year"];
  $bene=$_POST["new_bene"];
  $dob=$_POST["new_Date"];
  $dob=strtotime($dob);
  $dob=date('d-m-Y',$dob);
	$sql=mysqli_query($conn,"UPDATE `sport event` SET `Event`='".$Event."',`Venue`='".$Venue."',`Date`='".$dob."',`year`='".$year."',`Beneficiaries`='".$bene."' WHERE `ID`=".$ID."");

	if ($sql) {
    $alert="<script>alert('Data Updated Successfully !!')
    window.location='view_notice.php'</script>";
    echo $alert;
    }
   // "<script>window.location.href=view_notice.php</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Notice Record</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">

</head>
<body style="background-image: url(clg5.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
<?php 
 if(isset($_GET["edit"])){
 	$sql=mysqli_query($conn,"SELECT * from `sport event` where ID=".$_GET['edit']."");
 	$result=mysqli_fetch_array($sql);
 ?>
 <form method="POST">
 	
  <table style="width: 35%; height: 60%; background-color: #f0f0f0; border-color: #800000; margin-top: 60px; border-top-style: hidden; border-radius: 15px;" align="center"  class="table table-hover" >
     <tr><td colspan="2"><a href="view_notice.php"><input type="Button" style="margin-left: 430px;border-style: hidden; font-weight: 600; cursor: pointer; color: black;" name="cancel" value="X"></a><h2 style="font-family: montserrat;"><b><center>Edit Information</center></b></h2></td></tr>

      <tr><td style="color: #adadad;">sr no:</td><td><input type="hidden" style="border-color: white; border-top-style:hidden" name="new_ID" value="<?php echo $result["ID"]; ?>" class="form-control" required=""></td></tr>
  	  <tr><td style="color: #adadad; ">Event Name:</td><td><input type="text" style="border-color: white" name="new_Event" value="<?php echo $result["Event"]; ?>" class="form-control" required=""></td></tr>
       <tr><td style="color: #adadad; ">Venue:</td><td><input type="text" style="border-color: white" name="new_Venue" value="<?php echo $result["Venue"]; ?>" class="form-control" required=""></td></tr>
       <tr><td style="color: #adadad; ">Date:</td><td><input type="Date" style="border-color: white" name="new_Date" value="<?php echo $result["Date"]; ?>" class="form-control" required=""></td></tr>
       <tr><td style="color: #adadad; ">Year:</td><td><input type="text" style="border-color: white" name="new_year" value="<?php echo $result["year"]; ?>" class="form-control" required=""></td></tr>
       <tr><td style="color: #adadad; ">Beneficiaries:</td><td><input type="text" style="border-color: white"         name="new_bene" value="<?php echo $result["Beneficiaries"]; ?>" class="form-control" required=""></td></tr>
       <tr><td style="color: #adadad; ">Time:</td><td><input type="text" style="border-color: white" name="new_time" value="<?php echo $result["time"]; ?>" class="form-control" required=""></td></tr>
       <tr><td style="color: #adadad; ">Program Co-ordinator:</td><td><input type="text" style="border-color: white" name="new_coordinator" value="<?php echo $result["coordinator"]; ?>" class="form-control" required=""></td></tr>
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
  transition: .5s;" value="Update" name="Update" class="btn btn-primary"></a></td></tr>
       
  </table>
</form>
<?php
 }
 ?>
</body>
</html>