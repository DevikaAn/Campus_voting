<?php 

 require('../config/autoload.php'); 
include("head.php");

$file=new FileUpload();
$elements=array(
        "c_name"=>"", "c_lastname"=>"","post_id"=>"","batch_id"=>"","c_username"=>"","c_password"=>"","cfm_password"=>"","c_gender"=>"","c_address"=>"","c_email"=>"","c_phn"=>"","s_date"=>"","cand_image"=>""
        );



$form=new FormAssist($elements,$_POST);



$dao=new DataAccess();

$labels=array("c_name"=>" Name","c_lastname"=>"Candidate LastName","post_id"=>"post Name","batch_id"=>"BATCH Name","c_username"=>"username","c_password"=>"Password","cfm_password"=>"Confirm Password","c_gender"=>"gender","c_address"=>"address","c_email"=>"mail","c_phn"=>"phone number","s_date"=>"Submission date","cand_image"=>"image");

$rules=array(
    "c_name"=>array("required"=>true,"minlength"=>1,"maxlength"=>30,"alphaspaceonly"=>true),
     "c_lastname"=>array("required"=>true,"minlength"=>1,"maxlength"=>30,"alphaspaceonly"=>true),
  "post_id"=>array("required"=>true),
  "batch_id"=>array("required"=>true),
  "c_username"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"unique"=>array("field"=>"c_username","table"=>"candidate")),
  "c_address"=>array("required"=>true,"minlength"=>3,"maxlength"=>30),
     "c_gender"=>array("required"=>true,"exist"=>array("m","f")),
 "c_email"=>array("required"=>true,"minlength" =>2,"maxlength"=>30,"unique"=>array("field"=>"c_email","table"=>"candidate")),
  "c_phn"=>array("required"=>true,"minlength"=>2,"maxlength"=>10,"integeronly"=>true),
    

    
          "c_password"=>array("required"=>true),
    "cfm_password"=>array("required"=>true,"compare"=>array("comparewith"=>"c_password","operator"=>"=")),
    "s_date"=>array("required"=>true),
    "cand_image"=> array('filerequired'=>true)

);
    
    
$validator = new FormValidator($rules,$labels);

