<?php include('constant.php'); ?>
<?php 
if(isset($_GET["delete"])){
	mysqli_query($conn,"DELETE from `sport event` where ID=".$_GET["delete"]);
	echo "<script>alert('Data Deleted Successfully....');
    window.location='view_notice.php'</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Notice</title>
  </head>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">

</head>
<body style="background-image: url(clg5.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
 
 <table class="table table-bordered table-hover" border="1" style="width: 80%; height: 60%; background-color: #f0f0f0; border-color:black; margin-top: 60px; border-width: 4px;" align="center" >
 	<tr style="background-color: #8ee6d4;" ><td colspan="10" style="height: 20px;  background-color: #f0f0f0;"><a href="Home_page.php" data-toggle="tooltip" data-placement="bottom" title="Back"><input type="Button" style="margin-left: 97%; border-style: hidden;  cursor: pointer; color: black;" name="cancel" value="X"></a></td></tr>

 	<tr style="background-color: #8ee6d4;">
 		<td><b>Sr.No</b></td>
 		<td><b>Event</b></td>
 		<td><b>Venue</b></td>
 		<td><b>Date</b></td>
 		<td width="170px"><b>Action</b></td>
 	</tr>
 	<?php
    $no=1; 
 	$sql=mysqli_query($conn,"SELECT * FROM `sport event` ORDER BY 'asset_num ASC'");
 	while ($result=mysqli_fetch_array($sql)) {
     ?>
     <tr class="bg-info">
     	<td><?php echo $no ?></td>
     	<td><?php echo $result['Event'] ?></td>
     	<td><?php echo $result['Venue'] ?></td>
     	<td><?php echo $result['Date'] ?></td>
     	<td><a href="view_notice.php?delete=<?php echo $result['ID']; ?>"data-toggle="tooltip" data-placement="bottom" title="Delete"><button type="submit"  name="delete" value="Delete" style="border-style: hidden;"><img src="delete.png" style="width: 25px; height: 34px;"></button><a href="notice_edit.php?edit=<?php echo $result['ID']; ?>"  data-toggle="tooltip" data-placement="bottom" title="Edit"><button type="submit"  name="edit" value="Edit" style="border-style: hidden; margin-left: 20px;"><img src="edit.png" style="width: 25px;height: 34px;"></button></a></td>
     </tr>
 	<?php
    $no++;
 	}
 	?>
 </table>

</body>
</html>