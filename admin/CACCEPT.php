<?php 

 require('../config/autoload.php'); 
	include("ahead.php");
include("dbcon.php");

$elements=array(
        "c_reason"=>"");
		
		$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array("c_reason"=>"ACCEPT REASON" );

$rules=array(
    "c_reason"=>array("required"=>true,"minlength"=>3,"maxlength"=>50)
    
     
);
$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_insert"]))
{
if($validator->validate($_POST))
{
$data=array(

        'c_reason'=>$_POST['c_reason'],
		
		//'simage'=>$_POST['simage'],
    );
	
   $condition='c_id='.$_GET['id'];
   $id=$_GET['id'];
$sql= "update CANDIDATE set c_status='ACCEPTED' where c_id=".$id;
$conn->query($sql);
    if($dao->update($data,"candidate",$condition))
	 {
        echo "<script> alert('NOMINATION ACCEPTED');</script> ";
echo "<script>location.replace('VIEWCANDIDATE.php');</script> ";
    }
    else
        {$msg="Registration failed";} ?>



<?php
    
}


}


?>
<html>
<head>
</head>
<body>
<form style="align-content: center;" action="" method="POST" >
 
               <div class="jumbotron">
        <div class="container">
           <div id="news" class="w3ls-section">
        <div class="container">
            <h4 class="main-title" class="text-center p-5">UPDATION</h4><br>
 <form action="" method="POST"  enctype="multipart/form-data" >
 

 
<div class="row"><div class="col-md-3"></div>
                    <div class="col-md-6">

 REASON FOR ACCEPT:

<?= $form->textBox('c_reason',array('class'=>'form-control')); ?>
<?= $validator->error('c_reason'); ?>

</div>
</div>



<div style="padding-top:20px" class="row"><div class="col-md-3"></div>
                    <div class="col-md-6">
<input class="form-control" action="VIEWCANDIDATE.php" style="color:blue;background-color:lightblue;" type="submit" name="btn_insert" value="submit">
</div>
</div>
</form>

</body>

</html>






    
