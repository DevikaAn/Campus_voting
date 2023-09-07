<?php $conn = new mysqli("localhost","root", "", "vote"); ?>
<?php include("head.php");  ?>





<?php

//$e=$_SESSION['emp_id'];
//echo $e;


$sql = "SELECT * FROM candidate WHERE c_status='REJECTED' ";
$result = $conn->query($sql);
if($result->num_rows == 1)
{

$row = $result->fetch_assoc();


$c_reason = $row['c_reason'];




}

?>
<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
    <head>

</head>

<body><br><br><br>
    
    
        <h2 class="text-center p-5"><b>Nomination Rejection Reason</b></h2><br>
           
            <form action="" method="POST">
            <table border="1" class="table" >
        <tr>
            
             
           <th>Reason For Rejection</th>
           <th></th>
            

            
            
            
        </tr>
<?php 
foreach ($result as $row) {
 ?>
    <tr> 
        
            <td><?php echo $row['c_reason']; ?></td>
       
           
        
       
        
     </tr>
<?php } ?> 
    </table>
    
        <?php 
    if ($result->num_rows <= 0) {
   
  echo "<script> alert('Sorry No Records Found');</script> ";
   
echo"<script >location.href = 'cand_login.php'</script>";
}     ?>     
       </form></body></html>


    <td><a onclick="return confirm('Are You Sure?');" href="cand_login.php?id=<?php echo $row['c_id']; ?>"><h7 class="btn btn-success btn-block" class="text-center p-5">BACK TO HOME</a></h7>