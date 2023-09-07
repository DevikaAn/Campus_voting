<?php
	require 'dbcon.php';
	  session_start(); 
	
	if(!ISSET($_SESSION['voter_id'])){
		//header("location:index.php");
	}else{
		$session_id=$_SESSION['voter_id'];
		
		$user_query = $conn->query("SELECT * FROM admin_login WHERE admin_id = '$session_id'") or die(mysqli_errno());
		$user_row = $user_query->fetch_array();
	}
	
	
	
?>