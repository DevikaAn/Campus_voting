<?php 

 

 require('../config/autoload.php'); 
	include("ahead.php");

$elements=array(
        "e_name"=>"","poll_time"=>"");


$form=new FormAssist($elements,$_POST);


$dao=new DataAccess();

$labels=array("e_name"=>"ELECTION DATE","poll_time"=>"POLL TIME" );

$rules=array(
"e_name"=>array("required"=>true,"minlength"=>2),
   
	"poll_time"=>array("required"=>true)
);
          
$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_insert"]))
{
if($validator->validate($_POST))
	


{
$data=array(
'e_name'=>$_POST['e_name'],
        
	   
	   'poll_time'=>$_POST['poll_time'],
          //'simage'=>$_POST['simage'],
    );
  
    if($dao->insert($data,"time"))
    {
        echo "<script> alert('New record created successfully');</script> ";
header('location:TIME.php');
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

  <!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line"> TIME DECLARATION</h4>
                
                            </div>

        </div>
             <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                          POLLING TIME
                        </div>
                        <div class="panel-body">
 <form action="" method="POST" >
 
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



<button type="submit" name="btn_insert"  >Submit</button>
</div></div></div></div>
</form>


</body>

</html>

	
 <hr>
             
<?php include ('foot_ca.php')?>  
                    
                    
		               
                    
                    
                    
                    
                    