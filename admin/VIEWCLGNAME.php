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
                        
                        <div class="row-form group">
            <div class="col-md-10">
               <div class="alert alert-info">
                                <table  class="table" style="margin-top:20px;">
                                    <thead>
                    <tr>
                    <th>COLLEGE ID </th>
                          <th>COLLEGE NAME</th>
                       
                       <th>Edit</th>
                       
                    </tr>
<?php

    $actions=array(
    'edit'=>array('label'=>'EDIT','link'=>'EDITCLGNAME.php','params'=>array('id'=>'clg_id'),'attributes'=>array('class'=>'btn btn-success')),
    
   //'add'=>array('label'=>'ADD','link'=>'COLLEGE.php','params'=>array('id'=>'clg_id'),'attributes'=>array('class'=>'btn btn-success'))
    
    );

    $config=array(
       // 'srno'=>true,
        //'hiddenfields'=>array('clg_id'),
		
    );

   
   $join=array(
         
    ); 
	 $fields=array('clg_id','clg_name');

    $users=$dao->selectAsTable($fields,'college as c',1,NULL,$actions,null);
    
    echo $users;?>
             
                </table>
            </div>    

            
            
            <a href="VIEWCLG.php" class = "btn btn-primary btn-outline"><i class = "fa fa-table"></i> more details</a>
            
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->
    
    
