<?php 

 require('../config/autoload.php'); 
	include("ahead.php");

$file=new FileUpload();
$elements=array(
        "clg_name"=>"","clg_address"=>"","clg_pin"=>"","clg_tele"=>"","clg_image"=>"","clg_email"=>"","clg_site"=>"");


$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array('clg_name'=>"College Name",'clg_address'=>" Address","clg_pin"=>" Pincode","clg_tele"=>" Telephone ",'clg_image'=>"College Image",'clg_email'=>" Email",'clg_site'=>"College SITE" );

$rules=array(
    "clg_name"=>array("required"=>true,"minlength"=>3,"maxlength"=>50),
    "clg_address"=>array("required"=>true,"minlength"=>2,"maxlength"=>70),
     "clg_pin"=>array("required"=>true,"minlength"=>2,"maxlength"=>16,"integeronly"=>true),
	  "clg_tele"=>array("required"=>true,"minlength"=>2,"maxlength"=>16,"integeronly"=>true),
	  "clg_email"=>array("required"=>true,"minlength"=>3,"maxlength"=>50),
    "clg_site"=>array("required"=>true,"minlength"=>2,"maxlength"=>70),
	  "clg_image"=> array('filerequired'=>true)
     
);
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_insert"]))
{
if($validator->validate($_POST))
{
	if($fileName=$file->doUploadRandom($_FILES['clg_image'],array('.jpg','.png','.jpeg'),100000,5,'../upload'))
		{

$data=array(

        'clg_name'=>$_POST['clg_name'],
        'clg_address'=>$_POST['clg_address'],
         'clg_pin'=>$_POST['clg_pin'],
		    'clg_tele'=>$_POST['clg_tele'],
			  'clg_email'=>$_POST['clg_email'],
        'clg_site'=>$_POST['clg_site'],
			'clg_image'=>$fileName,
          //'simage'=>$_POST['simage'],
    );
	
	if($dao->insert($data,"college"))
    {
        echo "<script> alert('New record created successfully');</script> ";
header('location:COLLEGE.php');
    }
    else
        {$msg="Registration failed";} ?>

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

  <form style="align-content: center;" action="" method="POST" enctype="multipart/form-data">
 <form style="align-content: center;" action="" rows="6" method="POST" >
              <div class="jumbotron">
        <div class="container">
           <div id="news" class="w3ls-section">
        <div class="container">
            <h4 class="main-title" class="text-center p-9">ADD NEW COLLEGE </h4><br>
 
 
<div  class="row"><div class="col-md-3"></div>
                    <div class="col-md-6">
COLLEGE NAME:

<?= $form->textBox('clg_name',array('class'=>'form-control')); ?>
<?= $validator->error('clg_name'); ?>

</div>
</div>

<div class="row"><div class="col-md-3"></div>
                    <div class="col-md-6">
COLLEGE ADDRESS:

<?= $form->textBox('clg_address',array('class'=>'form-control')); ?>
<?= $validator->error('clg_address'); ?>

</div>
</div>

<div class="row"><div class="col-md-3"></div>
                    <div class="col-md-6">
COLLEGE PINCODE:

<?= $form->textBox('clg_pin',array('class'=>'form-control')); ?>
<?= $validator->error('clg_pin'); ?>

</div>
</div>

<div class="row"><div class="col-md-3"></div>
                    <div class="col-md-6">
COLLEGE TELEPHONE:

<?= $form->textBox('clg_tele',array('class'=>'form-control')); ?>
<?= $validator->error('clg_tele'); ?>

</div>
</div>

<div  class="row"><div class="col-md-3"></div>
                    <div class="col-md-6">
COLLEGE MAIL:

<?= $form->textBox('clg_email',array('class'=>'form-control')); ?>
<?= $validator->error('clg_email'); ?>

</div>
</div>

<div class="row"><div class="col-md-3"></div>
                    <div class="col-md-6">
COLLEGE website:

<?= $form->textBox('clg_site',array('class'=>'form-control')); ?>
<?= $validator->error('clg_site'); ?>

</div>
</div>

<div class="row"><div class="col-md-3"></div>
                    <div class="col-md-6">
COLLEGE IMAGE:

<?= $form->fileField('clg_image',array('class'=>'form-control')); ?>
<span style="color:red;"><?= $validator->error('clg_image'); ?></span>

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
