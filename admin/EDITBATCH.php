<?php require('../config/autoload.php'); ?>
<?php
	

include("ahead.php");
$dao=new DataAccess();
$info=$dao->getData('*','batch','batch_id='.$_GET['id']);

$elements=array(
        "batch_name"=>$info[0]['batch_name']);  

	$form = new FormAssist($elements,$_POST);

$labels=array("batch_name"=>"BATCH NAME" );

$rules=array(
    "batch_name"=>array("required"=>true,"minlength"=>2,"maxlength"=>40)
     
);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_update"]))
{
if($validator->validate($_POST))
{
$data=array(

         'batch_name'=>$_POST['batch_name'],
		 //'simage'=>$_POST['simage'],
    );
  $condition='batch_id='.$_GET['id'];

    if($dao->update($data,'batch',$condition))
    {
        $msg="Successfullly Updated";
header('location:VIEWBATCH.php');
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
                <h4 class="header-line">BATCH</h4>
                
                            </div>

        </div>
             <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                           EDIT BATCH
                        </div>
                        <div class="panel-body">

	<form action="" method="POST" >
 
 
<div class="row">
                    <div class="col-md-6">
BATCH NAME:

<?= $form->textBox('batch_name',array('class'=>'form-control')); ?>
<?= $validator->error('batch_name'); ?>

</div>
</div>




</div>

&nbsp;&nbsp;&nbsp;

<button class="btn btn-primary" name="btn_update"  ><i class=" fa fa-refresh "></i>UPDATE</button>
</form>

</body>
</html>
	
	
	
	
	
	
	