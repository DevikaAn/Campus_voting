<?php require('../config/autoload.php'); ?>
<?php
	

include("ahead.php");
$dao=new DataAccess();
$info=$dao->getData('*','admin_login','admin_id='.$_GET['id']);

$elements=array(
        "adm_username"=>$info[0]['adm_username'], "adm_password"=>$info[0]['adm_password']);  

	$form = new FormAssist($elements,$_POST);

$labels=array("adm_username"=>"USERNAME" ,"adm_password"=>"PASSWORD" );

$rules=array(
    "adm_username"=>array("required"=>true,"minlength"=>2), "adm_password"=>array("required"=>true,"minlength"=>2),
     
);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_update"]))
{
if($validator->validate($_POST))
{
$data=array(

         'adm_username'=>$_POST['adm_username'], 'adm_password'=>$_POST['adm_password'],
		 //'simage'=>$_POST['simage'],
    );
  $condition='admin_id='.$_GET['id'];

    if($dao->update($data,'admin_login',$condition))
    {
        $msg="Successfullly Updated";
header('location:VIEW_SETTINGS.php');
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
	<style>
		.form{
		border:3px solid blue;
		}
	</style>
</head>
<body>

<!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">CHANGE PASSWORD</h4>
                
                            </div>

        </div>
             <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                           EDIT
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

<button class="btn btn-primary" name="btn_update"  ><i class=" fa fa-refresh "></i>UPDATE</button>
<button class="btn btn-danger" name="btn_update"  ><i class=" fa fa-refresh "></i>BACK</button>
</form>

</body>
</html>
	
	
	
	
	
	
	
	
	
	