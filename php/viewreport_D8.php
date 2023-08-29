<?php include('constant.php'); ?>
<?php 
if (isset($_GET["delete"])) {
mysqli_query($conn,"DELETE from record_d8 where ID=".$_GET["delete"]);
  echo "<script>alert('Data Deleted Successfully....');
    window.location='viewreport_D8.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  	<meta charset="utf-8">
  	<title>View Report D8</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  	
  </head>
  <body style="background-image: url(clg5.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
  </body>
  <table width="80%" align="center" border="1" class="table table-borders table-hover" style="margin-top: 30px; width: 80%;border-width: 4px; border-color: #000033;">
    <tr><td colspan="10" style="height: 20px;  background-color: #f0f0f0;"><a href="Home_page.php" data-toggle="tooltip" data-placement="bottom" title="Back"><input type="Button" style="margin-left: 97%; border-style: hidden;  cursor: pointer; color: black;" name="cancel" value="X"></a></td></tr>
  	<tr style="background-color: #8ee6d4;">
  	  <td><b>SR NO. :</b></td>
  	  <td><b>Name of Expert & Contact Details:</b></td>
  	  <td><b>Topic:</b></td>
  	  <td><b>Course Code & CO's NO's:</b></td>
  	  <td><b>Semester:</b></td>
  	  <td><b>Co-Ordinator Name:</b></td>
  	  <td><b>Date:</b></td>
  	  <td><b>No. Of Beneficiaries:</b></td>

  	  <td width="180px"><b>Action:</b></td></td>

  	 </tr>
  	 <?php
       $no=1;
  	   $sql=mysqli_query($conn,"SELECT * FROM record_d8 ORDER BY 'asset_num ASC'");
  	   while($result=mysqli_fetch_array($sql)){
  	   ?>
  	   <tr class="bg-info">
  	   	<td><?php echo $no ?></td>
  	   	<td><b><?php echo $result['Person_name'] ?></b> <br> <?php echo $result['Address']?><br> <?php echo $result['Mobile No'] ?></td>
  	   	<td><?php echo $result['Topic'] ?></td>
  	   	<td><?php echo $result['Course'] ?></td>
  	   	<td><?php echo $result['Semester'] ?></td>
  	   	<td><?php echo $result['Co-Ordinator'] ?></td>
  	   	<td style="width:110px;"><?php echo $result['Date'] ?></td>
  	   	<td><?php echo $result['Beneficiaries'] ?></td>
  	   	<td ><a href="viewreport_D8.php?delete=<?php echo $result['ID']; ?>" data-toggle="tooltip" data-placement="bottom" title="Delete"><button type="submit" name="delete" value="Delete" style="margin-right: 18px; margin-left: 10px; border-style: hidden;"><img src="delete.png" style="width: 25px; height: 34px;"></button><a href="editd8.php?edit=<?php echo $result['ID']; ?>" data-toggle="tooltip" data-placement="bottom" title="Edit"><button type="submit" name="edit" value="Edit" style="border-style: hidden; margin-left: 20px;"><img src="edit.png" style="width: 25px;height: 34px;"></button></a></td>
  	       	              
       </tr>
    <?php
     $no++;
    } 
  	
  	?>
  </table>
</html>