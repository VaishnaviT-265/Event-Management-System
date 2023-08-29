<?php include('constant.php'); ?>
<?php
if (isset($_POST['submit'])) {
   $dob=$_POST['Date'];
     $dob=strtotime($dob);
     $dob=date('d-m-Y',$dob);
  $name=$_POST['name'];
  $location="upload/";
  $file1=$_FILES['img1']['name'];
  $file_tmp1=$_FILES['img1']['tmp_name'];
  $file2=$_FILES['img2']['name'];
  $file_tmp2=$_FILES['img2']['tmp_name'];
  $file3=$_FILES['img3']['name'];
  $file_tmp3=$_FILES['img3']['tmp_name'];
  $file4=$_FILES['img4']['name'];
  $file_tmp4=$_FILES['img4']['tmp_name'];
  $file5=$_FILES['img5']['name'];
  $file_tmp5=$_FILES['img5']['tmp_name'];
  $file6=$_FILES['img6']['name'];
  $file_tmp6=$_FILES['img6']['tmp_name'];
  $file7=$_FILES['img7']['name'];
  $file_tmp7=$_FILES['img7']['tmp_name'];
  $file8=$_FILES['img8']['name'];
  $file_tmp8=$_FILES['img8']['tmp_name'];
  $file9=$_FILES['img9']['name'];
  $file_tmp9=$_FILES['img9']['tmp_name'];
  $file10=$_FILES['img10']['name'];
  $file_tmp10=$_FILES['img10']['tmp_name'];
    $data[0]=$file1;
    $data[1]=$file2;
    $data[2]=$file3;
    $data[3]=$file4;
    $data[4]=$file5;
    $data[5]=$file6;
    $data[6]=$file7;
    $data[7]=$file8;
    $data[8]=$file9;
    $data[9]=$file10;
    $images=implode(' ', $data);
    $query="insert into `gallary`(`event`,`Date`,`image`) values('$name','$dob','$images')";
     echo "insert into `gallary`(`event`,`Date`,`image`) values('$name','$dob','$images')";
    $fire=mysqli_query($conn,$query);
    if ($fire) {
      move_uploaded_file($file_tmp1, $location.$file1);
      move_uploaded_file($file_tmp2, $location.$file2);
      move_uploaded_file($file_tmp3, $location.$file3);
      move_uploaded_file($file_tmp4, $location.$file4);
      move_uploaded_file($file_tmp5, $location.$file5);
      move_uploaded_file($file_tmp6, $location.$file6);
      move_uploaded_file($file_tmp7, $location.$file7);
      move_uploaded_file($file_tmp8, $location.$file8);
      move_uploaded_file($file_tmp9, $location.$file9);
      move_uploaded_file($file_tmp10, $location.$file10);
      header("location:config.php");
    }
    else
    {
      echo "<style>alert('failed')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="len">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Gallery</title>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body style="background-image: url(clg5.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
 <form action="" method="post" enctype="multipart/form-data">
 <table style="width: 30%; height: 60%; background-color: #f0f0f0; border-color: #800000; margin-top: 60px; border-top-style: hidden; border-radius: 15px;" align="center"  class="table table-hover" >
        <tr><td colspan="2"><a href="Home_page.php" data-toggle="tooltip" data-placement="bottom" title="Back"><input type="Button" style="margin-left: 400px; border-style: hidden; font-weight: 600;cursor: pointer; color: black;" name="cancel" value="X"></a><h2 style="font-family: montserrat;"><b><center>Gallery</center></b></h2></td></tr>
        <tr><td style="color: #adadad;">Event Name:</td><td><input type="text" style="border-color: white; border-top-style:hidden" name="name" class="form-control" required=""></td></tr>
        <tr><td style="color: #adadad; ">Date:</td><td><input type="Date" style="border-color: white; border-top-style:hidden; " name="Date" class="form-control" required=""></td></tr>
      <tr><td style="color: #adadad;">Select Images:</td>
          <td><input type="file" name="img1" class="form-control"><br>
              <input type="file" name="img2" class="form-control"><br>
              <input type="file" name="img3" class="form-control"><br>
              <input type="file" name="img4" class="form-control"><br>
              <input type="file" name="img5" class="form-control"><br>
              <input type="file" name="img6" class="form-control"><br>
              <input type="file" name="img7" class="form-control"><br>
              <input type="file" name="img8" class="form-control"><br>
              <input type="file" name="img9" class="form-control"><br>
              <input type="file" name="img10" class="form-control">
          </td></tr>
          <tr><td colspan="2" align="center"><input type="submit" style="width: 65%; height: 50px; border: 1px solid; background: blue; border-radius: 25px; font-size: 18px; color: #e9f4fb; font-weight: 700; cursor: pointer; outline: none; border-color: #2691d9; transition: .5s;" value="Upload" name="submit" class="btn btn-primary"></td></tr>
</table>
</form>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"></script></body>
</html>
