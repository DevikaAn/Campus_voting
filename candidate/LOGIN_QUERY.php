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
		$a=$_POST['c_username'];
		$d=$_POST['c_password'];
		
	
		$result = $conn->query("SELECT * FROM candidate WHERE c_username = '$a' && c_password = '$d' && `c_status` = 'ACCEPTED'") or die(mysqli_errno());
		$row = $result->fetch_array();
		$Voted = $conn->query("SELECT * FROM candidate WHERE c_username = '$a' && c_password = '$d' && `c_status` = 'REJECTED'")->num_rows;
		$numberOfRows = $result->num_rows;				
		
		
		if ($numberOfRows > 0){
			
		}
		
		else if($Voted == 1){
			echo " <br><center><font color= 'red' size='3'>LOGIN ERROR !</center></font>";?>
            
                    
                <center><div class="col-md-7 col-sm-6">
            <div class="col-md-8">
                         
  
                          <div class="alert alert-danger" >
                             <strong>ALERT :</strong> 
                            NOMINATION REJECTED 
                           
                            
                          </div>
                           </div>  
                     </div></center>
               <div class="col-md-9"> <center>      
			 <td><a onclick="return confirm('Are You Sure?');" href="VIEW_REASON.php?id=<?php echo $row['c_id']; ?>"><h7 class="btn btn-success btn-block" class="text-center p-5">Reason for Reject</a></h7></center>
			<?php die();
		}else {
			echo " <br><center><font color= 'red' size='3'>PENDING !</center></font>";  ?>
            
             <center><div class="col-md-7 col-sm-6">
            <div class="col-md-8">
                         
                          <div class="alert alert-danger" >
                             <strong>ALERT :</strong> 
                            NOMINATION PENDING 
                          </div>
                           </div>  
                     </div></center>
               <div class="col-md-9"> <center>      
			<a class="btn btn-danger btn" href="../index.html">Back To Home</a></center>
            <?php die();
		}
	
	}
?>