<?php require('../config/autoload.php'); ?>
<?php
	

include("ahead.php");
$dao=new DataAccess();
$info=$dao->getData('*','time','t_id='.$_GET['id']);

$elements=array(
       
		"e_name"=>$info[0]['e_name'],
		"poll_time"=>$info[0]['poll_time'],
		
		
		);  
		
		


$form=new FormAssist($elements,$_POST);


$dao=new DataAccess();

$labels=array("e_name"=>" POLL EVENT" ,"poll_time"=>"TIME"  );

$rules=array(
   
  "e_name"=>array("required"=>true,"minlength"=>2),
   
	"poll_time"=>array("required"=>true)
   
);
   
          
$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_update"]))
{
if($validator->validate($_POST))
	


{
$data=array(

        
		  'e_name'=>$_POST['e_name'],
       'poll_time'=>$_POST['poll_time'],
	  
          //'simage'=>$_POST['simage'],
    );
  $condition='t_id='.$_GET['id'];

    if($dao->update($data,'time',$condition))
    {
        $msg="Successfullly Updated";
header('location:VIEWELECTION.php');
    }
    else
        {$msg="Failed";} ?>

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
                <h4 class="header-line">ELECTION TIMETABLE FOR 2021</h4>
                
                            </div>

 <!--/.ROW-->
             <div class="row">
                 <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                          ELECTION GUIDELINES
                        </div>
                        <div class="panel-body">
                            <div class="form-group"><form action="" method="POST">
                   
             

<div class="row">
                    <div class="col-md-6">
              POLL EVENTS:

<?= $form->textBox('e_name',array('class'=>'form-control')); ?>
<?= $validator->error('e_name'); ?>
</div>
</div>





<div class="row">
			<div class="col-md-6">
				
            VOTING HOUR:

<?= $form->textBox('poll_time',array('class'=>'form-control')); ?>
<span style="color:red;"><?= $validator->error('poll_time'); ?></span>

</div>
</div>




<div style="padding-top:20px" class="row"><div class="col-md-8">
                    <div class="form-group">
<input class="form-control" style="color:blue;background-color:lightblue;" type="submit" name="btn_update" value="SAVE DATE">
<div class="right-div">
                <a href="VIEWELECTION.php" class="btn btn-info pull-right"><i class="fa fa-refresh"></i>Back</a>
            </div>

				</div>
			</div></div></form></div></div></div></div></div></form>



</body>

</html>
      <hr>
             
<?php include ('foot_ca.php')?>  
                    
                    
                    
                    
                    
                    
                    
                    
                    