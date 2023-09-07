
<?php 
require('../config/autoload.php'); 
$conn = new mysqli("localhost","root", "", "vote"); ?>
<?php include("head.php"); ?>
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

$sql = "SELECT   post_id,c_name,c_lastname,c_username,batch_id,c_address,c_email, c_phn FROM candidate WHERE c_username='$c_username'";

//$sql1 ="SELECT   post_id FROM post WHERE post_name='$post_name';
$result = $conn->query($sql);
if($result->num_rows==1)
{
$row = $result->fetch_assoc();

			
$post_id = $row['post_id'];
$c_name = $row['c_name'];
$c_lastname = $row['c_lastname'];
$batch_id = $row['batch_id'];
$c_address = $row['c_address'];
$c_email = $row['c_email'];
$c_phn = $row['c_phn'];



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
&nbsp;
			&nbsp;	
			<button type="button" onClick="window.print();" style = "margin-right:14px;" id ="print" class = "pull-right btn btn-info"><i class = "fa fa-print"></i>PRINT</button>
			<br>
			<br>
            
<h2 class="main-title" class="text-center p-5"><center>VICTORIA COLLEGE OF SCIENCE AND TECHNOLOGY</center></h2>
<h2 class="main-title" class="text-center p-5"><center> COLLEGE UNION ELECTION 2020-2021 </center></h2><h3 style="font-size:20px;"><center>NOMINATION PAPER</center></h3><br>
<hr><hr>
<form action="" method="POST">
<P style="color:red;">Please read the election notification carefully before filling up this Nomination form. Furnish correct
and full information. It is the responsibility of the  candidate to submit the
nomination paper, complete in every respect, to the ELECTION CONTROLLER within the time limit.</P>


<div class="row">
<div class="col-md-4">
<div class="form-group">
<label for="">THE POST TO WHICH NOMINATION IS SUBMITTED:</label>
<?php 

$post=mysqli_query($conn,"select post_name from post where post_id='$post_id' ");
$f = mysqli_fetch_array($post);
?>
<input type="text" name="post-id" id="post_id" class="form-control" value="<?php echo $f['post_name'] ; ?>"disabled ></div></div></div>

<form action="" method="POST">
</div>
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
<label for="">CANDIDATE NAME:</label>
<input type="text" name="c_name" id="c_name" class="form-control" value="<?php echo $c_name ?>" disabled ></div></div><br>
<div class="row -md-1">
                    <div class="col-md-9"><label for="">CANDIDATE LASTNAME:</label>
<input type="text" name="c_lastname" id="c_lastname" class="form-control" value="<?php echo $c_lastname ?>" disabled></div></div><br>
<div class="row -md-1">
                    <div class="col-md-9">
<label for="">CANDIDATE USERNAME :</label>
<input type="text" name="c_username" id="c_username" class="form-control" value="<?php echo $c_username ?>" disabled>
</div></div>
<br>
<div class="row -md-1">
                    <div class="col-md-9">
<label for="">CANDIDATE BATCH:</label>
<?php 

$batch=mysqli_query($conn,"select batch_name from batch where batch_id='$batch_id' ");
$f = mysqli_fetch_array($batch);
?>
<input type="text" name="batch_id" id="batch_id" class="form-control" value="<?php echo $f['batch_name']; ?>" disabled>
</div></div>


<br>

<div class="row -md-1">
                    <div class="col-md-9">
<label for="">CANDIDATE EMAIL :</label>
<input type="text" name="c_email" id="c_email" class="form-control" value="<?php echo $c_email ?>" disabled>
</div></div></div>

<br>
<div class="row -md-1">
                    <div class="col-md-9">
<label for="">CANDIDATE ADDRESS:</label>
<input type="text" name="c_address" id="c_address" class="form-control" value="<?php echo $c_address ?>" disabled>
</div></div>
<br>
<div class="row -md-1">
                    <div class="col-md-9">
<label for="">CANDIDATE phone:</label>
<input type="text" name="c_phn" id="c_phn" class="form-control" value="<?php echo $c_phn ?>" disabled>
</div></div>












<P>I AGREE TO ABIDE ALL RELEVENT ELECTION RULES CONTAINED IN THIS DOCUMENT.</P>
<P style="color:blue;" >OFFICIAL ELECTION  RESULTS WILL BE ANNOUNCED ONLINE  BY COLLEGE ELECTION CONTROL OFFICE .</P>
</div>
</div>
<div class="col-md-6">
<div class="form-group">


</div>
</div></div>


</form></div></div></div></div></div></div></body></html>

 
</body>
</html>
<hr>
<?php include("FOOT.php"); ?>