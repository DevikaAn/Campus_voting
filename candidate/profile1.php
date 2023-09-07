
<?php 
require('../config/autoload.php'); 
$conn = new mysqli("localhost","root", "", "vote"); ?>
<?php include("cand_profile.php"); ?>
<div class="breadcrumbs-w3l">
<div class="container">
<span class="breadcrumbs">
 

</span>
</div>
</div>
<?php

	//$a= $_SESSION['c_username'];

$dao=new DataAccess();


if(ISSET($_SESSION['c_username'])){
$c_username=$_SESSION['c_username'];


}
else{
	echo "<script> location.href='cand_login.php'</script>";
}

$sql = "SELECT   c_name,c_lastname,c_username,c_password,post_id,batch_id,c_address,c_phn,c_email,s_date FROM candidate WHERE c_username='$c_username'";

$result = $conn->query($sql);
if($result->num_rows==1)
{
$row = $result->fetch_assoc();

$c_name = $row['c_name'];
$c_lastname = $row['c_lastname'];

$post_id= $row['post_id'];
$batch_id= $row['batch_id'];

$c_address = $row['c_address'];
$c_email = $row['c_email'];
$c_phn = $row['c_phn'];
$s_date=date("Y/m/d");


}
if(isset($_POST['delete']))
{
$sql1 ="DELETE FROM candidate WHERE c_username='$c_username'";
if ($conn->query($sql1) === TRUE) {
    echo "<script> alert(' Deleted Your Nomination Successfully');</script> ";
echo"<script> location.replace('cand_login.php'); </script>";

} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}
}

if(isset($_POST["update"]))
{




$c_address = $_POST['c_address'];
$c_email = $_POST['c_email'];
$c_phn = $_POST['c_phn'];
$s_date = date("Y/m/d");



$sql2 ="UPDATE candidate SET c_email='$c_email' ,c_address='$c_address',c_phn='$c_phn',s_date='$s_date' WHERE c_username='$c_username'";
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
<div class="h2-wrap" >
      <div class="container">
        <div class="row">
        <div class="col-md-12">
          <h3 class="standard-block">Nomination updates</h3>
          </div>
        </div>
      </div>
    </div>
   
<div class="box">


<div class="container">
<div id="news" class="w3ls-section">
<div class="container">
<h2 class="main-title" class="text-center p-5"><center>VICTORIA COLLEGE OF SCIENCE AND TECHNOLOGY  </center></h2><h3><center>COLLEGE UNION ELECTION 2020-2021</center></h3><h3  style="font-size:20px;"><center>NOMINATION PAPER</center></h3><br>
<hr><hr>
<form action="" method="POST">
<P style="color:red;">Please read the election notification carefully before filling up this Nomination form. Furnish correct
and full information. It is the responsibility of the  candidate to submit the
nomination paper, complete in every respect, to the ELECTION CONTROLLER within the time limit.</P>



                    <div class="col-md-7"><center>


<label for="">THE POST TO WHICH NOMINATION IS SUBMITTED:</label>
<?php 

$post=mysqli_query($conn,"select post_name from post where post_id='$post_id' ");
$f = mysqli_fetch_array($post);
?>
<input type="text" name="post-id" id="post_id" class="form-control" value="<?php echo $f['post_name'] ; ?>"disabled ></div></div></div>



<div class="row form-group">
<h2>PART 1 :Consent and Declaration of the Candidate</h2>
<p>I hereby declare that:</p>
<p>(1) I am a full time regular student of the course.</p>
<P>(2) I have no academic arrears as on date. I have passed all the examinations the result of
which have been declared and have not absented from any of the examinations the
results of which are to be declared.</p>
<p>(3) I have attained the minimum percentage of attendance prescribed by the college for the
Course of study or 75%, whichever is higher.</p>
<p>(4) I have not been subjected to disciplinary proceedings by the college.</p>

<p>(5) I will follow the code of conduct for candidates.</p>
<p>(6) I have not been tried and / or convicted of any criminal offence or misdemeanor. </p>

<h2>PART 2 :Nomination Of the Candidate</h2>
<div class="row -md-1">
                    <div class="col-md-9">
<label for=""> NAME OF THE CANDIDATE:</label>
<input type="text" name="c_name" id="c_name" class="form-control" value="<?php echo $c_name ?>" disabled ></div></div><br>
<div class="row form-group">
                    <div class="col-md-9">
<label for="">CANDIDATE LASTNAME:</label>
<input type="text" name="c_lastname" id="c_lastname" class="form-control" value="<?php echo $c_lastname ?>"disabled ></div></div>

<div class="row form-group">
                    <div class="col-md-9">
<label for="">CANDIDATE USERNAME :</label>
<input type="text" name="c_username" id="c_username" class="form-control" value="<?php echo $c_username ?>" disabled>
</div></div>
<div class="row -md-1">
                    <div class="col-md-9">
<label for="">CANDIDATE EMAIL :</label>
<input type="text" name="c_email" id="c_email" class="form-control" value="<?php echo $c_email ?>" >
</div></div>


<div class="row -md-1">
                    <div class="col-md-9">
<label for="">CANDIDATE ADDRESS:</label>
<input type="text" name="c_address" id="c_address" class="form-control" value="<?php echo $c_address ?>" >
</div></div>

<div class="row -md-1">
                    <div class="col-md-9">
<label for="">CANDIDATE phone:</label>
<input type="text" name="c_phn" id="c_phn" class="form-control" value="<?php echo $c_phn ?>" >
</div></div>
<div class="row -md-1">
                    <div class="col-md-9">
<label for="">CANDIDATE BATCH:</label>
<?php 

$batch=mysqli_query($conn,"select batch_name from batch where batch_id='$batch_id' ");
$f = mysqli_fetch_array($batch);
?>
<input type="text" name="batch_id" id="batch_id" class="form-control" value="<?php echo $f['batch_name']; ?>" disabled>
</div></div>


 
 </div><br><br><hr>
<div class="row">
<div class="col-md-6">
<div class="form-group">

<input type="submit" name="delete" value=" NOMINATION  WITHDRAWAL" class="btn btn-primary btn-block" class="text-center p-5">
</div>
</div>
<div class="col-md-6">
<div class="form-group">

<input type="submit" name="update" value="FINAL  SUBMIT " class="btn btn-info btn-block" class="text-center p-5">
</div>
</div></div>


</form></div></div></div></div></div></div></body></html>

 
</body>
</html>
<hr><br>
<?php include("FOOT.php"); ?>