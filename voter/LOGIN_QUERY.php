<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>FREE RESPONSIVE HORIZONTAL ADMIN</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<?php
	require_once 'dbcon.php';
	
	if(isset($_POST['login'])){
		$a=$_POST['v_username'];
		$d=$_POST['v_password'];
	
		$result = $conn->query("SELECT * FROM voter WHERE v_username = '$a' && v_password = '$d' && `status` = 'Unvoted'") or die(mysqli_errno());
		$row = $result->fetch_array();
		$Voted = $conn->query("SELECT * FROM voter WHERE v_username = '$a' && v_password = '$d' && `status` = 'Voted'")->num_rows;
		$numberOfRows = $result->num_rows;				
		
		
		if ($numberOfRows > 0){
			
		}
		
		if($Voted == 1){
			
			echo " <br><center><font color= 'red' size='3'>LOGIN ERROR.</center></font>";?>
            
                    <div class="well well-lg">
                        <h4>CAMPUS VOICE</h4>
                       
                    </div>
                
                <center><div class="col-md-7 col-sm-6">
            <div class="col-md-8">
                         
                          <div class="alert alert-danger" >
                             <strong>ALERT :</strong> 
                             YOU CAN ONLY VOTE ONCE..............
                          </div>
                           </div>  
                     </div></center>
               <div class="col-md-9"> <center>      
			<a class="btn btn-danger btn" href="../index.html">Back To Home</a></div></center>
			<?php die();
		}
	
	}
?>