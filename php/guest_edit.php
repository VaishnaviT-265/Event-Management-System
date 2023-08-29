 <?php include('constant.php'); ?>
 <?php 
if (isset($_POST["Update"])) {
	$ID=$_POST["new_ID"];
	$Fname=$_POST["new_Fname"];
  $industry=$_POST["new_industry"];
	$Type=$_POST["new_Type"];
	
  $Subject=$_POST["new_Subject"];
	$Venue=$_POST["new_Venue"];
	$Time=$_POST["new_Time"];
  $Beneficiary=$_POST["new_Beneficiary"];
  $coordinator=$_POST["new_coordinator"];
  $Year=$_POST["new_Year"];

  $Date=$_POST["new_Date"];
  $Date=strtotime($Date);
  $Date=date('d-m-y',$Date);
	$sql=mysqli_query($conn,"UPDATE `guest lecture` SET `Fname`='".$Fname."',`industry`='".$industry."',`Type`='".$Type."',`Date`='".$Date."',`Subject`='".$Subject."',`Venue`='".$Venue."',`Time`='".$Time."',`Beneficiary`='".$Beneficiary."',`coordinator`='".$coordinator."',`Year`='".$Year."' WHERE `ID`=".$ID."");
	if ($sql) {
		header("location:view_guest.php");
		
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Guest Information</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">

</head>
<body style="background-image: url(clg5.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
<?php 
 if(isset($_GET["edit"])){
 	$sql=mysqli_query($conn,"SELECT * from `guest lecture` where ID=".$_GET['edit']."");
 	$result=mysqli_fetch_array($sql);
 ?>
 <form method="POST">
 	
  <table style="width: 35%; height: 60%; background-color: #f0f0f0; border-color: #800000; margin-top: 60px; border-top-style: hidden; border-radius: 15px;" align="center"  class="table table-hover" >
     <tr><td colspan="2"><a href="view_guest.php" data-toggle="tooltip" data-placement="bottom" title="Back"><input type="Button" style="margin-left: 365px;border-style: hidden; font-weight: 600; cursor: pointer; color: black;" name="cancel" value="X"></a><h2 style="font-family: montserrat;"><b><center>Edit Information</center></b></h2></td></tr>

      <tr><td style="color: #adadad;">sr no:</td><td><input type="hidden" style="border-color: white; border-top-style:hidden" name="new_ID" value="<?php echo $result["ID"]; ?>" class="form-control" required=""></td></tr>
  	 <tr><td style="color: #adadad;">Full Name:</td><td><input type="text" style="border-color: white; border-top-style:hidden" name="new_Fname" value="<?php echo $result["Fname"]; ?>" class="form-control" required=""></td></tr>
      
      <tr><td style="color: #adadad;">Industry Name:</td><td><input type="text" style="border-color: white; border-top-style:hidden" name="new_industry" value="<?php echo $result["industry"]; ?>" class="form-control" required=""></td></tr>


     <tr><td style="color: #adadad; ">Type:</td><td><input type="text" name="new_Type" value="<?php echo $result["Type"]; ?>" style="border-color: white" class="form-control" required=""></td></tr>

     <tr><td style="color: #adadad; ">Date:</td><td><input type="Date" style="border-color: white" name="new_Date" value="<?php echo $result["Date"]; ?>" class="form-control" required=""></td></tr>

  	  <tr><td style="color: #adadad; ">Subject:</td><td><input type="text" style="border-color: white" name="new_Subject" value="<?php echo $result["Subject"]; ?>" class="form-control" required=""></td></tr>

  	   
       <tr><td style="color: #adadad; ">Venue:</td><td><input type="text" style="border-color: white" name="new_Venue" value="<?php echo $result["Venue"]; ?>" class="form-control" required=""></td></tr>
       
       <tr><td style="color: #adadad; ">Time</td><td><input type="Time" style="border-color: white" name="new_Time" value="<?php echo $result["Time"]; ?>" class="form-control" required=""></td></tr>
        <tr><td style="color: #adadad; ">Beneficiary:</td><td><input type="text" style="border-color: white" name="new_Beneficiary" value="<?php echo $result["Beneficiary"]; ?>" class="form-control" required=""></td></tr>
       <tr><td style="color: #adadad;">Name of Co-ordinator:</td><td><input type="text" style="border-color: white; border-top-style:hidden" name="new_coordinator" value="<?php echo $result["coordinator"]; ?>" class="form-control" required=""></td></tr>
       <tr><td style="color: #adadad; ">Year:</td><td><input type="text" style="border-color: white" name="new_Year" value="<?php echo $result["Year"]; ?>" class="form-control" required=""></td></tr>

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