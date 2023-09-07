
<?php 
require('../config/autoload.php'); 
$conn = new mysqli("localhost","root", "", "vote"); ?>
<?php include("ahead.php"); ?>

<?php

	//$a= $_SESSION['c_username'];

$dao=new DataAccess();


if(ISSET($_SESSION['clg_email'])){
$clg_email=$_SESSION['clg_email'];


}
else{
	echo "<script> location.href='CLGEDIT.php'</script>";
}

$sql = "SELECT   clg_name,clg_address,clg_pin,clg_tele,clg_email,clg_site FROM COLLEGE WHERE clg_email='$clg_email'";

$result = $conn->query($sql);
if($result->num_rows==1)
{
$row = $result->fetch_assoc();

$c_name = $row['c_name'];
$clg_name=$row['clg_name'];
        $clg_address=$row['clg_address'];
         $clg_pin=$row['clg_pin'];
		    $clg_tele=$row['clg_tele'];
			  $clg_email=$row['clg_email'];
        $clg_site=$row['clg_site'];




}

if(isset($_POST["update"]))
{

$clg_name=$_POST['clg_name'];
        $clg_address=$_POST['clg_address'];
         $clg_pin=$_POST['clg_pin'];
		    $clg_tele=$_POST['clg_tele'];
			  $clg_email=$_POST['clg_email'];
        $clg_site=$_POST['clg_site'];




 

$sql2 ="UPDATE COLLEGE SET clg_name='$clg_name' ,clg_address='$clg_address',clg_pin='$clg_pin',clg_tele='$clg_tele' ,clg_email='$clg_email' ,clg_site='$clg_site'  WHERE clg_email='$clg_email'";
if ($conn->query($sql2) === TRUE) {
    echo "<script> alert('Updated Successfully');</script> ";
echo"<script> location.replace('profile1.php'); </script>";

} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}
}
?>
<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
    <head>

</head>

<body>
<div class="box">


<div class="container">
<div id="news" class="w3ls-section">
<div class="container">
<h2 class="main-title" class="text-center p-5"></h2><h3><center>COLLEGE UNION ELECTION 2020-2021</center></h3><br>
<hr><hr>
<form action="" method="POST">




                    <div class="col-md-7"><center>



<h2>ABOUT</h2>
<div class="row -md-1">
                    <div class="col-md-9">
<label for=""> NAME :</label>
<input type="text" name="clg_name" id="clg_name" class="form-control" value="<?php echo $clg_name ?>" ></div></div></div><br>
<div class="row form-group">
                    <div class="col-md-9">
<label for="">PINCODE:</label>
<input type="text" name="clg_pin" id="clg_pin" class="form-control" value="<?php echo $clg_pin ?>" ></div></div></div>

<div class="row form-group">
                    <div class="col-md-9">
<label for="">IMAGE:</label>
<input type="image" name="clg_image" id="clg_image" class="form-control" value="<?php echo $clg_image ?>" disabled>
</div></div>
<div class="row -md-1">
                    <div class="col-md-9">
<label for="">EMAIL :</label>
<input type="text" name="clg_email" id="clg_email" class="form-control" value="<?php echo $clg_email ?>" >
</div></div>


<div class="row -md-1">
                    <div class="col-md-9">
<label for="">ADDRESS:</label>
<input type="text" name="clg_address" id="clg_address" class="form-control" value="<?php echo $clg_address ?>" >
</div></div>

<div class="row -md-1">
                    <div class="col-md-9">
<label for="">TELEPHONE:</label>
<input type="text" name="clg_tele" id="clg_tele" class="form-control" value="<?php echo $clg_tele ?>" >
</div></div>
<div class="row -md-1">
                    <div class="col-md-9">
<label for="">WEBSITE:</label>

<input type="text" name="clg_site" id="clg_site" class="form-control" value="<?php echo $clg_site ?>" >
</div></div>


 
 </div><br><br><hr>

<div class="col-md-6">
<div class="form-group">

<input type="submit" name="update" value="FINAL  SUBMIT " class="btn btn-success btn-block" class="text-center p-5">
</div>
</div></div>


</form></div></div></div></div></div></div></body></html>

 
</body>
</html>
<hr><br>
<?php include("FOOT.php"); ?>