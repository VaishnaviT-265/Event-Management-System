<?php include('constant.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>View Notice</title>
  </head>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">

</head>
<body style="background-image: url(clg5.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
 
 <table class="table table-bordered table-hover" border="1" style="width: 96%; height: 60%; background-color: #f0f0f0; border-color:black; margin-top: 60px; border-width: 4px;" align="center"
    ><tr class="bg-info"><td colspan="8"><a href="Home_page.php"><input type="Button" style="margin-left: 1200px;border-style: hidden; font-weight: 600; cursor: pointer; color: black;" name="cancel" value="X"></a></td>
     </tr>

 	<tr style="background-color: #8ee6d4;border-top: hidden;" >
 		<td style="font-size: 17px;"><b>Sr.No</b></td>
 		<td style="font-size: 17px;"><b>Event</b></td>
 		<td style="font-size: 17px;"><b>Venue</b></td>
 		<td style="font-size: 17px;"><b>Date</b></td>
 		<td width="170px" style="font-size: 17px;"><b>Action</b></td>
 	</tr>
 	<?php
    $no=1; 
 	$sql=mysqli_query($conn,"SELECT * FROM `sport event` ORDER BY 'asset_num ASC'");
 	while ($result=mysqli_fetch_array($sql)) {
     ?>
     <tr class="bg-info" style="height: 15px;">
     	<td><?php echo $no ?></td>
     	<td><?php echo $result['Event'] ?></td>
     	<td><?php echo $result['Venue'] ?></td>
     	<td><?php echo $result['Date'] ?></td>

     	<td style="font-size: 14px;"><b><a href="generate_notice.php?sport_notice=<?php echo $result['ID']; ?>" name="sport_notice">Notice</a></td>
     </tr>
 	<?php
    $no++;
 	}
 	?>
 </table>
  
</body>
</html>