<?php require('../config/autoload.php'); 
include("oghead.php");
include("dbcon.php");
	
$id=$_GET['id'];
$sql= "update CANDIDATE set c_status='REJECT' where c_id=".$id;
$conn->query($sql);
header('location:VIEWCANDIDATE.php');

?>
