<?php 

 require('../config/autoload.php'); 
	include("ahead.php");


$elements=array(
        "post_name"=>"");
		
		$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array("post_name"=>"POSITION NAME");

$rules=array(
  
    "post_name"=>array("required"=>true,"minlength"=>2,"maxlength"=>20)
	);
	
	$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_insert"]))
{
if($validator->validate($_POST))
{
$data=array(

        
        'post_name'=>$_POST['post_name'],
		 //'simage'=>$_POST['simage'],
              //'simage'=>$_POST['simage'],
    );
  
    if($dao->insert($data,"post"))
    {
        echo "<script> alert('New record created successfully');</script> ";
header('location:POSITION.php');
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
                <h4 class="header-line"> ELECTION POSITIONS</h4>
                
                            </div>

        </div>
             <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                           ADD POSITIONS
                        </div>
                        <div class="panel-body">
 <form action="" method="POST" >
 
<div class="row">
                    <div class="col-md-6">
Name:

<?= $form->textBox('post_name',array('class'=>'form-control')); ?>
<?= $validator->error('post_name'); ?>

</div>
</div>


<button type="submit" name="btn_insert"  >Submit</button>
<div class="right-div">
                <a href="VIEWPOST.php" class="btn btn-info pull-right"><i class="fa fa-refresh"></i>Back</a>
            </div>

</form>
</div>
</div>
</div>
</div>



</body>

</html>

 <hr>
             
<?php include ('foot_ca.php')?>  
                    
                    
	