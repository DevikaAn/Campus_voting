<?php require('../config/autoload.php'); ?>
<?php
	

include("ahead.php");
$dao=new DataAccess();
$info=$dao->getData('*','post','post_id='.$_GET['id']);

$elements=array(
        "post_name"=>$info[0]['post_name']);  

	$form = new FormAssist($elements,$_POST);

$labels=array("post_name"=>"ELECTION NAME" );

$rules=array(
    "post_name"=>array("required"=>true,"minlength"=>2,"maxlength"=>40,"alphaspaceonly"=>true)
     
);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_update"]))
{
if($validator->validate($_POST))
{
$data=array(

         'post_name'=>$_POST['post_name'],
		 //'simage'=>$_POST['simage'],
    );
  $condition='post_id='.$_GET['id'];

    if($dao->update($data,'post',$condition))
    {
        $msg="Successfullly Updated";
header('location:VIEWPOST.php');
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
                <h4 class="header-line">ELECTION POSITION</h4>
                
                            </div>

        </div>
             <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                           EDIT POSITION NAME
                        </div>
                        <div class="panel-body">
	<form action="" method="POST" >
 
 
<div class="row">
                    <div class="col-md-6">
ELECTION NAME:

<?= $form->textBox('post_name',array('class'=>'form-control')); ?>
<?= $validator->error('post_name'); ?>

</div>
</div>



</div>

&nbsp;&nbsp;&nbsp;



<button class="btn btn-danger" name="btn_update"  ><i class=" fa fa-refresh "></i>UPDATE</button>
</form>

</body>
</html>
	
	
	
	
	
	
	