<?php include("ahead.php");	?>
<?php require('../config/autoload.php'); 
include("dbcon.php");
?>

<?php
$dao=new DataAccess();
   $date1=$_SESSION['from_date'] ;
$date2=$_SESSION['to_date'] ;
   if(isset($_POST["purchase"]))
{
     header('location:index.php');
}
if(!isset($_SESSION['c_username']))
   {
	   header('location:DATE.php');
	   }
	   else
	   { 
	 
	   
	    ?>
       
       
       
       
 <div class="container_gray_bg" id="home_feat_1">
    <div class="container">
    	<div class="row">
            <div class="col-md-12">
            
            <H1><center> SUBMISSION DETAILS </center> </H1>
                <table  border="1" class="table" style="margin-top:100px;">
                    <tr>
                        
                        <th>Sl No</th>
                        <th>Name</th>
                        <th>POST</th>
                        
                     
                       
                       
                     
                      
                    </tr>
<?php
    
    $actions=array(
    
    
    
    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('c_id')
        
        
    );

   $condition="s_date>='".$date1."' and s_date<='".$date2."'";
   
   $join=array(
       
    );  
	$fields=array('c_id','c_name','c_lastname');

    $users=$dao->selectAsTable($fields,'candidate as c',$condition,NULL,$actions,$config);
    
    echo $users;
                                     
    ?>

             
                </table>
            </div>    


        
<form action="" method="POST" enctype="multipart/form-data">

<button class="btn btn-success" type="submit"  name="check" >Home</button>


</form>
</div>

            
            
            
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->

<?php } ?>