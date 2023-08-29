<?php include('constant.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">

</head>
<body>
    <?php 
        if(isset($_GET["sport_notice"])){
      $sql=mysqli_query($conn,"SELECT * from `sport event` where ID=".$_GET['sport_notice']."");
      $result=mysqli_fetch_array($sql);
    ?>
    <table border="1" width="90%" align="center" style="margin-top: 25px;">
      <tr>
        <td><p align="center">Sanjivani Rural Education Society's<br></p></td>
        <td><p align="center"><b>EVENT<br></b></p></td>
        <td><p align="center"><b>Year: <?php echo $result["year"] ?><br></b></p></td>
      </tr>
      <tr>
        <td style="border-top-style: hidden"><p align="center" ><br><b>SANJIVANI K.B.P. POLYTECHNIC, KOPARGAON <br></b></p><br></td>
        <td><p align="center"><br><b>NO: 1 </b></p><br></td>
        <td><p align="center"><br>Department: <b>Computer Technology</b></p><br></td>
      </tr>
      <tr>
        <td><p align="center">Beneficiaries: <b><?php echo $result["Beneficiaries"] ?></b></p></td>
        <td><p align="center">Subject: <b><?php echo $result["Event"] ?></b></p></td>
        <td><p align="center">Date Of Event: <b><?php echo $result["Date"] ?></b></p></td>
              </tr>
    </table>
    <table border="1" width="90%" align="center" style="margin-top: 25px">
      <tr>
        <td>
          <center><b><br><p style="font-size: 23px;">Notice</p></b></center><br>
          <p style="text-align: right; font-size: 17px; "><b>Date: <?php echo date("d-m-Y")?> </b></p><br>
          <p style="font-family:Times New Roman;font-size: 16px;";>&emsp; &ensp;&ensp;&emsp; &ensp;&ensp; &emsp; &ensp;&ensp; &ensp; All the students of <b><?php echo $result["Beneficiaries"] ?></b> are hereby informed that a Sport Event is organized on <b><?php echo $result["Event"] ?></b> which benefits you for developing your sports skills.The event is going to be  held on <b><?php echo $result["Date"] ?></b> at <b><?php echo $result["Venue"] ?></b> from <b> <?php echo $result["time"] ?></b>.The event will conducted by Sanjivani K.B.P Polytechnic,Kopargaon.<br>&ensp;&emsp; &ensp;&ensp; &emsp; &ensp;&ensp; &ensp; So all the students must be present for the <b><?php echo $result["Event"] ?></b> and take advantage of the event and Grow your skills.</p><br>
          <br><br>
          <p><table width="90%" align="center"><tr><td width="50%" style="text-align: center"><b>Porfolio I/C<br><br>
            <br><br>Prof.P.M. Dhanrao</b></td><td style="text-align: center"><b>Programme Co-ordinator<br><br><br><br><?php echo $result["coordinator"]; ?></b></td></tr></table></p>
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