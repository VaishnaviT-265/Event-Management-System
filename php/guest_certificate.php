<?php include('constant.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Certificate</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
    <?php 
        if(isset($_GET["certificate"])){
 	    $sql=mysqli_query($conn,"SELECT * from `guest lecture` where ID=".$_GET['certificate']."");
 	    $result=mysqli_fetch_array($sql);
    ?>
        <table width="90%" align="center" style="margin-top: 10px">
        	<tr>
        		<td>
        			RefNo: SRES/SKBP/CM/<?php echo $result["Type"]; ?>/<?php echo $result["Year"]; ?>/
        		</td>
        		<td style="text-align: center">
        			Date:<?php echo date("d-m-Y"); ?>
        		</td>
        	</tr>
        	<tr>
        		<td colspan="2">
        			<br><center><h4><b><u>CERTIFICATE</u></b></h4></center>
        			<p>&emsp; &ensp;&ensp; This is to certify that <b><?php echo $result["Fname"]; ?></b>, <b>Department Of Computer Engineering,</b> Kopargaon, has conducted a <?php echo $result["Type"]; ?> on "<?php echo $result["Subject"]; ?>"</b> to <?php echo $result["Beneficiary"]; ?> Computer Technology and Information Technology students on <?php echo $result["Date"]; ?>.</p>
        			<p>We are very much thankful to you for visiting our institute and sharing your valuable knowledge with our students. All the students apprecited and got benefites from your views on the subject.</p>
        			<p>It was really a splendid session which exposed students to the field of <?php echo $result["Subject"] ; ?>.</p><br><br><br><br>
        			<p>
        				<table width="90%" align="center">
        					<tr><td ><h5 style="text-align: right; margin-right: 150px">Hod</h5></td></tr>
        					<tr><td><h5 style="text-align: right; margin-right: 60px">  Department of Computer technology</h5></td></tr>
        				</table>
        			</p>
        		</td>
        	</tr>
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