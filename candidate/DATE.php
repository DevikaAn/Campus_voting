

<?php 

include("cand_profile.php");

 require('../config/autoload.php'); 

$elements=array(
        "from_date"=>"","to_date"=>"");


$form=new FormAssist($elements,$_POST);

$dao=new DataAccess();

$labels=array("from_date"=>"from Date","to_date"=>"To Date" );

$rules=array(
    
    "from_date"=>array('required'=>true,'date'=>array('from'=>'today','to'=>'5 days 12 am')),
    "to_date"=>array('required'=>true,'datecompare'=>array('comparewith'=>'from_date','operator'=>'>='),'date'=>array('from'=>'-12 days 12 am','to'=>'12 days 12 am')),
 

      
);
    
    
$validator = new FormValidator($rules,$labels);


if(isset($_POST["btn_insert"])){

if(!isset($_SESSION['c_username']))
   {
	echo"<script >location.href = 'cand_login.php'</script>";
	  
  }
  else

  {
  	if($validator->validate($_POST))
{
	  $_SESSION['from_date']= $_POST["from_date"];
	    $_SESSION['to_date']= $_POST["to_date"];
		$from_date=$_POST["from_date"];
		$to_date=$_POST["to_date"];
		
	 
	  $date_diff = abs(strtotime($from_date) - strtotime($to_date));
	  $years = floor($date_diff / (365*60*60*24));
		$months = floor(($date_diff - $years * 365*60*60*24) / (30*60*60*24));
	  
	  $days = floor(($date_diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
	  if ($days==0)
	  {
		  $days=1;
  }
	 
  $timestamp=strtotime($from_date);
 
  $day= date('D',$timestamp);
 
  if($day=='Sun')
  {
  	echo "<script>alert('Sorry.. Sunday is holiday!! Select Another Date');</script>";
  	echo "<script>location.replace('date1.php');</script>";
  }
  $timestamp=strtotime($to_date);
 
  $day= date('D',$timestamp);

  if($day=='Sun')
  {
  	echo "<script>alert('Sorry.. Sunday is holiday!! Select Another Date');</script>";
  	echo "<script>location.replace('date1.php');</script>";
  }

	 $_SESSION['days']=$days;
	 echo $days;
	
	 
	  	echo"<script >location.href = 'displayarea.php'</script>";
	  
	  }
  }
 }

?>
<html>
<head>
</head>
<body>
<div class="container">
 <form action="" method="POST" >
 
<br><br><br><br>

<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					


                
                 
				<label for="fromdate">From date:</label><br>

 <input type="date" name="from_date" id="cust_email" class="form-control" required min="<?php echo date('Y-m-d'); ?>">
<span style="color:red;"><?= $validator->error('from_date'); ?></span>


</div>
</div></div>


<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					


           
           
      
               
                   
                 
				<label for="from_date">To Date</label><br>

 <input type="date" name="to_date" id="cust_email" class="form-control" required min="<?php echo date('Y-m-d'); ?>">
<span style="color:red;"><?= $validator->error('to_date'); ?></span>

</div>
</div>


 <div class="row">
			<div class="col-md-8">
				<div class="form-group">
					
					<input type="submit" name="btn_insert" value="NOMINATION DUE DATE" class="btn btn-success btn-block" class="text-center p-5">
				</div>
			</div></div></form></div></div></div></div></div></form>


</body>

</html>
