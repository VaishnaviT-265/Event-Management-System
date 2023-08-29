<?php include('constant.php'); ?>
<?php 
if (isset($_POST["save"])) {
	$ID=$_POST["new_ID"];
	$per_name=$_POST["new_per_name"];
	$address=$_POST["new_address"];
	$mobile=$_POST["new_mobile"];
	$Topic=$_POST["new_Topic"];
	$course=$_POST["new_course"];
	$sem=$_POST["new_sem"];
	$Coord=$_POST["new_coordinator"];
  $Date=$_POST["new_Date"];
  $Date=strtotime($Date);
  $Date=date('d-m-Y',$Date);
  $bene=$_POST["new_bene"];
  $year=$_POST["new_year"];

	$sql=mysqli_query($conn,"UPDATE `record_d8` SET `Person_name`='".$per_name."',`Address`='".$address."',`Mobile No`='".$mobile."',`Topic`='".$Topic."',`Course`='".$course."',`Semester`='".$sem."',`Co-Ordinator`='".$Coord."',`Date`='".$Date."',`Beneficiaries`='".$bene."',`year`='".$year."'WHERE `ID`=".$ID."");
	if ($sql) {
		echo "<script>alert('Data Updated Successfully....');
    window.location='viewreport_D8.php'</script>";
		
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit D8 records</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">

</head>
<body style="background-image: url(clg5.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
<?php 
 if(isset($_GET["edit"])){
 	$sql=mysqli_query($conn,"SELECT * from record_d8 where ID=".$_GET['edit']."");
 	$result=mysqli_fetch_array($sql);
 ?>
 <form method="POST">
 	
  <table style="width: 35%; height: 60%; background-color: #f0f0f0; border-color: #800000; margin-top: 60px; border-top-style: hidden; border-radius: 15px;" align="center"  class="table table-hover" >

     <tr><td colspan="2"><a href="viewreport_D8.php"><input type="Button" style="margin-left: 430px;border-style: hidden; font-weight: 600; cursor: pointer; color: black;" name="cancel" value="X"></a><h2 style="font-family: montserrat; "><b><center>Edit Information</center></b></h2></td>
     </tr>
     <tr><td style="color: #adadad;">sr no:</td><td><input type="hidden" style="border-color: white; border-top-style:hidden" name="new_ID" value="<?php echo $result["ID"]; ?>" class="form-control" required=""></td></tr>
     <tr><td style="color: #adadad;">Name of Person:</td><td><input type="text" style="border-color: white;              border-top-style:hidden" name="new_per_name" value="<?php echo $result["Person_name"]; ?>" class="form-control"    required=""></td>
     </tr>
     <tr><td style="color: #adadad;">Address:</td><td><input type="text" style="border-color: white; border-top-style:    hidden" name="new_address"  value="<?php echo $result["Address"]; ?>" class="form-control" required=""></td>
     </tr>
     <tr><td style="color: #adadad;">Mobile No. :</td><td><input type="text" style="border-color: white; border-top-style:hidden" name="new_mobile" class="form-control"  value="<?php echo $result["Mobile No"]; ?>" required=""></td>
     </tr>
     <tr><td style="color: #adadad; ">Topic:</td><td>
         <select name="new_Topic" value="<?php echo $result["Topic"]; ?>" style="border-color: white" class="form-control" required="">
             <option >Select Topic</option>
             <option value="Expert Lecture">Expert Lecture</option>  
             <option value="My Story Board">My Story Board</option>
             <option value="Sanjivani Eye connect">Sanjivani Eye connect </option>
         </select></td>
     </tr>
     <tr><td style="color: #adadad; ">Course Code & CO's NO's:</td><td><input type="text" name="new_course"  value="<?php echo $result["Course"]; ?>" style="border-color: white"  value="CPP-22050" class="form-control" required=""></td></tr>
     <tr><td style="color: #adadad; ">Semester:</td><td><select name="new_sem" value="<?php echo $result["Semester"]; ?>" style="border-color: white" class="form-control" required="">
        <option >Select Semester</option>
      <option value="ODD 1I">ODD 1I</option>  
      <option value="EVEN 2I">EVEN 2I</option>
      <option value="ODD 3I">ODD 3I</option>  
      <option value="EVEN 4I">EVEN 4I</option>
      <option value="ODD 5I">ODD 5I</option>  
      <option value="EVEN 6I">EVEN 6I</option>
      </select></td>
     </tr>
    <tr><td style="color: #adadad; ">Co-ordinator Name:</td><td><input type="text" name="new_coordinator"  value="<?php echo $result["Co-Ordinator"]; ?>" style="border-color: white"  class="form-control" required=""></td>
    </tr>
    <tr><td style="color: #adadad; ">Date:</td><td><input type="Date" style="border-color: white" name="new_Date" value="<?php echo $result["Date"]; ?>" class="form-control" required=""></td>
    </tr>
    <tr><td style="color: #adadad; ">No. Of Beneficiaries:</td><td><input type="text" style="border-color: white" name="new_bene"  value="<?php echo $result["Beneficiaries"]; ?>" class="form-control" required=""></td>
    </tr>
    <tr><td style="color: #adadad; ">Year :</td><td><input type="text" style="border-color: white" name="new_year" value="<?php echo $result["year"]; ?>" class="form-control" required=""></td>
    </tr> 
     
       <tr><td colspan="2" align="center"><a href="viewreport_D8.php"><input type="submit" style="width: 75%;
          height: 50px;
           border: 1px solid;
          background: blue;
          border-radius: 25px;
          font-size: 18px;
         color: #e9f4fb;
         font-weight: 700;
         cursor: pointer;
         outline: none; border-color: #2691d9;
         transition: .5s;" value="Update" name="save" class="btn btn-primary"></a></td></tr>
</table>
</form>
<?php
}
?>
</body>
</html>