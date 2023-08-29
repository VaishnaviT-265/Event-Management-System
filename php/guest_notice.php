<?php include('constant.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Guest Lecture Notice</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">

</head>
<body>
    <?php 
        if(isset($_GET["notice"])){
 	    $sql=mysqli_query($conn,"SELECT * from `guest lecture` where ID=".$_GET['notice']."");
 	    $result=mysqli_fetch_array($sql);
    ?>
        <table border="1" width="90%" align="center">
        	<tr>
        		<td><p align="center">Sanjivani Rural Education Society's<br><b>SANJIVANI K.B.P. POLYTECHNIC, KOPARGAON<br></b></p>
        	    </td>
        		<td><b>&emsp; &ensp; <?php echo $result["Type"]; ?></b></td>
        	</tr>
        	<tr>
        		<td style="border-top-style: hidden;"></td>
        		<td>&emsp; &ensp; Year:<b> <?php echo $result["Year"]; ?></b></td>
        	</tr>
        	<tr>
        		<td style="border-top-style: hidden;"> &emsp; &ensp;Beneficiories:<b><?php echo $result["Beneficiary"]; ?></b></td>
        		<td>&emsp; &ensp; Sub:<?php echo $result["Subject"]; ?> <br>&emsp; &ensp; Date of <?php echo $result["Type"]; ?> : <b><?php echo $result["Date"]; ?> </b></td>
        	</tr>
        </table>
        <table border="1" width="90%" align="center" style="margin-top: 15px">
        	<tr>
        		<td>
        			<center><br><br><b>Notice</b></center><br>
        			<p style="text-align: right"><b>Date:<?php echo date("d-m-Y"); ?></b></p><br>
        			<p>&emsp; &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; All the students of <?php echo $result["Beneficiary"]; ?> are hereby informed that a <?php echo $result["Type"]; ?>is organized on <?php echo $result["Subject"]; ?> which benefits you for developing your future.
        			 The <?php echo $result["Type"]; ?> is going to be held on <?php echo $result["Date"]; ?> at <?php echo $result["Venue"]; ?> from <?php echo $result["Time"]; ?> onwards. The <?php echo $result["Type"]; ?> will be conducted by <?php echo $result["industry"]; ?>.</p>
        			<p >&emsp; &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;So all the students must be present for the <?php echo $result["Type"]; ?>and take the advantage of latest technology.</p><br><br>
        			<br><br>
        			<p><table width="90%" align="center"><tr><td width="50%" style="text-align: center"><b>Porfolio I/C<br><br>Prof.P.M. Dhanrao</b></td><td style="text-align: center"><b>Programme Co-ordinator<br><br><?php echo $result["coordinator"]; ?></b></td></tr></table></p>
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