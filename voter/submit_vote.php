<?php
	include("dbcon.php");
	session_start();
	
		$conn->query("INSERT INTO `vote` VALUES('', '$_SESSION[pres_id]', '$_SESSION[voter_id]')");
		$conn->query("INSERT INTO `vote` VALUES('', '$_SESSION[chair_id]', '$_SESSION[voter_id]')");
		$conn->query("INSERT INTO `vote` VALUES('', '$_SESSION[vpinternal_id]', '$_SESSION[voter_id]')");
		$conn->query("INSERT INTO `vote` VALUES('', '$_SESSION[internal_id]', '$_SESSION[voter_id]')");
		$conn->query("INSERT INTO `vote` VALUES('', '$_SESSION[arts_id]', '$_SESSION[voter_id]')");
		$conn->query("INSERT INTO `vote` VALUES('', '$_SESSION[magazine_id]', '$_SESSION[voter_id]')");
		$conn->query("UPDATE `voter` SET `status` = 'Voted' WHERE `voter_id` = '$_SESSION[voter_id]'") or die(mysql_error());
		header("location:VOTER_LOGIN.php");
		
?> 
