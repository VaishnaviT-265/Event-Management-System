<?php include('constant.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
	<title>D15 Report</title>
  </head>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body >
 
    <?php 
   if (isset($_GET['view'])) {
        $sql=mysqli_query($conn,"SELECT year from report where year='".$_GET['view']."'");
    while ($result=mysqli_fetch_array($sql)) {
       ?>
 <table border="1"  width="93%" align="center" style="border-width: 2p; margin-top: 10px;">
    <tr >     
         <td width="200px">SRE,S K.B.P. POLYTECHNIC<br>KOPARGAON</td>
         <td colspan="2" >MAHARASHTRA STATE BOARD OF TECHNICAL EDUCATION</td> 
         <td width="200px"></td></tr>
    <tr >     
         <td width="200px" style="border-top-style: hidden;"></td>
         <td colspan="2" height="75PX;" ><b>STUDENTS PARTICIPATION IN PROJECT/PAPER PRESENTATION/CO-CURRICULAR ACTIVITY<br><p align="center">(<?php echo $result['year'] ?>)</p></b></td> 
         <td width="200px" align="center" style="border-top-style: hidden;">D-15 (<?php echo $result['year'] ?>)</td></tr>
    <tr >     
         <td>ACAD/F/26</td>
         <td width="200px">REV-00 Date-20/6/2015</td>
         <td colspan="2">Date Of Creation- 25/FEB/2020</td> 
    </tr>
 </table>
 <?php
 if ($result=1) {
 break;
  }
    }
    }
    ?>
    <table width="80%" align="center" border="1" style="margin-top: 30px;  width: 93%;border-width: 2px; ">
        <tr>
 		<td style="font-weight: bolder; font-size: 16px;"><b>Sr.No</b></td>
 		<td style="font-weight: bolder; font-size: 16px;"><b>Student Name</b></td>
 		<td style="font-weight: bolder; font-size: 16px;"><b>Branch</b></td>
 		<td style="font-weight: bolder; font-size: 16px;"><b>Class</b></td>
 		<td style="font-weight: bolder; font-size: 16px;"><b>Event Name</b></td>
 		<td style="font-weight: bolder; font-size: 16px;"><b>Result</b></td>
 		<td style="font-weight: bolder; font-size: 16px;"><b>Venue</b></td>
 		<td style="font-weight: bolder; font-size: 16px;"><b>Date</b></td>
 	</tr>
     <?php
     $no=1; 
   if (isset($_GET['view'])) {

        $sql=mysqli_query($conn,"SELECT * from report where year='".$_GET['view']."' ORDER BY 'asset_num ASC'");
        
                  while ($result=mysqli_fetch_array($sql)) { 
       ?>
     <tr class="big-info">
     	<td><?php echo $no ?></td>
     	<td><?php echo $result['Std_name'] ?></td>
     	<td><?php echo $result['Branch'] ?></td>
     	<td><?php echo $result['Class'] ?></td>
     	<td><?php echo $result['Event'] ?></td>
     	<td><?php echo $result['Winner'] ?></td>
     	<td><?php echo $result['Venue'] ?></td>
     	<td><?php echo $result['Date'] ?></td>
     	
     </tr>

 <?php
 $no++;
}
}
?>	
 </table>
 
<h4 style="font-family:Times New Roman; margin-left: 34px; margin-top: 80px;"><b>Name & Signature of HOD</b></h4>
 <h4 style="font-family:Times New Roman; margin-left: 880px; margin-top:5px;"><b>Name & Signature of PRINCIPAL</b></h4>
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