<?php 

 require('../config/autoload.php'); 
	include("ahead.php");

$file=new FileUpload();
$elements=array(
        "v_admno"=>"","v_name"=>"","v_address"=>"","v_gender"=>"","batch_id"=>"","v_email"=>"","v_mob"=>"","v_username"=>"","v_password"=>"","v_image"=>"");


$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array('v_admno'=>"voter admission number","v_name"=>"voter name","v_address"=>"voter address","v_gender"=>"voter gender","batch_id"=>"voter classname","v_email"=>"voter mail id", "v_mob"=>"voter mobile number","v_username"=>"voter username","v_password"=>"voter password","v_image"=>"VOTER IMAGE");

$rules=array(
    "v_admno"=>array("required"=>true,"minlength"=>3,"maxlength"=>30),
	"v_name"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"alphaspaceonly"=>true),
	"v_address"=>array("required"=>true,"minlength"=>3,"maxlength"=>30),
	 "v_gender"=>array("required"=>true,"exist"=>array("m","f")),
 "batch_id"=>array("required"=>true),
  "v_email"=>array("required"=>true,"email"=>true,"unique"=>array("field"=>"v_email","table"=>"voterlist")),
  "v_mob"=>array("required"=>true,"minlength"=>2,"maxlength"=>1s0,"integeronly"=>true),
   "v_username"=>array("required"=>true,"minlength"=>3,"maxlength"=>30),
    "v_password"=>array("required"=>true,"minlength"=>3,"maxlength"=>30),
	
	 "v_image"=> array('filerequired'=>true)
);
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_insert"]))
{
if($validator->validate($_POST))
{
	if($fileName=$file->doUploadRandom($_FILES['v_image'],array('.jpg','.png','.jpeg'),10000,5,'../upload'))
		{  // code for insertion 
$data=array(

        'v_admno'=>$_POST['v_admno'],
        'v_name'=>$_POST['v_name'],
          'v_address'=>$_POST['v_address'],
		  'v_gender'=>$_POST['v_gender'],
        'batch_id'=>$_POST['batch_id'],
		  'v_email'=>$_POST['v_email'],
		    'v_mob'=>$_POST['v_mob'],
			  'v_username'=>$_POST['v_username'],
			    'v_password'=>$_POST['v_password'],
				'status'=>'Unvoted',
				'v_image'=>$fileName,
				
          //'simage'=>$_POST['simage'],
    );
	
	
	
			
			    if($dao->insert($data,"voter"))
    {
        echo "<script> alert('New record created successfully');</script> ";
echo "<script>location.replace('VOTERSLIST.php');</script> ";
    }
    else
        {echo $dao->getErrors()."YYY";
			$msg="Registration failed";} ?>
<span style="color:red;"><?php echo $msg; ?></span>

<?php 
 }
else
echo $file->errors();
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
                <h4 class="header-line"> VOTERS LIST</h4>
                
                            </div>

        </div>
<div class="panel panel-default">
                        <div class="panel-heading">
                        
                            <h4 class="modal-title" id="myModalLabel">         
												<div class="panel panel-primary">
                                                
													<div class="panel-heading"><i class = "fa fa-book"></i>
														ADD VOTERS
													</div>    
												</div>
											</h4>
                        </div>
                        <!-- /.panel-heading -->
<form style="align-content: center;" action="" method="POST" enctype="multipart/form-data">
 <form style="align-content: center;" action="" rows="6" method="POST" >
 
 <div class="row-md-6"><div class="col-md-3"></div>
                    <div class="col-md-6">
VOTER ADMISSION NO:

<?= $form->textBox('v_admno',array('class'=>'form-control')); ?>
<?= $validator->error('v_admno'); ?>

</div>
</div>

<div class="row"><div class="col-md-3"></div>
                    <div class="col-md-6">
VOTER NAME:

<?= $form->textBox('v_name',array('class'=>'form-control')); ?>
<?= $validator->error('v_name'); ?>

</div>
</div>

<div class="row"><div class="col-md-3"></div>
                    <div class="col-md-6">
VOTER ADDRESS:

<?= $form->textBox('v_address',array('class'=>'form-control')); ?>
<?= $validator->error('v_address'); ?>

</div>
</div>

<div class="row"><div class="col-md-3"></div>
                    <div class="col-md-6">
                    
 GENDER:

<?php
                    $options=array('Male'=>"m","Female"=>"f");
                    echo $form->radioGroup('v_gender',array(),$options); ?>
<?= $validator->error('v_gender'); ?>

</div>
</div>


<div class="row"><div class="col-md-3"></div>
                    <div class="col-md-6">
BATCH NAME:

<?php
                    $options = $dao->createOptions('batch_name','batch_id',"batch");
                    echo $form->dropDownList('batch_id',array('class'=>'form-control'),$options); ?>
<?= $validator->error('batch_id'); ?>

</div>
</div>




<div class="row"><div class="col-md-3"></div>
                    <div class="col-md-6">
VOTER MAIL:

<?= $form->textBox('v_email',array('class'=>'form-control')); ?>
<?= $validator->error('v_email'); ?>

</div>
</div>




<div class="row"><div class="col-md-3"></div>
                    <div class="col-md-6">
VOTER MOBILENUMBER:

<?= $form->textBox('v_mob',array('class'=>'form-control')); ?>
<?= $validator->error('v_mob'); ?>

</div>
</div>



<div class="row"><div class="col-md-3"></div>
                    <div class="col-md-6">
VOTER USERNAME:

<?= $form->textBox('v_username',array('class'=>'form-control')); ?>
<?= $validator->error('v_username'); ?>

</div>
</div>




<div class="row"><div class="col-md-3"></div>
                    <div class="col-md-6">
VOTER PASSWORD:

<?= $form->textBox('v_password',array('class'=>'form-control')); ?>
<?= $validator->error('v_password'); ?>

</div>
</div>




<div class="row"><div class="col-md-3"></div>
                    <div class="col-md-6">
CANDIDATE IMAGE:

<?= $form->fileField('v_image',array('class'=>'form-control')); ?>
<span style="color:red;"><?= $validator->error('v_image'); ?></span>

</div>
</div>


<div style="padding-top:20px" class="row"><div class="col-md-3"></div>
                    <div class="col-md-6">
<input class="form-control" style="color:blue;background-color:lightblue;" type="submit" name="btn_insert" value="submit">
</div>
</div>
</form>


</body>

</html>









