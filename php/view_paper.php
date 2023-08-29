<?php include('constant.php'); ?>
<?php 
if(isset($_GET["delete"])){
	mysql_query("DELETE from `paper presentation` where ID=".$_GET["delete"]);
	header("location:view_paper.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  </head>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">

</head>
<body style="background-image: url(clg5.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
 
 <table class="table table-bordered" style="width: 90%; height: 60%; background-color: #f0f0f0; border-color: #800000; margin-top: 60px; border-top-style: hidden; border-radius: 15px;" align="center"  class="table table-hover" >
 	<tr><td colspan="10" style="height: 20px;  background-color: #f0f0f0;"><a href="paper.php"><input type="Button" style="margin-left: 97%; border-style: hidden;  cursor: pointer; color: black;" name="cancel" value="X"></a></td></tr>

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
 	$sql=mysql_query("SELECT * FROM `paper presentation` ORDER BY 'asset_num ASC'");
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
     	<td><a href="view_paper.php?delete=<?php echo $result['ID']; ?>"><input type="submit" class="btn btn-danger" name="delete" value="Delete">  <a href="paper_edit.php?edit=<?php echo $result['ID']; ?>"><input type="submit" class="btn btn-success" name="edit" value="Edit"></a></td>
     </tr>
 	<?php
    $no++;
 	}
 	?>
 </table>

</body>
</html>