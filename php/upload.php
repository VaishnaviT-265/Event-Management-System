<?php include('constant.php'); ?>
<?php 
if (isset($_POST['submit']))
    $img=''; 
	foreach($_FILES['myimages']['tmp_name'] as $key => $image) { 
		$imageName = $_FILES['myimages']['name'][$key];
		$imageTmpName = $_FILES['myimages']['tmp_name'][$key];
        $img .=$imageName.',';
		$directory = 'upload/';

		$result = move_uploaded_file($imageTmpName, $directory.$imageName);
	
	if ($result) {
	$sql=mysql_query("INSERT into gallery(`ID`,`event`,`myimages`) values('".$_POST["event"]."','".$img."')");
	 if ($sql) {
	 	echo "Successful";
	 }
	}	
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Gallery</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body style="background-image: url(clg5.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
	<form  method="post" encrypt="multipart/form-data">
		<input type="text" name="event">
		<input type="file" name="myimages[]" multiple /><br>
		<input type="submit" name="submit" value="upload">
	</form>

</body>
</html>