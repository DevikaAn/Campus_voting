<?php require('../config/autoload.php'); ?>
<?php include ('SESSION.php');?>
<?php
$dao=new DataAccess();
?>

<?php include('ahead.php'); ?>

    <body>

   <div id="wrapper">
 <!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line"> ELECTION CANDIDATES FINAL LIST</h4>
                
                            </div>

        </div>  
      
      	
                        
              <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            NOMINATION APPROVED
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                            <br>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                               
                        
             
                               
                                    <thead>
                                        <tr>
                                         
                                            <th>ID</th>
                        <th>Candidate Name</th>
                        <th>Last Name</th>
                        <th>Election Name</th>
                        <th>Batch</th>
                        <th>Reason</th>
                        <th> Image</th>
                        <th> Contact</th>
                       
                        
                        
                        
                                           
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
<?php

    $actions=array(
   // 'edit'=>array('label'=>'APPLY','link'=>'CACCEPT.php','params'=>array('id'=>'c_id'),'attributes'=>array('class'=>'btn btn-success')),
    
    'delete'=>array('label'=>'DETAILS','link'=>'CAND_CONTACT.php','params'=>array('id'=>'c_id'),'attributes'=>array('class'=>'btn btn-info'))
    
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
         'post as pt'=>array('pt.post_id=c.post_id','join'),'batch as b'=>array('b.batch_id=c.batch_id','join'),
    ); 
	 $fields=array('c_id','c_name','c_lastname','post_name','batch_name','c_reason','cand_image');

    $users=$dao->selectAsTable($fields,'candidate as c',$condition,$join,$actions,$config);
    
    echo $users;?>
             
                </table>
            </div>    
</div></div>    

            
            </div>
            
            
            </div></div>
            
            </div>
                       
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- DATATABLE SCRIPTS  -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
            
           <hr>
             
<?php include ('foot_ca.php')?>
       
       