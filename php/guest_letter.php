<?php include('constant.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Request Letter</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
<?php 
 if(isset($_GET["letter"])){
 	$sql=mysqli_query($conn,"SELECT * from `guest lecture` where ID=".$_GET['letter']."");
 	$result=mysqli_fetch_array($sql);
 ?>
<table width="90%" align="center">
  <tr><td align="center">Sanjivani Rular Education Society's<br>
    <b>Sanjivani K. B. P. Polytechnic,Kopargaon</b><br>
    Departemnt of Computer Technology<br>
    <p style="text-align: right; margin-right: 10px">Date:<?php echo date("d-m-Y"); ?>
      </p></td></tr>
  <tr><td >To,<br><b><?php echo $result["Fname"]; ?>,<br><?php echo $result["industry"]; ?></b>
  </td></tr>
  <tr><td ><p align="center"><br>Sub:<b> Request for <?php echo $result["Type"]; ?> on <?php echo $result["Subject"]; ?></b></p></td></tr>
   
    <tr><td><p>Respected sir,<br></p>
      <p >&emsp; &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;With reference to above mentioned subject we would like to invite you for the "<?php echo $result["Type"]; ?> on <?php echo $result["Subject"]; ?>" for <?php echo $result["Beneficiary"]; ?> Computer Technology and Information Technology Students of Sanjivani K. B. P. Polytechnic Kopargaon.</p>
        <p >&emsp; &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;So, we kindly request you to allow us to have your valuable time in the form of <?php echo $result["Type"]; ?>. We would be glad, if you kindly permit us.<br>
        <P style="margin-left: 70px">Thanking you.</P></td></tr>
        <tr><td><p style="text-align: right; margin-right: 50px"><b><?php echo $result["coordinator"]; ?></b></p>
        	<p style="text-align: right; margin-right: 94px">HOD</p>
        	<p style="text-align: right; margin-left: ">Department of Computer Technology</p></td></tr>
 </table> 

 <?php
}
?>
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