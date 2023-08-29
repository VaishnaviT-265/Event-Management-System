<?php include('constant.php'); ?>
<?php 
if(isset($_GET["delete"])){
	mysql_query("DELETE from `sport event` where ID=".$_GET["delete"]);
	header("location:view_Sport.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Record of Sport Event</title>
  </head>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">

</head>
<body style="background-image: url(clg5.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
 
 <table class="table table-bordered" style="width: 90%; height: 60%; background-color: #f0f0f0; border-color: #800000; margin-top: 60px; border-top-style: hidden; border-radius: 15px;" align="center"  class="table table-hover" >
 	<tr><td colspan="10" style="height: 20px;  background-color: #f0f0f0;"><a href="sport.php" data-toggle="tooltip" data-placement="bottom" title="Back"><input type="Button" style="margin-left: 97%; border-style: hidden;  cursor: pointer; color: black;" name="cancel" value="X"></a></td></tr>

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
     	<td><a href="view_sport.php?delete=<?php echo $result['ID']; ?>" data-toggle="tooltip" data-placement="bottom" title="Delete"><input type="button" style="border-style: hidden" name="delete"> <img src="deletee.png" style="width: 25px; height: 34px"> <a href="sport_edit.php?edit=<?php echo $result['ID']; ?>" data-toggle="tooltip" data-placement="bottom" title="Edit"><input type="button" name="edit"  style="border-style: hidden; margin-left: 20px"><img src="edit.png" style="width: 25px; height: 34px; "></a></td>
     </tr>
 	<?php
    $no++;
 	}
 	?>
 </table>

</body>
</html>