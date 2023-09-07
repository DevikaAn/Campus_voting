<?php require('../config/autoload.php'); ?>
<?php
	

include("ahead.php");
$dao=new DataAccess();
$info=$dao->getData('*','dept','dep_id='.$_GET['id']);

$elements=array(
        "dep_name"=>$info[0]['dep_name']);  

	$form = new FormAssist($elements,$_POST);

$labels=array("dep_name"=>"DEPARTMENT NAME" );

$rules=array(
    "dep_name"=>array("required"=>true,"minlength"=>2,"maxlength"=>40,"alphaspaceonly"=>true)
     
);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_update"]))
{
if($validator->validate($_POST))
{
$data=array(

         'dep_name'=>$_POST['dep_name'],
		 //'simage'=>$_POST['simage'],
    );
  $condition='dep_id='.$_GET['id'];

    if($dao->update($data,'dept',$condition))
    {
        $msg="Successfullly Updated";
header('location:VIEWDEP.php');
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
                <h4 class="header-line">DEPARTMENTS</h4>
                
                            </div>

        </div>
             <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                           EDIT DEPARTMENTS
                        </div>
                        <div class="panel-body">
	<form action="" method="POST" >
 
 
<div class="row">
                    <div class="col-md-6">
Department Name:

<?= $form->textBox('dep_name',array('class'=>'form-control')); ?>
<?= $validator->error('dep_name'); ?>

</div>
</div>



</div>

&nbsp;&nbsp;&nbsp;

<button class="btn btn-primary" name="btn_update"  ><i class=" fa fa-refresh "></i>UPDATE</button>
<button class="btn btn-danger" name="btn_update"  ><i class=" fa fa-refresh "></i>BACK</button>
</form>

</body>
</html>
	
	
	
	
	
	
	
	
	
	