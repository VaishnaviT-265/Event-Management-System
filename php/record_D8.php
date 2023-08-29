<?php include('constant.php'); ?>
<?php 
if (isset($_POST["save"])) {
  $dob=$_POST['Date'];
  $dob=strtotime($dob);
  $dob=date('d-m-Y',$dob);
$sql=mysqli_query($conn,"INSERT INTO `record_d8` (`Person_name`, `Address`, `Mobile No`, `Topic`, `Course`, `Semester`,`Co-Ordinator`, `Date`,`Beneficiaries`,`year`)VALUES('".$_POST["per_name"]."', '".$_POST["address"]."', '".$_POST["mobile"]."', '".$_POST["Topic"]."', '".$_POST["course"]."', '".$_POST["sem"]."' , '".$_POST["Co-ord"]."' ,'".$dob."','".$_POST["bene"]."','".$_POST["year"]."')");
if($sql){
	header("location:viewreport_D8.php");
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Record D8</title>

  </head>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">

</head>
<body style="background-image: url(clg5.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
 <form method="post">
 	
  <table style="width: 38%; height: 60%; background-color: #f0f0f0; border-color: #800000; margin-top: 60px; border-top-style: hidden; border-radius: 15px;" align="center"  class="table table-hover" >

  	  <tr><td colspan="2"><a href="Home_page.php" data-toggle="tooltip" data-placement="bottom" title="Back"><input type="Button" style="margin-left: 490px; border-style: hidden; font-weight: 600; cursor: pointer; color: black;" name="cancel" value="X"></a><h2 style="font-family: montserrat;"><b><center>Add Record</center></b></h2></td></tr>
  	  <tr><td style="color: #adadad;">Name of Person:</td><td><input type="text" style="border-color: white; border-top-style:hidden" name="per_name" class="form-control" required=""></td></tr>
      <tr><td style="color: #adadad;">Address:</td><td><input type="text" style="border-color: white; border-top-style:hidden" name="address" class="form-control" required=""></td></tr>
      <tr><td style="color: #adadad;">Mobile No. :</td><td><input type="text" style="border-color: white; border-top-style:hidden" name="mobile" class="form-control" required=""></td></tr>
  		<tr><td style="color: #adadad; ">Topic:</td><td><select name="Topic" style="border-color: white" class="form-control" required="">
  	    <option >Select Topic</option>
  		<option value="Expert Lecture">Expert Lecture</option>	
  		<option value="My Story Board">My Story Board</option>
  		<option value="Sanjivani Eye connect">Sanjivani Eye connect </option>
  		</select></td></tr>
      <tr><td style="color: #adadad; ">Course Code & CO's NO's:</td><td><input type="text" name="course" style="border-color: white"  value="CPP-22050" class="form-control" required=""></td></tr>
  	   <tr><td style="color: #adadad; ">Semester:</td><td><select name="sem" style="border-color: white" class="form-control" required="">
        <option >Select Semester</option>
      <option value="ODD 1I">ODD 1I</option>  
      <option value="EVEN 2I">EVEN 2I</option>
      <option value="ODD 3I">ODD 3I</option>  
      <option value="EVEN 4I">EVEN 4I</option>
      <option value="ODD 5I">ODD 5I</option>  
      <option value="EVEN 6I">EVEN 6I</option>
      </select></td></tr>
  	   <tr><td style="color: #adadad; ">Co-Ordinator Name:</td><td><input type="text" name="Co-ord" style="border-color: white" class="form-control" required=""></td></tr>
        <tr><td style="color: #adadad; ">Date:</td><td><input type="Date" style="border-color: white" name="Date" class="form-control" required=""></td></tr>
       <tr><td style="color: #adadad; ">No. Of Beneficiaries:</td><td><input type="text" style="border-color: white" name="bene" class="form-control" required=""></td></tr>
       <tr><td style="color: #adadad; ">Year :</td><td><input type="text" style="border-color: white" name="year" class="form-control" required=""></td></tr>
       <tr><td colspan="2" align="center"><a href="report1.php"><input type="submit" style="width: 65%;
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