<?php require('../config/autoload.php'); ?>

<?php
$dao=new DataAccess();
?>
<?php include('./vhead.php'); ?>

    
    <div class="container_gray_bg" id="home_feat_1">
    <div class="container">
    	<div class="row">
            <div class="col-md-12">
                <table  border="1" class="table" style="margin-top:100px;">
                    <tr>
                          <th>CANDIDATE ID</th>
                        <th>CANDIDATE NAME</th>
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
$condition="c_status='A'";
   
   $join=array(
         'post as pt'=>array('pt.post_id=c.post_id','join'),
    ); 
	 $fields=array('c_id','c_name','post_name','cand_image');

    $users=$dao->selectAsTable($fields,'candidate as c',$condition,$join,$actions,$config);
    
    echo $users;?>
             
                </table>
            </div>    

            
            
            
            
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->
    
    
