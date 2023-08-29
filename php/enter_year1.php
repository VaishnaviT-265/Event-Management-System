<?php include('constant.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Search D8 Report</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">

</head>
<body style="background-image: url(clg5.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
<form method="post">
	<table style="width: 20%; height: 60%; background-color: #f0f0f0; border-color: #800000; margin-top: 60px; border-top-style: hidden; border-radius: 15px;" align="center"  class="table table-hover" >

		 <tr><td colspan="2"><a href="Home_page.php" data-toggle="tooltip" data-placement="bottom" title="Back"><input type="Button" style="margin-left: 400px; border-style: hidden; font-weight: 600; cursor: pointer; color: black;" name="cancel" value="X"></a><h2 style="font-family: montserrat;"><b><center>View Record</center></b></h2></td></tr>

		  <tr><td style="color: #adadad; ">Enter Year:</td><td><input type="text" name="year" style="border-color: white" class="form-control" required="">
<tr><td colspan="2" align="center"><input type="submit" style="width: 50%;
margin-top: 30px;
  height: 50px;
  border: 1px solid;
  background: blue;
  border-radius: 25px;
  font-size: 18px;
  color: #e9f4fb;
  font-weight: 700;
  cursor: pointer;
  outline: none; border-color: #2691d9;
  transition: .5s;" value="Submit" name="submit" class="btn btn-primary"></a></td></tr>

   </table>
</form>
    <?php 
   if (isset($_POST['submit']))
    {
       $year=$_POST['year'];
        $sql="SELECT year from record_d8 where year='$year' ";
        $rest=mysqli_query($conn,$sql);
        if(!mysqli_num_rows($rest)>0){
          echo "<script>alert('No Data Found...');</script>";
        }
        else{
           while ($result=mysqli_fetch_array($rest)) 
           {   
               

                 ?>
                 <table border="1" class="table table-bordered" style="width: 50%; height: 60%; background-color: #f0f0f0; border-color: #800000; margin-top: 60px;" align="center" >
       	              <tr style="background-color:#76dbc7;">
       		                 <td width="50%"><b>Year</b></td>
       		                 <td><b>Action</b></td>
                    	</tr>
 	                    <tr class="bg-info">
                         	<td ><?php echo $result['year'] ?></td>
       	                  <td><a href="Report_D8.php?view=<?php echo $result['year']; ?>"><img src="view.png" style="width: 28px;height: 28px;">&emsp;<input type="submit" class="btn btn-success" name="view" value="View Record"></td></tr>
                      <?php
                      if ($result=1) 
                      {
                             break;
                      }
                }
                
           }
         }
     ?>
       	
       </table>
       
</body>

</html>