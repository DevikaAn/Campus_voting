
<?php require('../config/autoload.php'); 
 ?>
<?php
include("ahead.php");
$dao=new DataAccess();
$info=$dao->getData('*','candidate','c_id='.$_GET['id']);
$file=new FileUpload();
//$file=new FileUpload();
$elements=array(
        "c_name"=>$info[0]['c_name'],"c_lastname"=>$info[0]['c_lastname'],"c_username"=>$info[0]['c_username'],"c_gender"=>$info[0]['c_gender'],"c_address"=>$info[0]['c_address'],"c_email"=>$info[0]['c_email'],"c_phn"=>$info[0]['c_phn'],"cand_image"=>$info[0]['cand_image'],"s_date"=>$info[0]['s_date']);

$form=new FormAssist($elements,$_POST);

//$dao=new DataAccess();

$labels=array('c_name'=>" Name","c_lastname"=>"Candidate LastName","c_username"=>"username","c_password"=>"Password","cfm_password"=>"Confirm Password","c_gender"=>"gender","c_address"=>"address","c_email"=>"mail","c_phn"=>"phone number","s_date"=>"Submission date","cand_image"=>"phone number");

$rules=array( "c_name"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"alphaspaceonly"=>true),
	 "c_lastname"=>array("required"=>true,"minlength"=>3,"maxlength"=>30),
 
  "c_username"=>array("required"=>true,"minlength"=>3,"maxlength"=>30),
  "c_address"=>array("required"=>true,"minlength"=>3,"maxlength"=>30),
	 "c_gender"=>array("required"=>true,"exist"=>array("m","f")),
 
  "c_email"=>array("required"=>true,"email"=>true,"unique"=>array("field"=>"c_email","table"=>"candidate")),
  "c_phn"=>array("required"=>true,"minlength"=>2,"maxlength"=>20,"integeronly"=>true),
	
	   	 
	"s_date"=>array("required"=>true),
	
    "cand_image"=> array('filerequired'=>true),
	
    
       

);






    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_update"]))
{
if($validator->validate($_POST))
{

$data=array(

       'c_name'=>$_POST['c_name'],
		'c_lastname'=>$_POST['c_lastname'],
				
				'c_username'=>$_POST['c_username'],
          	'c_address'=>$_POST['c_address'],
		  'c_gender'=>$_POST['c_gender'],
      
		  'c_email'=>$_POST['c_email'],
		    'c_phn'=>$_POST['c_phn'],
				
				
				 's_date'=>$_POST['s_date'],
				
				'cand_image'=>$fileName,

'c_status'=>"ACCEPTED",  
    );
  $condition='c_id='.$_GET['id'];
 ?></span>

<?php
    
}


}

if(isset($_POST['back']))
{
  header('location:ACCCAND.php');
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
                <center><h3 class="header-line">CANDIDATE PERSONAL DETAILS</h3></center>
                
                            </div>

        </div> 
        <div class="container">

            
            <form action="" method="POST" enctype="multipart/form-data">
 
 <br>
 <img style="width:100px" src=<?php echo BASE_URL."upload/".$info[0]["cand_image"]; ?> alt=" " class="img-responsive" /><br>
<div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
<label for="">First Name:</label>


<input type="text" value="<?php echo $info[0]['c_name']; ?>" disabled class="form-control">

</div>
</div>

                    <div class="col-md-6">
                    <div class="form-group">
<label for="">Last Name:</label>

<input type="text" value="<?php echo $info[0]['c_lastname']; ?>" disabled class="form-control">

</div>
</div></div>
<br>



                         <div class="row"><div class="col-md-3"></div>
                    <div class="col-md-6">

                    
                    <div class="form-group">
<label for="">Gender :</label><br>

                       <input type="text" value="<?php echo $info[0]['c_gender']; ?>" disabled class="form-control">
                               
                               
                        </div></div></div><br>
                       
                      <div class="row"><div class="col-md-3"></div>
                    <div class="col-md-6">

                    
                    <div class="form-group">
<label for="">ADDRESS :</label>

<input type="text" value="<?php echo $info[0]['c_address']; ?>" disabled class="form-control">

</div>
</div>


                   <div class="col-md-3"></div>
                    <div class="col-md-6">

                    
                    <div class="form-group">
<label for="">Username:</label>


<input type="text" value="<?php echo $info[0]['c_username']; ?>" disabled class="form-control">

</div>
</div></div>


  <div class="row"><div class="col-md-3"></div>
                    <div class="col-md-6">

                    
                    <div class="form-group">
<label for="">Contact Number:</label>


<input type="text" value="<?php echo $info[0]['c_phn']; ?>" disabled class="form-control">

</div>
</div></div>


                      <div class="row"><div class="col-md-3"></div>
                    <div class="col-md-6">

                    
                    <div class="form-group">
<label for="">Email :</label>

                            <input type="text" value="<?php echo $info[0]['c_email']; ?>" disabled class="form-control">
                               
                               
                        </div></div></div>
                                              
<div class="row"><div class="col-md-3"></div>
                    <div class="col-md-6">

                    
                    <div class="form-group">
<label for="">Submission date :</label>

<input type="text" value="<?php echo $info[0]['s_date']; ?>" disabled class="form-control">

</div>
</div>

      

	<div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    
                    <input type="submit" name="back" value="Back " class="btn btn-info btn-block" class="text-center p-5">
                </div>
            </div>
           
     
</form>


</body>

</html>
