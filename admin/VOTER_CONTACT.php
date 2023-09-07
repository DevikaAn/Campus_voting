
<?php require('../config/autoload.php'); 
 ?>
<?php
include("ahead.php");
$dao=new DataAccess();
$info=$dao->getData('*','voter','voter_id='.$_GET['id']);
$file=new FileUpload();
//$file=new FileUpload();
$elements=array(
        "v_admno"=>$info[0]['v_admno'],"v_name"=>$info[0]['v_name'],"v_address"=>$info[0]['v_address'],"v_gender"=>$info[0]['v_gender'],"v_email"=>$info[0]['v_email'],"v_mob"=>$info[0]['v_mob'],"v_username"=>$info[0]['v_username'],"v_password"=>$info[0]['v_password'],"v_image"=>$info[0]['v_image']);

$form=new FormAssist($elements,$_POST);

//$dao=new DataAccess();

$labels=array('v_admno'=>"voter admission number","v_name"=>"voter name","v_address"=>"voter address","v_gender"=>"voter gender","v_email"=>"voter mail id", "v_mob"=>"voter mobile number","v_username"=>"voter username","v_password"=>"voter password","v_image"=>"VOTER IMAGE");

$rules=array(  "v_admno"=>array("required"=>true,"minlength"=>3,"maxlength"=>30),
	"v_name"=>array("required"=>true,"minlength"=>3,"maxlength"=>30),
	"v_address"=>array("required"=>true,"minlength"=>3,"maxlength"=>30),
	 "v_gender"=>array("required"=>true,"exist"=>array("m","f")),
 
  "v_email"=>array("required"=>true,"email"=>true,"unique"=>array("field"=>"v_email","table"=>"voterlist")),
  "v_mob"=>array("required"=>true,"minlength"=>2,"maxlength"=>20,"integeronly"=>true),
   "v_username"=>array("required"=>true,"minlength"=>3,"maxlength"=>30),
    "v_password"=>array("required"=>true,"minlength"=>3,"maxlength"=>30),
	
	 "v_image"=> array('filerequired'=>true),
    
       

);






    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_update"]))
{
if($validator->validate($_POST))
{

$data=array(

      'v_admno'=>$_POST['v_admno'],
        'v_name'=>$_POST['v_name'],
          'v_address'=>$_POST['v_address'],
		  'v_gender'=>$_POST['v_gender'],
        
		  'v_email'=>$_POST['v_email'],
		    'v_mob'=>$_POST['v_mob'],
			  'v_username'=>$_POST['v_username'],
			    'v_password'=>$_POST['v_password'],
				
				'v_image'=>$fileName,
//'c_status'=>"ACCEPTED",  
    );
  $condition='voter_id='.$_GET['id'];
 ?></span>

<?php
    
}


}

if(isset($_POST['back']))
{
  header('location:VIEWVOTER.php');
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
                <center><h3 class="header-line">VOTERS PERSONAL DETAILS</h3></center>
                
                            </div>

        </div> 
        <div class="container">
            <form action="" method="POST" enctype="multipart/form-data">
 
 <br>
 <img style="width:100px" src=<?php echo BASE_URL."upload/".$info[0]["v_image"]; ?> alt=" " class="img-responsive" /><br>
<div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
<label for="">Name:</label>


<input type="text" value="<?php echo $info[0]['v_name']; ?>" disabled class="form-control">

</div>
</div>

                    <div class="col-md-6">
                    <div class="form-group">
<label for="">Admission NO:</label>

<input type="text" value="<?php echo $info[0]['v_admno']; ?>" disabled class="form-control">

</div>
</div></div>
<br>



                         <div class="row"><div class="col-md-3"></div>
                    <div class="col-md-6">

                    
                    <div class="form-group">
<label for="">Gender :</label><br>

                       <input type="text" value="<?php echo $info[0]['v_gender']; ?>" disabled class="form-control">
                               
                               
                        </div></div></div><br>
                       
                      <div class="row"><div class="col-md-3"></div>
                    <div class="col-md-6">

                    
                    <div class="form-group">
<label for="">ADDRESS :</label>

<input type="text" value="<?php echo $info[0]['v_address']; ?>" disabled class="form-control">

</div>
</div>


                   <div class="col-md-3"></div>
                    <div class="col-md-6">

                    
                    <div class="form-group">
<label for="">Username:</label>


<input type="text" value="<?php echo $info[0]['v_username']; ?>" disabled class="form-control">

</div>
</div></div>

 <div class="col-md-3"></div>
                    <div class="col-md-6">

                    
                    <div class="form-group">
<label for="">Password:</label>


<input type="text" value="<?php echo $info[0]['v_password']; ?>" disabled class="form-control">

</div>
</div></div>
  <div class="row"><div class="col-md-3"></div>
                    <div class="col-md-6">

                    
                    <div class="form-group">
<label for="">Contact Number:</label>


<input type="text" value="<?php echo $info[0]['v_mob']; ?>" disabled class="form-control">

</div>
</div></div>


                      <div class="row"><div class="col-md-3"></div>
                    <div class="col-md-6">

                    
                    <div class="form-group">
<label for="">Email :</label>

                            <input type="text" value="<?php echo $info[0]['v_email']; ?>" disabled class="form-control">
                               
                               
                        </div></div></div>
                                              

      

	<div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    
                    <input type="submit" name="back" value="Back " class="btn btn-info btn-block" class="text-center p-5">
                </div>
            </div>
           
     
</form>


</body>

</html>
