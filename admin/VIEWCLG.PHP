<?php require('../config/autoload.php'); ?>

<?php
$dao=new DataAccess();
?>
<?php include('./ahead.php'); ?>

    <div class="panel panel-default">
                        <div class="panel-heading">
                        
                            <h4 class="modal-title" id="myModalLabel">         
												<div class="panel panel-primary">
                                                
													<div class="panel-heading"><i class = "fa fa-book"></i>
														ABOUT COLLEGE
													</div>    
												</div>
											</h4>
                        </div>
                        
                        <a href="COLLEGE.php" class = "btn btn-primary btn-outline"><i class = "fa fa-table"></i> OPTIONAL </a>
    <!-- /.panel-heading -->
                         <div class="panel-body">
                            <div class="table-responsive">
                                <table  class="table" style="margin-top:20px;">
                                    <thead>
                    <tr>
                          <th>College ID</th>
                        
                         <th> Address</th>
                        
                        <th> pincode</th>
                         <th> Telephone</th>
                         <th>Image</th>
                         <th>Email</th>
                      <th>Website</th>
                       <th>Edit</th>
                       
                    </tr>
<?php

    $actions=array(
    'edit'=>array('label'=>'EDIT','link'=>'EDITCLG.php','params'=>array('id'=>'clg_id'),'attributes'=>array('class'=>'btn btn-info')),
    
   //'add'=>array('label'=>'ADD','link'=>'COLLEGE.php','params'=>array('id'=>'clg_id'),'attributes'=>array('class'=>'btn btn-success'))
    
    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('clg_id'),
		'actions_td'=>false,
		'images'=>array(
		       'field'=>'clg_image',
			   'path'=>'../upload/',
			   'attributes'=>array('style'=>'width:100px;'))
        
      
    );

   
   $join=array(
         
    ); 
	 $fields=array('clg_id','clg_address','clg_pin','clg_tele','clg_image','clg_email','clg_site');

    $users=$dao->selectAsTable($fields,'college as c',1,NULL,$actions,$config);
    
    echo $users;?>
             
                </table>
            </div>    

            
            
            
            
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->
    
    
