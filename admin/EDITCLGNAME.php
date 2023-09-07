<?php require('../config/autoload.php'); ?>
<?php


include("ahead.php"); 

 
	
$dao=new DataAccess();
$info=$dao->getData('*','college','clg_id='.$_GET['id']);

$elements=array(
       

 "clg_name"=>$info[0]['clg_name'],
 
 ); 

$form=new FormAssist($elements,$_POST);





$labels=array('clg_name'=>"College");

$rules=array(
   
    "clg_name"=>array("required"=>true,"minlength"=>2,"maxlength"=>70),
     
);
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_update"]))
{
if($validator->validate($_POST))
{
	
$data=array(

        
        'clg_name'=>$_POST['clg_name'],
         
         // 'simage'=>$_POST['simage'],
    );
	 $condition='clg_id='.$_GET['id'];
	
    if($dao->update($data,'college',$condition))
    {    echo"<script>window.alert('updated')</script>";  
        $msg="Successfullly Updated";
header('location:VIEWCLGNAME.php');
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
	<form action="" method="POST"  >
 


<div class="row"><div class="col-md-3"></div>
                    <div class="col-md-9">
COLLEGE:

<?= $form->textBox('clg_name',array('class'=>'form-control')); ?>
<?= $validator->error('clg_name'); ?>

</div>
</div>


&nbsp;&nbsp;&nbsp;


<button type="submit" name="btn_update"  >SUBMIT</button>

</form>


</body>

</html>
