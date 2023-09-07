<?php 

 require('../config/autoload.php'); 
	include("ahead.php");


$elements=array(
        "batch_name"=>"","dep_id"=>"");
		
		$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array('batch_name'=>"Batch Name","dep_id"=>"Dept name");

$rules=array(
    "batch_name"=>array("required"=>true,"minlength"=>3,"maxlength"=>30),
	 "dep_id"=>array("required"=>true));
	$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_insert"]))
{
if($validator->validate($_POST))
{
$data=array(

        'batch_name'=>$_POST['batch_name'],
		'dep_id'=>$_POST['dep_id'],
		//'simage'=>$_POST['simage'],
    );
  
    if($dao->insert($data,"batch"))
	 {
        echo "<script> alert('New record created successfully');</script> ";
header('location:BATCH.php');
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
                <h4 class="header-line"> BATCH</h4>
                
                            </div>

        </div>
             <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                           ADD BATCH
                        </div>
                        <div class="panel-body">
<form action="" method="POST" >
 
<div class="row">
                    <div class="col-md-6">
BATCH Name:

<?= $form->textBox('batch_name',array('class'=>'form-control')); ?>
<?= $validator->error('batch_name'); ?>

</div>
</div>

<div class="row">
                    <div class="col-md-6">
DEPARTMENT NAME:

<?php
                    $options = $dao->createOptions('dep_name','dep_id',"dept");
                    echo $form->dropDownList('dep_id',array('class'=>'form-control'),$options); ?>
<?= $validator->error('dep_id'); ?>

</div>
</div>

</div>
&nbsp;&nbsp;&nbsp;
<button class="btn btn-primary"  name="btn_insert"><i class=" fa fa-refresh "></i> SAVE DATA</button>

</form>


</body>

</html>









