<?php include('constant.php'); ?>
<?php 
if(isset($_GET["delete"])){
	mysqli_query($conn,"DELETE from Report where ID=".$_GET["delete"]);
	echo "<script>alert('Data Deleted Successfully....');
    window.location='report1.php'</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Record</title>
  </head>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">

</head>
<body style="background-image: url(clg5.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
 
 <table class="table table-bordered" style="width: 90%; height: 60%; background-color: #f0f0f0; border-color: black; margin-top: 60px; border-width: 4px; border-radius: 15px;" align="center"  class="table table-hover" >
 	<tr><td colspan="10" style="height: 20px;  background-color: #f0f0f0;"><a href="Home_page.php" data-toggle="tooltip" data-placement="bottom" title="Back"><input type="Button" style="margin-left: 97%; border-style: hidden;  cursor: pointer; color: black;" name="cancel" value="X"></a></td></tr>

 	<tr style="background-color: #8ee6d4">
 		<td><b>Sr.No</b></td>
 		<td><b>Student Name</b></td>
 		<td><b>Branch</b></td>
 		<td><b>Class</td>
 		<td><b>Event Name</b></td>
 		<td><b>Result</b></td>
 		<td><b>Venue</b></td>
 		<td><b>Date</b></td>
        <td><b>Academic Year</b></td>
 		<td width="150px"><b>Action</b></td>
 	</tr>
 	<?php
    $no=1; 
 	$sql=mysqli_query($conn,"SELECT * FROM Report ORDER BY 'asset_num ASC'");
 	while ($result=mysqli_fetch_array($sql)) {
     ?>
     <tr class="bg-info">
     	<td><?php echo $no ?></td>
     	<td><?php echo $result['Std_name'] ?></td>
     	<td><?php echo $result['Branch'] ?></td>
     	<td><?php echo $result['Class'] ?></td>
     	<td><?php echo $result['Event'] ?></td>
     	<td><?php echo $result['Winner'] ?></td>
     	<td><?php echo $result['Venue'] ?></td>
     	<td><?php echo $result['Date'] ?></td>
        <td><?php echo $result['year'] ?></td>
     	<td><a href="report1.php?delete=<?php echo $result['ID']; ?>" data-toggle="tooltip" data-placement="bottom" title="Delete"><input type="button" name="delete" style="border-style: hidden"> <img src="delete.png" style="width: 25px; height: 34px">  <a href="edit.php?edit=<?php echo $result['ID']; ?>" data-toggle="tooltip" data-placement="bottom" title="Edit"><input type="button" name="edit" style="border-style: hidden; margin-left: 20px"><img src="edit.png" style="width: 25px; height: 34px; "></a></td>
     </tr>
 	<?php
    $no++;
 	}
 	?>
 </table>

</body>
</html>