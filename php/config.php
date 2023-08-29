<?php include('constant.php'); ?>
<?php 
if(!$conn){
	echo "Connection failed";
}
?>

<?php 
if(isset($_GET["delete"])){
	mysqli_query($conn,"DELETE from `gallary` where ID=".$_GET["delete"]);
	header("location:config.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>View Images</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body style="background-image: url(clg5.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
     <table class="table table-success table-hover" align="center" border="1" style="width: 80%; height: 60%;  border-color: #000033; margin-top: 60px; border-width: 4px;">
 	<tr><td colspan="5" style="height: 20px;  background-color: #f0f0f0;"><a href="Home_page.php" data-toggle="tooltip" data-placement="bottom" title="Back"><input type="Button" style="border-style: hidden; margin-left: 98%; cursor: pointer; color: black;" name="cancel" value="X"></a></td></tr>
     <tr style="background-color: #8ee6d4"><td><b>Sr.No.</b></td>
     <td><b>Event Name</b></td>
     <td><b>Date</b></td>
     <td><b>Action</b></td>
     <td><b>Image</b></td></tr>
	<?php
	$no=1;
	$sql="SELECT `ID`,`event`,`Date` FROM gallary  ORDER BY 'asset_num ASC'";
	$rest=mysqli_query($conn,$sql);
	if (mysqli_num_rows($rest)>0){
	while ($row=mysqli_fetch_array($rest)) { 
	?><tr class="bg-info">
		  <td><?php echo $no++; ?></td>
          <td><?php echo $row['event']; ?></td>
          <td><?php echo $row['Date']; ?></td>

           <td><a href="config.php?delete=<?php echo $row['ID']; ?>">
           <input type="button" name="delete" style="border-style: hidden" data-toggle="tooltip" data-placement="bottom" title="Delete"><img src="delete.png" style="width: 25px; height: 34px">
           </a></td>

          <td><a href="viewImages.php?submit=<?php echo $row['ID']; ?>"><h5 name="submit"><u>View Report</u></h5></a></td></tr>
	<?php
  } 
  }
     ?>

	</table>
</body>
</html>