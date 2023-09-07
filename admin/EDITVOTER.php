<?php require('../config/autoload.php'); ?>
<?php


include("ahead.php");
$dao=new DataAccess();
$info=$dao->getData('*','voter','voter_id='.$_GET['id']);  
$file=new FileUpload();
$elements=array(
           
        "v_name"=>$info[0]['v_name'] ,
 "v_gender"=>$info[0]['v_gender'],

   "v_email"=>$info[0]['v_email'], 
   
  "v_image"=>"",
    "batch_id"=>$info[0]['batch_id'], 
  
  );
 
	$form = new FormAssist($elements,$_POST);

$labels=array("voter_id"=>"VOTER ID","v_name"=>"VOTER NAME","v_gender"=>"GENDER","v_email"=>"EMAIL","batch_id"=>"BATCH  NAME");

$rules=array(
   
     "v_name"=>array("required"=>true,"minlength"=>3,"maxlength"=>30),

	 "v_gender"=>array("required"=>true,"exist"=>array("m","f")),
 
  "v_email"=>array("required"=>true,"email"=>true,"unique"=>array("field"=>"v_email","table"=>"voter")),
  
   
	
	 
	 "batch_id"=>array("required"=>true),
);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_update"]))
{
if($validator->validate($_POST))
{
	if(isset($_FILES['v_image']['name'])){
			if($fileName=$file->doUploadRandom($_FILES['v_image'],array('.jpg','.png','.jpeg'),100000,5,'../upload'))
			{
				$flag=true;
					
			}
}
$data=array(

          'v_name'=>$_POST['v_name'],
         
		  'v_gender'=>$_POST['v_gender'],
        
		  'v_email'=>$_POST['v_email'],
		  
				
			
			'batch_id'=>$_POST['batch_id'],
		 //'simage'=>$_POST['simage'],
    );
  $condition='voter_id='.$_GET['id'];
if(isset($flag))
			{	$data['v_image']=$fileName;
		
			}
    if($dao->update($data,'voter',$condition))
    {    echo"<script>window.alert('updated')</script>";  
        $msg="Successfullly Updated";
header('location:VIEWVOTER.php');
    }
    else
        {    echo"<script>window.alert('failed')</script>";  
			$msg="Failed";} ?>

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
                <h4 class="header-line">VOTERS LIST</h4>
                
                            </div>

        </div>
              <!--/.ROW-->
             <div class="row">
                 <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                          EDIT VOTER DETAILS
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
	<form action="" method="POST" enctype="multipart/form-data" >
 
<div class="row">
                    <div class="col-md-6">
VOTER NAME:

<?= $form->textBox('v_name',array('class'=>'form-control')); ?>
<?= $validator->error('v_name'); ?>

</div>
</div>

<div class="row">
                    <div class="col-md-6">
                   
                    
 GENDER:

<?php
                    $options=array('Male'=>"m","Female"=>"f");
                    echo $form->radioGroup('v_gender',array(),$options); ?>
<?= $validator->error('v_gender'); ?>

</div>
</div>


<div class="row">
                    <div class="col-md-6">
CLASS NAME:

<?php
                    $options = $dao->createOptions('batch_name','batch_id',"batch");
                    echo $form->dropDownList('batch_id',array('class'=>'form-control'),$options); ?>
<?= $validator->error('batch_id'); ?>

</div>
</div>




<div class="row">
                    <div class="col-md-8">
VOTER MAIL:

<?= $form->textBox('v_email',array('class'=>'form-control')); ?>
<?= $validator->error('v_email'); ?>

</div>
</div>





<div class="form-group">
VOTER IMAGE:

<?= $form->fileField('v_image',array('class'=>'form-control')); ?>

</div>
</div>
</div>
&nbsp;&nbsp;&nbsp;

<input type="submit" class="btn btn-primary" name="btn_update" class="btn btn-primary" value="UPDATE">

</form>

</body>
</html>
	
	
	
	
	
	
	