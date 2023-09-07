<?php require('../config/autoload.php'); ?>
<?php


include("ahead.php"); 

 
	
$dao=new DataAccess();
$info=$dao->getData('*','college','clg_id='.$_GET['id']);
$file=new FileUpload();
$elements=array(
       

 "clg_address"=>$info[0]['clg_address'],
 "clg_pin"=>$info[0]['clg_pin'],
 "clg_tele"=>$info[0]['clg_tele'],
 "clg_email"=>$info[0]['clg_email'],
 "clg_image"=>"",
 "clg_site"=>$info[0]['clg_site'],
 ); 

$form=new FormAssist($elements,$_POST);





$labels=array('clg_address'=>"College Address","clg_pin"=>"College Pincode","clg_tele"=>"College Telephone ","clg_email"=>"EMAIL","clg_site"=>"WEBSITE ");

$rules=array(
   
    "clg_address"=>array("required"=>true,"minlength"=>2,"maxlength"=>70),
     "clg_pin"=>array("required"=>true,"minlength"=>2,"maxlength"=>16,"integeronly"=>true),
	  "clg_tele"=>array("required"=>true,"minlength"=>2,"maxlength"=>16,"integeronly"=>true),
	  "clg_email"=>array("required"=>true,"minlength"=>3,"maxlength"=>50),
    "clg_site"=>array("required"=>true,"minlength"=>2,"maxlength"=>70)
     
);
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_update"]))
{
if($validator->validate($_POST))
{
	if(isset($_FILES['clg_image']['name'])){
			if($fileName=$file->doUploadRandom($_FILES['clg_image'],array('.jpg','.png','.jpeg'),100000,5,'../upload'))
			{
				$flag=true;
					
			}
	}
$data=array(

        
        'clg_address'=>$_POST['clg_address'],
         'clg_pin'=>$_POST['clg_pin'],
		    'clg_tele'=>$_POST['clg_tele'],
			'clg_email'=>$_POST['clg_email'],
		    'clg_site'=>$_POST['clg_site'],
			
         // 'simage'=>$_POST['simage'],
    );
	 $condition='clg_id='.$_GET['id'];
	 if(isset($flag))
			{	$data['clg_image']=$fileName;
		
			}
    if($dao->update($data,'college',$condition))
    {    echo"<script>window.alert('updated')</script>";  
        $msg="Successfullly Updated";
header('location:VIEWCLG.php');
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
                <h4 class="header-line">EDIT</h4>
                
                            </div>

        </div>
              <!--/.ROW-->
             <div class="row">
                 <div class="col-md-9 col-sm-6 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                          EDIT COLLEGE DETAILS
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
	<form action="" method="POST" enctype="multipart/form-data" >
 
 


<div class="row"><div class="col-md-3"></div>
                    <div class="col-md-9">
COLLEGE ADDRESS:

<?= $form->textBox('clg_address',array('class'=>'form-control')); ?>
<?= $validator->error('clg_address'); ?>

</div>
</div>

<div class="row"><div class="col-md-3"></div>
                    <div class="col-md-9">
COLLEGE PINCODE:

<?= $form->textBox('clg_pin',array('class'=>'form-control')); ?>
<?= $validator->error('clg_pin'); ?>

</div>
</div>

<div class="row"><div class="col-md-3"></div>
                    <div class="col-md-9">
COLLEGE TELEPHONE:

<?= $form->textBox('clg_tele',array('class'=>'form-control')); ?>
<?= $validator->error('clg_tele'); ?>

</div>
</div>

<div class="row"><div class="col-md-3"></div>
                    <div class="col-md-9">
EMAIL:

<?= $form->textBox('clg_email',array('class'=>'form-control')); ?>
<?= $validator->error('clg_email'); ?>

</div>
</div>

<div class="row"><div class="col-md-3"></div>
                    <div class="col-md-9">
WEBSITE:

<?= $form->textBox('clg_site',array('class'=>'form-control')); ?>
<?= $validator->error('clg_site'); ?>

</div>
</div>


<div class="row"><div class="col-md-3"></div>
                    <div class="col-md-9">

VOTER IMAGE:

<?= $form->fileField('clg_image',array('class'=>'form-control')); ?>


</div>
</div>
</div>
&nbsp;&nbsp;&nbsp;


<button type="submit" name="btn_update"  >SUBMIT</button>

</form>


</body>

</html>
