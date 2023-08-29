<?php include('constant.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  </head>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">

</head>
<body style="background-image: url(clg5.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">

       ?>
 
 <table class="table table-bordered" style="width: 90%; height: 60%; background-color: #f0f0f0; border-color: #800000; margin-top: 60px; border-top-style: hidden; border-radius: 15px;" align="center"  class="table table-hover" >
    <tr><td colspan="8"><a href="viewreport_D8.php"><input type="Button" style="margin-left: 1200px;border-style: hidden; font-weight: 600; cursor: pointer; color: black;" name="cancel" value="X"></a></td>
     </tr>

 	<tr class="bg-primary">
 		<td>Sr.No</td>
 		<td>Student Name</td>
 		<td>Branch</td>
 		<td>Class</td>
 		<td>Event</td>
 		<td>Venue</td>
 		<td>Date</td>
 		<td width="170px">Action</td>
 	</tr>
 	<?php
    $no=1; 
 	$sql=mysql_query("SELECT * FROM `sport event` ORDER BY 'asset_num ASC'");
 	while ($result=mysql_fetch_array($sql)) {
     ?>
     <tr class="big-info">
     	<td><?php echo $no ?></td>
     	<td><?php echo $result['Std_name'] ?></td>
     	<td><?php echo $result['Branch'] ?></td>
     	<td><?php echo $result['Class'] ?></td>
     	<td><?php echo $result['Event'] ?></td>
     	<td><?php echo $result['Venue'] ?></td>
     	<td><?php echo $result['Date'] ?></td>
     	<td style="font-size: 14px;"><b><a href="sport_notice.php?sport_notice=<?php echo $result['ID']; ?>" name="sport_notice">Notice</a><b><br><br><b><a href="sport_certificate.php">Certificate</a><b></td>
     </tr>
 	<?php
    $no++;
 	}
 	?>
 </table>

</body>
</html>