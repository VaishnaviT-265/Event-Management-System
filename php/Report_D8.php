<?php include('constant.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  	<meta charset="utf-8">
  	<title>Report D8</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  	
  </head>
  <body style="background-color: white;">
    <?php 
   if (isset($_GET['view'])) {
        $sql=mysqli_query($conn,"SELECT year from record_d8 where year='".$_GET['view']."'");
    while ($result=mysqli_fetch_array($sql)) {
       ?>
  
  <h1 style=" font-family:Times New Roman; margin-left: 1100px; "><b>D-8</b></h1>
  <h4 style="font-family:Times New Roman; margin-left: 45px;"><b>For AICTE Diploma Courses</b></h4>
  <h4 style="font-family:Times New Roman; margin-left: 34px;" align="center"><b>MSBTE/ISO Format wef-AY 2017-2018</b></h4>
  <h4 style="font-family:Times New Roman; margin-left: 34px;" align="center"><b>Maharashtra State Board Of Technical Education</b></h4>
  <h3 style="font-family:Times New Roman; margin-left: 34px;" align="center"><b>DETAILS OF EXPERT LECTURE</b></h3> 
  <h4 style="font-family:Times New Roman; margin-left: 45px;"><b>Academic Year:2020-2021</b></h4>
  <h4 style="font-family:Times New Roman; margin-left: 45px;"><b>Program: Computer Technology</b></h4>
  <?php
 if ($result=1) {
 break;
  }
    }
    }
    ?>
  <table width="90%" align="center" border="1" class="table table-borders table-hover" style="margin-top: 30px; width: 93%;border-width: 2px; border-color: #000033;">
  	<tr>
  	  <td style="font-weight: bolder; font-size: 16px;"><b>Sr No. :</b></td>
  	  <td style="font-weight: bolder; font-size: 16px;"><b>Name of Expert & Contact Details:</b></td>
  	  <td style="font-weight: bolder; font-size: 16px;"><b>Topic:</b></td>
  	  <td style="font-weight: bolder; font-size: 16px;"><b>Course Code & CO's NO's:</b></td>
  	  <td style="font-weight: bolder; font-size: 16px;"><b>Semester:</b></td>
  	  <td style="font-weight: bolder; font-size: 16px;"><b>Co-Ordinator Name:</b></td>
  	  <td style="font-weight: bolder; font-size: 16px;"><b>Date:</b></td>
  	  <td style="font-weight: bolder; font-size: 16px;"><b>No. Of Beneficiaries:</b></td>
  	  

  	 </tr>
     <?php
     $no=1; 
   if (isset($_GET['view'])) {
    
        $sql=mysqli_query($conn,"SELECT * from record_d8 where year='".$_GET['view']."' ORDER BY 'asset_num ASC'");
        
                  while ($result=mysqli_fetch_array($sql)) { 
       ?>
  	 
  	   <tr>
  	   	<td><?php echo $no ?></td>
  	   	<td><b><?php echo $result['Person_name'] ?></b> <br> <?php echo $result['Address']?><br> <?php echo $result['Mobile No'] ?></td>
  	   	<td><b><?php echo $result['Topic'] ?></b></td>
  	   	<td><?php echo $result['Course'] ?><br>CO308.1 <br> CO308.2 <br>CO308.6 <br>CO308.7</td>
  	   	<td><?php echo $result['Semester'] ?></td>
  	   	<td><?php echo $result['Co-Ordinator'] ?></td>
  	   	<td><?php echo $result['Date'] ?></td>
  	   	<td><?php echo $result['Beneficiaries'] ?></td>
  	   	
  	       	              
       </tr>
    <?php
    $no++;
    }
  	}
  	?>
  </table>
  <h4 style="font-family:Times New Roman; margin-left: 34px; margin-top: 80px;"><b>(Name & Signature of Academic Coordinator)</b></h4>
  <h4 style="font-family:Times New Roman; margin-left: 880px; margin-top: 60px;"><b>(Name & Signature of HOD)</b></h4>
   <center><button onclick="myfun(0)" id="printbtn" class="btn btn-primary" style="margin-top: 50px;">Print</button></center>
  <script type="text/javascript">
      function myfun(x) {
         if(x==0){
            document.getElementById('printbtn').style.display='none'
        }
          window.print();
           }      
  </script>
 
</body>
</html>