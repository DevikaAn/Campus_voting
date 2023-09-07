<?php 

 require('../config/autoload.php'); 
	include("ahead.php");


$elements=array(
        "dep_name"=>"");
		
		$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array("dep_name"=>"DEPARTMENT NAME");

$rules=array(
  
    "dep_name"=>array("required"=>true,"minlength"=>2,"maxlength"=>40,"alphaspaceonly"=>true)
	);
	
	$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_insert"]))
{
if($validator->validate($_POST))
{
$data=array(

        
        'dep_name'=>$_POST['dep_name'],
		 //'simage'=>$_POST['simage'],
             
    );
  
    if($dao->insert($data,"dept"))
    {
        echo "<script> alert('New record created successfully');</script> ";
header('location:DEPARTMENT.php');
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
                <h4 class="header-line"> DEPARTMENT</h4>
                
                            </div>

        </div>
             <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                           ADD DEPARTMENT
                        </div>
                        <div class="panel-body">
 <form action="" method="POST" >
 
<div class="row">
                    <div class="col-md-6">
Name:

<?= $form->textBox('dep_name',array('class'=>'form-control')); ?>
<?= $validator->error('dep_name'); ?>

</div>
</div>
</div>
&nbsp;&nbsp;&nbsp;

<button class="btn btn-primary"  name="btn_insert"><i class=" fa fa-refresh "></i> SAVE DATA</button>

</div></div></div></div>
</form>


</body>

</html>

	
 <hr>
             
<?php include ('foot_ca.php')?>  
                    
                    
		
	
	
	
	
	
	
	