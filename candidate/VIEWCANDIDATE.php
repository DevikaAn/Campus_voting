<?php require('../config/autoload.php'); ?>

<?php
$dao=new DataAccess();
?>
<?php include('./chead.php'); ?>

    
   <div class="h2-wrap" >
      <div class="container">
        <div class="row">
        <div class="col-md-12">
          <h3 class="standard-block">College Union Election 2020-2021</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="container_gray_bg" id="home_feat_1">
    <div class="container">
    	<div class="row">
            <div class="col-md-12">
            <center> <h2 class="main-title" class="text-center p-3">CANDIDATES LIST</h2></center>
                <table  border="1" class="table" style="margin-top:100px;">
                    <tr >
                          <th>CANDIDATE ID</th>
                        <th>CANDIDATE NAME</th>
                         <th>LAST NAME</th>
                        <th>ELECTION NAME</th>
                        <th>CANDIDATE IMAGE</th>
                      
                    </tr>
<?php

    $actions=array(
    //'edit'=>array('label'=>'APPLY','link'=>'APPROVECAND.php','params'=>array('id'=>'c_id'),'attributes'=>array('class'=>'btn btn-success')),
    
    //'delete'=>array('label'=>'REJECT','link'=>'REJECTCAND.php','params'=>array('id'=>'c_id'),'attributes'=>array('class'=>'btn btn-success'))
    
    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('c_id'),
		'actions_td'=>false,
		'images'=>array(
		       'field'=>'cand_image',
			   'path'=>'../upload/',
			   'attributes'=>array('style'=>'width:100px;'))
        
      
    );
$condition="c_status='ACCEPTED'";
   
   $join=array(
         'post as pt'=>array('pt.post_id=c.post_id','join'),
    ); 
	 $fields=array('c_id','c_name','c_lastname','post_name','cand_image');

    $users=$dao->selectAsTable($fields,'candidate as c',$condition,$join,$actions,$config);
    
    echo $users;?>
             
                </table>
            </div>    

            
            
            
            
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->
    <hr><br>
     <?php include ('foot.php');?>
    
