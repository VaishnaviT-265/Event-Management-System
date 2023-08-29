<?php include('constant.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Image Report</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<style type="text/css">
		img{
			margin-top: 30px;
			margin-left: 20px;
		}
	</style>
</head>
<body>	
	<table width="80%" align="center">
		<?php
   if (isset($_GET["submit"])) {}
    $sql= "SELECT `event`,`Date` FROM `gallary` where `ID`='".$_GET['submit']."'";
    $result= mysqli_query($conn,$sql);
    if (mysqli_num_rows($result)>0){
    while($res=mysqli_fetch_array($result)){
   	
 ?>

		<tr>
			<td><img src='logo.png' width="100px" height="100px"></td>
			<center><td>Sanjivani Rural Education Society's<br>
			    <b>K.B.P. POLYTECHNIC, KOPARGAON</b><br>
			    <i><u>Department Of Computer Technology</u></i></td></center>
		</tr>
		<tr><td colspan="2"><b>Name of Event:</b> <?php echo $res['event']; ?><br>
		                    <b>Date:</b> <?php echo $res['Date']; ?></td></tr>
		<tr><td></td><center><td><b><h3 ><?php echo $res['event'] ?> Photographs</h3></b></td></center></tr>
		<?php

}
}?>
	<tr><td colspan="2" style="margin-left: 50px">
<?php
   if (isset($_GET["submit"])) {
    $query="SELECT `image` FROM `gallary` where `ID`='".$_GET['submit']."'";
   $fire=mysqli_query($conn,$query);
$data=mysqli_fetch_array($fire);
$res=$data['image'];
$res=explode(" ",$res);
$filtered=array_filter($res);
$count=count($filtered);
for($i=0;$i<$count;++$i)
{	
	?>
	<?php
	echo "<img src='upload/$filtered[$i]' width=250 height=300>";
	?>
<?php
}
}
?></td></tr>
</table>

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