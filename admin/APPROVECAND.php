<?php require('../config/autoload.php'); 
include("ahead.php");
include("dbcon.php");
	
$c_id=$_GET['c_id'];
$sql= "update candidate set c_status='APPLY' where c_id=".$c_id;
$conn->query($sql);
//header('location:VIEWCANDIDATE.php');

?>
