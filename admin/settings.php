<?php 

 require('../config/autoload.php'); 
	include("ahead.php");


$elements=array(
        "adm_username"=>"","adm_password"=>"");
		
		$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array("adm_username"=>"USERNAME","adm_password"=>"PASSWORD");

$rules=array(
  
    "adm_username"=>array("required"=>true,"minlength"=>2,"maxlength"=>40,"alphaspaceonly"=>true),
	"adm_password"=>array("required"=>true,"minlength"=>2)
	);
	
	$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_insert"]))
{
if($validator->validate($_POST))
{
$data=array(

        
        'adm_username'=>$_POST['adm_username'],
		'adm_password'=>$_POST['adm_password'],
		 //'simage'=>$_POST['simage'],
             
    );
  
    if($dao->insert($data,"admin_login"))
    {
        echo "<script> alert('New record created successfully');</script> ";
header('location:settings.php');
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
                <h4 class="header-line"> SETTINGS</h4>
                
                            </div>

        </div>
             <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                           LOGIN SETTINGS
                        </div>
                        <div class="panel-body">
 <form action="" method="POST" >
 
<div class="row">
                    <div class="col-md-6">
USERNAME:

<?= $form->textBox('adm_username',array('class'=>'form-control')); ?>
<?= $validator->error('adm_username'); ?>

</div>
</div>

<div class="row">
                    <div class="col-md-6">
PASSWORD:

<?= $form->textBox('adm_password',array('class'=>'form-control')); ?>
<?= $validator->error('adm_password'); ?>

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
                    
                    
		
	
	
	
	
	
	
	