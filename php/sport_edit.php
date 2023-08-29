<?php include('constant.php'); ?>
 <?php 
if (isset($_POST["Update"])) {
	$ID=$_POST["new_ID"];
	$Std_name=$_POST["new_Std_name"];
	$Branch=$_POST["new_Branch"];
	$Class=$_POST["new_Class"];
	$Event=$_POST["new_Event"];
	$Venue=$_POST["new_Venue"];
	$Date=$_POST["new_Date"];
  $Date=strtotime($Date);
  $Date=date('d-m-y',$Date);
 
	$sql=mysql_query("UPDATE `sport event` SET `Std_name`='".$Std_name."',`Branch`='".$Branch."',`Class`='".$Class."',`Event`='".$Event."',`Venue`='".$Venue."',`Date`='".$Date."' WHERE `ID`=".$ID."");
	if ($sql) {
		header("location:view_Sport.php");
		
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Information</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">

</head>
<body style="background-image: url(clg5.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
<?php 
 if(isset($_GET["edit"])){
 	$sql=mysql_query("SELECT * from `sport event` where ID=".$_GET['edit']."");
 	$result=mysql_fetch_array($sql);
 ?>
 <form method="POST">
 	
  <table style="width: 35%; height: 60%; background-color: #f0f0f0; border-color: #800000; margin-top: 60px; border-top-style: hidden; border-radius: 15px;" align="center"  class="table table-hover" >
     <tr><td colspan="2"><a href="report1.php" data-toggle="tooltip" data-placement="bottom" title="Back"><input type="Button" style="margin-left: 365px;border-style: hidden; font-weight: 600; cursor: pointer; color: black;" name="cancel" value="X"></a><h2 style="font-family: montserrat;"><b><center>Edit Information</center></b></h2></td></tr>

      <tr><td style="color: #adadad;">sr no:</td><td><input type="hidden" style="border-color: white; border-top-style:hidden" name="new_ID" value="<?php echo $result["ID"]; ?>" class="form-control" required=""></td></tr>
  	 <tr><td style="color: #adadad;">Name of Student:</td><td><input type="text" style="border-color: white; border-top-style:hidden" name="new_Std_name" value="<?php echo $result["Std_name"]; ?>" class="form-control" required=""></td></tr>
  	 <tr><td style="color: #adadad; ">Branch:</td><td><select name="new_Branch" value="<?php echo $result["Branch"]; ?>" style="border-color: white" class="form-control" required="">
  	    <option >Select Branch</option>
  		<option value="Computer Technology">Computer Technology</option>	
  		<option value="Information Technology">Information Technology</option>
  		<option value="Mechanical">Mechanical</option>
  		<option value="Civil">Civil</option>
        <option value="Electrical">Electrical</option>
        <option value="E&Tc">Electronics and Telecommunication</option>
        <option value="Mechatronics">Mechatronics</option>
  		</select></td></tr>
     <tr><td style="color: #adadad; ">Class:</td><td><input type="text" name="new_Class" value="<?php echo $result["Class"]; ?>" style="border-color: white" class="form-control" required=""></td></tr>
  	  <tr><td style="color: #adadad; ">Event Name:</td><td><input type="text" style="border-color: white" name="new_Event" value="<?php echo $result["Event"]; ?>" class="form-control" required=""></td></tr>
       <tr><td style="color: #adadad; ">Venue:</td><td><input type="text" style="border-color: white" name="new_Venue" value="<?php echo $result["Venue"]; ?>" class="form-control" required=""></td></tr>
       <tr><td style="color: #adadad; ">Date:</td><td><input type="Date" style="border-color: white" name="new_Date" value="<?php echo $result["Date"]; ?>" class="form-control" required=""></td></tr>
       <tr><td colspan="2" align="center"><input type="submit" style="width: 75%; height: 50px; border: 1px solid; background: blue; border-radius: 25px; font-size: 18px; color: #e9f4fb; font-weight: 700; cursor: pointer; outline: none; border-color: #2691d9; transition: .5s;" value="Update" name="Update" class="btn btn-primary"></a></td></tr>
  </table>
</form>
<?php
 }
 ?>
</body>
</html>