if(isset($_POST["btn_insert"]))
{

if($validator->validate($_POST))
{
    
    if($fileName=$file->doUploadRandom($_FILES['cand_image'],array('.jpg','.png','.jpeg'),10000,5,'../upload'))
        {

$data=array(
 
                'batch_id'=>$_POST['batch_id'],
                'post_id'=>$_POST['post_id'],
        'c_name'=>$_POST['c_name'],
        'c_lastname'=>$_POST['c_lastname'],
               'c_gender'=>$_POST['c_gender'],
      'c_status'=>'APPLY',
       'c_password'=>$_POST['c_password'],
                'c_username'=>$_POST['c_username'],
            'c_address'=>$_POST['c_address'],
          
          'c_email'=>$_POST['c_email'],
            'c_phn'=>$_POST['c_phn'],
                
              'c_reason'=>'', 
              'cand_image'=>$fileName,
                 's_date'=>$_POST['s_date'],
                
                
    );

    if($dao->insert($data,"candidate"))
    {

        echo "<script> alert('New record created successfully');</script> ";
echo "<script>location.replace('../index.html');</script> ";
    }
    else
        {
            echo $dao->getErrors()."YYY";
            $msg="Insertion failed";
        } ?>

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
<div class="box">


<div class="container">
<div id="news" class="w3ls-section">
<div class="container">
<h2 class="main-title" class="text-center p-5"><center>VICTORIA COLLEGE OF SCIENCE AND TECHNOLOGY</center></h2>
<h2 class="main-title" class="text-center p-5"><center> COLLEGE UNION ELECTION 2020-2021 </center></h2><h3 style="font-size:20px;"><center>NOMINATION PAPER</center></h3><br>
<hr><hr>
 <form action="" method="POST" enctype="multipart/form-data">

 <P style="color:red;">Please read the election notification carefully before filling up this Nomination form. Furnish correct
and full information. It is the responsibility of the  candidate to submit the
nomination paper, complete in every respect, to the ELECTION CONTROLLER within the time limit.</P>
 
 
 
 
 
 
 
 
 
 <div class="row form-group">
                    <div class="col-md-9">
THE POST TO WHICH NOMINATION IS SUBMITTED :
<?php
                    $options = $dao->createOptions('post_name','post_id',"post");
                    echo $form->dropDownList('post_id',array('class'=>'form-control'),$options); ?>
<span style="color:red;"><?= $validator->error('post_id'); ?></span>

</div>
</div>
 
 <form action="" method="POST">
</div>
<h2>PART 1 :Consent and Declaration of the Candidate</h2>
<p>I hereby declare that:</p>
<p>(1) I am a full time regular student of the course.</p>
<P>(2) I have no academic arrears as on date. I have passed all the examinations the result of
which have been declared and have not absented from any of the examinations the
results of which are to be declared.</p>
<p>(3) I have attained the minimum percentage of attendance prescribed by the college for the
Course of study or 75%, whichever is higher.</p>
<p>(4) I have not been subjected to disciplinary proceedings by the college.</p>

<p>(5) I will follow the code of conduct for candidates.</p>
<p>(6) I have not been tried and / or convicted of any criminal offence or misdemeanor. </p>

<h2>PART 2 :Nomination Of the Candidate</h2>

<div class="row -md-1">
                    <div class="col-md-9">
 CANDIDATE NAME:

<?= $form->textBox('c_name',array('class'=>'form-control')); ?>
<span style="color:red;"><?= $validator->error('c_name'); ?></span>

</div>
</div><br>
<div class="row form-group">
                    <div class="col-md-9">
CANDIDATE LASTNAME:

<?= $form->textBox('c_lastname',array('class'=>'form-control')); ?>
<span style="color:red;"><?= $validator->error('c_lastname'); ?></span>

</div>
</div>



<div class="row form-group">
                    <div class="col-md-9">
BATCH NAME:

<?php
                    $options = $dao->createOptions('batch_name','batch_id',"batch");
                    echo $form->dropDownList('batch_id',array('class'=>'form-control'),$options); ?>
<span style="color:red;"><?= $validator->error('batch_id'); ?></span>

</div>
</div>
<div class="row form-group">
                    <div class="col-md-9">
CANDIDATE USERNAME:

<?= $form->textBox('c_username',array('class'=>'form-control')); ?>
<span style="color:red;"><?= $validator->error('c_username'); ?></span>


</div>
</div>

<div class="row form-group">
                    <div class="col-md-9">
 ADDRESS:

<?= $form->textBox('c_address',array('class'=>'form-control')); ?>
<span style="color:red;"><?= $validator->error('c_address'); ?></span>

</div>
</div>

<div class="row form-group">
                    <div class="col-md-9">
 GENDER:

<?php
                    $options=array('Male'=>"m","Female"=>"f");
                    echo $form->radioGroup('c_gender',array(),$options); ?>
<span style="color:red;"><?= $validator->error('c_gender'); ?></span>

</div>
</div>
<div class="row form-group">
                    <div class="col-md-9">
 MAIL:

<?= $form->textBox('c_email',array('class'=>'form-control')); ?>
<span style="color:red;"><?= $validator->error('c_email'); ?></span>

</div>
</div>




<div class="row form-group">
                    <div class="col-md-9">
                     MOBILENUMBER:

<?= $form->textBox('c_phn',array('class'=>'form-control')); ?>
<span style="color:red;"><?= $validator->error('c_phn'); ?></span>

</div>
</div>





<div class="row form-group">
                    <div class="col-md-9">
PASSWORD:

                            
                    <?= $form->passwordbox('c_password',array('class'=>'form-control')); ?>
                          <span style="color:red;">  <?= $validator->error('c_password'); ?></span>
            
                               
                               
                        </div>
                         </div>
                         
      <div class="row form-group">
                    <div class="col-md-9">
CONFIRM PASSWORD:
       
                            <?= $form->passwordbox('cfm_password',array('class'=>'form-control')); ?>
                            <span style="color:red;"><?= $validator->error('cfm_password'); ?></span>

                           
                         
                               
                        </div>
                         </div>

 <div class="row form-group">
                    <div class="col-md-9">
SUBMISSION DATE:

<?= $form->inputBox('s_date',array('class'=>'form-control'),"date") ?>
<span style="color:red;"><?= $validator->error('s_date'); ?></span>

</div>
</div>
 <div class="row form-group">
                    <div class="col-md-9">
CANDIDATE IMAGE:

<?= $form->fileField('cand_image',array('class'=>'form-control')); ?>

<span  style="color:red; "><?= $validator->error('cand_image'); ?></span>

</div>
</div>
</div>
</div>
</div>
&nbsp;
<hr>
  
                    <div class="col-md-10">                  

<input type="submit" name="btn_insert" value="FINAL  SUBMIT " class="btn btn-success btn-block" class="text-center p-5">  
</div>

</form>


</body>

</html>
&nbsp;
<hr><br>
<?php include("FOOT.php"); ?>