<?php include('constant.php'); ?>
<?php 
if(isset($_GET["delete"])){
	mysqli_query($conn,"DELETE from `guest lecture` where ID=".$_GET["delete"]);
	header("location:view_guest.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Guest Lecture Record</title>
  </head>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">

</head>
<body style="background-image: url(clg5.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
 
 <table class="table table-bordered" style="width: 96%; height: 60%; background-color: #f0f0f0; border-color: black; margin-top: 60px;border-width: 4px; border-radius: 15px;" align="center"  class="table table-hover" >
 	<tr><td colspan="13" style="height: 20px;  background-color: #f0f0f0;"><a href="Home_page.php" data-toggle="tooltip" data-placement="bottom" title="Back"><input type="Button" style="margin-left: 97%; border-style: hidden;  cursor: pointer; color: black;" name="cancel" value="X"></a></td></tr>

 	<tr style="background-color: #8ee6d4">
 		<td><b>Sr.No</b></td>
 		<td><b>Full Name</b></td>
        <td width="120px"><b>Industry Name</b></td>
 		<td><b>Type</b></td>
 		<td width="120px"><b>Date</b></td>
 		<td><b>Subject</b></td>
 		<td><b>Venue</b></td>
 		<td><b>Time</b></td>
        <td><b>Beneficiary</b></td>
        <td width="120px"><b>Program Co-Ordinator</b></td>
        <td><b>Year</b></td>
 		<td width="150px"><b>Option</b></td>
        <td width="160px"><b>Action</b></td>
 	</tr>
 	<?php
    $no=1; 
 	$sql=mysqli_query($conn,"SELECT * FROM `guest lecture` ORDER BY 'Date','Year','asset_num ASC'");
 	while ($result=mysqli_fetch_array($sql)) {
     ?>
     <tr class="bg-info">
     	<td><?php echo $no ?></td>
     	<td><?php echo $result['Fname'] ?></td>
        <td><?php echo $result['industry'] ?></td>
     	<td><?php echo $result['Type'] ?></td>
     	<td><?php echo $result['Date'] ?></td>
     	<td><?php echo $result['Subject'] ?></td>
     	<td><?php echo $result['Venue'] ?></td>
     	<td><?php echo $result['Time'] ?></td>
        <td><?php echo $result['Beneficiary'] ?></td>
        <td><?php echo $result['coordinator'] ?></td>
        <td><?php echo $result['Year'] ?></td>
     	<td><a href="view_guest.php?delete=<?php echo $result['ID']; ?>">
        <input type="button" name="delete" style="border-style: hidden" data-toggle="tooltip" data-placement="bottom" title="Delete"><img src="delete.png" style="width: 25px; height: 34px">
        <a href="guest_edit.php?edit=<?php echo $result['ID']; ?>" data-toggle="tooltip" data-placement="bottom" title="Edit"><button type="submit" name="edit" style="border-style: hidden;"><img src="edit.png" style="width: 25px; height: 34px; "></button></a></td>
        <td><a href="guest_letter.php?letter=<?php echo $result['ID']; ?>"><H6 name="letter">Request Letter</H6></a><a href="guest_notice.php?notice=<?php echo $result['ID']; ?>"><h6 name="notice">Notice</h6></a><a href="guest_certificate.php?certificate=<?php echo $result['ID']; ?>"><h6 name="certificate">Certificate</h6></a></td></tr>
 	<?php
    $no++;
 	}
 	?>
 </table>

</body>
</html>