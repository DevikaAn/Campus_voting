<?php 

 require('../config/autoload.php'); 
	include("ahead.php");


$elements=array(
        "from_date"=>"","to_date"=>"");


$form=new FormAssist($elements,$_POST);


$dao=new DataAccess();

$labels=array("from_date"=>" FROM DATE" ,"to_date"=>"DUE DATE" );

$rules=array(
   
   "from_date"=>array("required"=>true),"to_date"=>array("required"=>true)
   
);
          
$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_insert"]))
{
if($validator->validate($_POST))
	


{
$data=array(

        
		  'from_date'=>$_POST['from_date'],
       'to_date'=>$_POST['to_date'],
	  
          //'simage'=>$_POST['simage'],
    );
  
    if($dao->insert($data,"election"))
    {
        echo "<script> alert('New record created successfully');</script> ";
header('location:ELECTION.php');
    }
    else
        {$msg="Registration failed";} ?>
		
        
<span style="color:red;"><?php echo $msg; ?></span>

<?php
    
}


}


?>
<html>
<head>
</head>
<body>

 <form action="" method="POST" >
 <!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">DATE DECLARATION</h4>
                
                            </div>

 <!--/.ROW-->
             <div class="row">
                 <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                          NOMINATION OPENS & DUE DATES
                        </div>
                        <div class="panel-body">
                            <div class="form-group"><form action="" method="POST">
                   
             
                




 <div class="row">
			<div class="col-md-8">
				
            NOMINATION SUBMISSION STARTS:

<?= $form->inputBox('from_date',array('class'=>'form-control'),"date") ?>
<span style="color:red;"><?= $validator->error('from_date'); ?></span>

</div>
</div></div>
 <div class="row">
			<div class="col-md-8">
				
                    
              DUE DATE FOR NOMINATION SUBMISSION:

<?= $form->inputBox('to_date',array('class'=>'form-control'),"date") ?>
<span style="color:red;"><?= $validator->error('to_date'); ?></span>

</div>
</div>




<div style="padding-top:20px" class="row"><div class="col-md-8">
                    <div class="form-group">
<input class="form-control" style="color:blue;background-color:lightblue;" type="submit" name="btn_insert" value="SAVE DATE">
 <div class="right-div">
                <a href="VIEWELECTION.php" class="btn btn-info pull-right"><i class="fa fa-refresh"></i>Back</a>
            </div>

				</div>
			</div></div></form></div></div></div></div></div></form>


</body>

</html>
   <hr>
             
<?php include ('foot_ca.php')?>  
                    
                    
                    
                    
                    
                    
                    