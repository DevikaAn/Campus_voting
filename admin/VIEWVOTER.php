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
              
                
                            </div>

        </div>  
       <a href="VOTERSLIST.php" class = "btn btn-info btn-outline"><i class = "fa fa-user"></i> ADD VOTERS  </a><hr>
      
                        
              <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            VOTERS  LIST
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                            <br>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
 <thead>
                    <tr>
                          <th>VOTER ID</th>
                        <th>VOTER NAME</th>
                        
                          <th>STATUS</th>
                          <th>IMAGE</th>
                          <th>BATCH NAME</th>
                       <th>UPDATION</th>
                        </tr>
                                    </thead>
                                    <tbody>
<?php

    $actions=array(
     'edit'=>array('label'=>'EDIT','link'=>'EDITVOTER.php','params'=>array('id'=>'voter_id'),'attributes'=>array('class'=>'btn btn-info')),
	 'delete'=>array('label'=>'DELETE','link'=>'DELETE_VOTER.php','params'=>array('id'=>'voter_id'),'attributes'=>array('class'=>'btn btn-info')),
	  'select'=>array('label'=>'DETAILS','link'=>'VOTER_CONTACT.php','params'=>array('id'=>'voter_id'),'attributes'=>array('class'=>'btn btn-info')),
    
    
    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('voter_id'),
		'actions_td'=>false,
		'images'=>array(
		       'field'=>'v_image',
			   'path'=>'../upload/',
			   'attributes'=>array('style'=>'width:100px;'))
        
      
    );
//$condition="status='V'";
   
   $join=array(
         'batch as b'=>array('b.batch_id=v.batch_id','join'),
    ); 
	 $fields=array('voter_id','v_name','status','v_image','b.batch_name');

    $users=$dao->selectAsTable($fields,'voter as v',1,$join,$actions,$config);
    
    echo $users;?>
             
                </table>
            </div>    
</div></div>    

            
            </div>
            
            
            </div>
            
            
            
            
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
       