<?php 

 require('../config/autoload.php'); 
	include("head.php");
$file=new FileUpload();
$elements=array(
        "c_name"=>"", "c_lastname"=>"","batch_id"=>"","post_id"=>"","c_username"=>"","c_password"=>"","cfm_password"=>"","c_gender"=>"","c_address"=>"","c_email"=>"","c_phn"=>"","cand_image"=>"");


$form=new FormAssist($elements,$_POST);
$dao=new DataAccess();

$labels=array("c_name"=>"Candidate Name","c_lastname"=>"Candidate LastName","batch_id"=>"BATCH Name","post_id"=>"post Name","c_username"=>"username","c_password"=>"Password","cfm_password"=>"Confirm Password","c_gender"=>"gender","c_address"=>"address","c_email"=>"mail","c_phn"=>"phone number","cand_image"=>"Candidate Image");

$rules=array(
   "c_name"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"alphaspaceonly"=>true),
    "c_lastname"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"alphaspaceonly"=>true),
  "post_id"=>array("required"=>true),
	"batch_id"=>array("required"=>true),
	
	"c_address"=>array("required"=>true,"minlength"=>3,"maxlength"=>30),
	 "c_gender"=>array("required"=>true,"exist"=>array("m","f")),
 
  "c_email"=>array("required"=>true,"email"=>true,"unique"=>array("field"=>"c_email","table"=>"candidate")),
  "c_phn"=>array("required"=>true,"minlength"=>2,"maxlength"=>20,"integeronly"=>true),
	"c_username"=>array("required"=>true,"minlength"=>3,"maxlength"=>30),
	   	  "c_password"=>array("required"=>true),
    "cfm_password"=>array("required"=>true,"compare"=>array("comparewith"=>"c_password","operator"=>"=")),
"cand_image"=> array('filerequired'=>true)
);
       
$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_insert"]))
{
if($validator->validate($_POST))

{
	if($fileName=$file->doUploadRandom($_FILES['cand_image'],array('.jpg','.png','.jpeg'),100000,5,'../upload'))
		{
$data=array(
				'c_name'=>$_POST['c_name'],
				'c_lastname'=>$_POST['c_lastname'],
				'post_id'=>$_POST['post_id'],
				'batch_id'=>$_POST['batch_id'],
				
				'c_address'=>$_POST['c_address'],
		  'c_gender'=>$_POST['c_gender'],
      
		  'c_email'=>$_POST['c_email'],
		    'c_phn'=>$_POST['c_phn'],
				//'c_status'=>$_POST['c_status'],
				'c_username'=>$_POST['c_username'],
				'c_password'=>$_POST['c_password'],
				'cand_image'=>$fileName,
				'c_status'=>'APPLY',
				//'simage'=>$_POST['simage'],
			);
			
			 if($dao->insert($data,"candidate"))
    {
        echo "<script> alert('New record created successfully');</script> ";
header('location:CANDIDATE.php');
    }
    else
        {$msg="Insertion failed";} ?>

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
                <h4 class="header-line"></h4>
                
                            </div>

        </div>
             <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                          REGISTRATION 
                        </div>
                        <div class="panel-body">
                            <form role="form">
                            <div class="col-md-12">
                                        <div class="form-group">
				<h2>REGISTRATION FORM</h2>
			</div>
 <form action="" method="POST"  enctype="multipart/form-data" >
 

 
<div class="row form-group">
					<div class="col-md-9">
CANDIDATE NAME:

<?= $form->textBox('c_name',array('class'=>'form-control')); ?>
<?= $validator->error('c_name'); ?>

</div>
</div>
<div class="row form-group">
					<div class="col-md-9">
CANDIDATE LASTNAME:

<?= $form->textBox('c_lastname',array('class'=>'form-control')); ?>
<?= $validator->error('c_lastname'); ?>

</div>
</div>


<div class="row form-group">
					<div class="col-md-9">
POST NAME:

<?php
                    $options = $dao->createOptions('post_name','post_id',"post");
                    echo $form->dropDownList('post_id',array('class'=>'form-control'),$options); ?>
<?= $validator->error('post_id'); ?>

</div>
</div>






<div class="row form-group">
					<div class="col-md-9">
BATCH NAME:

<?php
                    $options = $dao->createOptions('batch_name','batch_id',"batch");
                    echo $form->dropDownList('batch_id',array('class'=>'form-control'),$options); ?>
<?= $validator->error('batch_id'); ?>

</div>
</div>


<div class="row form-group">
					<div class="col-md-9">
 ADDRESS:

<?= $form->textBox('c_address',array('class'=>'form-control')); ?>
<?= $validator->error('c_address'); ?>

</div>
</div>

<div class="row form-group">
					<div class="col-md-9">
 GENDER:

<?php
                    $options=array('Male'=>"m","Female"=>"f");
                    echo $form->radioGroup('c_gender',array(),$options); ?>
<?= $validator->error('c_gender'); ?>

</div>
</div>
<div class="row form-group">
					<div class="col-md-9">
 MAIL:

<?= $form->textBox('c_email',array('class'=>'form-control')); ?>
<?= $validator->error('c_email'); ?>

</div>
</div>




<div class="row form-group">
					<div class="col-md-9">
                     MOBILENUMBER:

<?= $form->textBox('c_phn',array('class'=>'form-control')); ?>
<?= $validator->error('c_phn'); ?>

</div>
</div>




<div class="row form-group">
					<div class="col-md-9">
CANDIDATE USERNAME:

<?= $form->textBox('c_username',array('class'=>'form-control')); ?>
<?= $validator->error('c_username'); ?>


</div>
</div>
<div class="row form-group">
                    <div class="col-md-9">
PASSWORD:

                            
                    <?= $form->passwordbox('c_password',array('class'=>'form-control')); ?>
                            <?= $validator->error('c_password'); ?>
            
                               
                               
                        </div>
                         </div>
                         
      <div class="row form-group">
                    <div class="col-md-9">
CONFIRM PASSWORD:
       
                            <?= $form->passwordbox('cfm_password',array('class'=>'form-control')); ?>
                            <?= $validator->error('cfm_password'); ?>

                           
                         
                               
                        </div>
                         </div>

<div class="row-lg-6">
					<div class="col-lg-9">
                    
CANDIDATE IMAGE:

<?= $form->fileField('cand_image',array('class'=>'form-control')); ?>

<span  style="color:red; "><?= $validator->error('cand_image'); ?></span>

</div>
</div>


					
<button type="submit" name="btn_insert"  >REGISTER</button>

</form>


</body>

</html>




