<?php require('../config/autoload.php'); ?>

<?php
	

include("chead.php");
$dao=new DataAccess();
$info=$dao->getData('*','candidate','c_id='.$_GET['id']);
    
$file=new FileUpload();

$elements=array(
            
        "c_name"=>$info[0]['c_name'] ,
 "c_lastname"=>$info[0]['c_lastname'],

   "post_id"=>$info[0]['post_id'], 
    "batch_id"=>$info[0]['batch_id'],
  "cand_image"=>"",
    
  
  );
 
	$form = new FormAssist($elements,$_POST);

$labels=array("c_id"=>"CANDIDATE ID","c_name"=>"CANDIDATE NAME","c_lastname"=>"CANDIDATE LASTNAME","post_id"=>"POSITION NAME", "batch_id"=>"BATCH NAME","cand_image"=>"CANDIDATE IMAGE");

$rules=array(
   
     "c_name"=>array("required"=>true,"minlength"=>3,"maxlength"=>30),

	"c_lastname"=>array("required"=>true,"minlength"=>3,"maxlength"=>30),
 "post_id"=>array("required"=>true),
  
  "batch_id"=>array("required"=>true),
   
	
	 "cand_image"=> array('filerequired'=>true),
	 
);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_update"]))
{
if($validator->validate($_POST))
{
	if(isset($_FILES['cand_image']['c_name'])){
			if($fileName=$file->doUploadRandom($_FILES['cand_image'],array('.jpg','.png','.jpeg'),100000,5,'../upload'))
			{
				$flag=true;
					
			}
}
$data=array(

          'c_name'=>$_POST['c_name'],
         
		  'c_lastname'=>$_POST['c_lastname'],
        
		  'post_id'=>$_POST['post_id'],
		  'batch_id'=>$_POST['batch_id'],
				
				//'v_image'=>$fileName,
				
		 //'simage'=>$_POST['simage'],
    );
  $condition='c_id='.$_GET['id'];
if(isset($flag))
			{	$data['cand_image']=$fileName;
		
			}
    if($dao->update($data,'candidate',$condition))
    {
        $msg="Successfullly Updated";
//header('location:VIEWVOTER.php');
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


	<form action="" method="POST" enctype="multipart/form-data" >
 
<div class="row">
                    <div class="col-md-6">
CANDIDATE NAME:

<?= $form->textBox('c_name',array('class'=>'form-control')); ?>
<?= $validator->error('c_name'); ?>

</div>
</div>

 
<div class="row">
                    <div class="col-md-6">
CANDIDATE LAST NAME:

<?= $form->textBox('c_lastname',array('class'=>'form-control')); ?>
<?= $validator->error('c_lastname'); ?>

</div>
</div>



<div class="row">
                    <div class="col-md-6">
BATCH NAME:

<?php
                    $options = $dao->createOptions('batch_name','batch_id',"batch");
                    echo $form->dropDownList('batch_id',array('class'=>'form-control'),$options); ?>
<?= $validator->error('batch_id'); ?>

</div>
</div>


<div class="row">
                    <div class="col-md-6">
POST NAME:

<?php
                    $options = $dao->createOptions('post_name','post_id',"batch");
                    echo $form->dropDownList('post_id',array('class'=>'form-control'),$options); ?>
<?= $validator->error('post_id'); ?>

</div>
</div>




<div class="row">
                    <div class="col-md-6">
CANDIDATE IMAGE:

<?= $form->fileField('cand_image',array('class'=>'form-control')); ?>

</div>
</div>



<button type="submit" name="btn_update"  >UPDATE NOMINATION</button>
<button type="submit" button solid-color name="btn_update"  >DELETE NOMINATION</button>

</form>

</body>
</html>
	
	
	
	
	
	
	