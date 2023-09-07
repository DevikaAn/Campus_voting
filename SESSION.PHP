<?php
	require 'dbcon.php';
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if (!isset($_SESSION['admin_id']) || (trim($_SESSION['admin_id']) == '')) { ?>
		
<?php 
	}
		
$b=$_SESSION['admin_id'];

		$user_query = $conn->query("SELECT * FROM admin_login WHERE admin_id = '$b'") or die(mysqli_errno());
		$user_row = $user_query->fetch_array();
		
?>


