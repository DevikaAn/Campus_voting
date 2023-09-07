<?php require('../config/autoload.php'); ?>
<?php include ('SESSION.php');?>
<?php
$dao=new DataAccess();
?>

<?php include('vhead.php'); ?>

    <body>

     <div id="wrapper">
 <!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line"> STUDENT COUNCIL ELECTION 2020-2021</h4>
                
                            </div>

        </div>  
      

      
      	 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">	
                </div>
           
                       <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="modal-title" id="myModalLabel">         
												<div class="panel panel-primary">
													<div class="panel-heading">
														REJECTED Candidates List
													</div>    
												</div>
											</h4>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        
             
                               
                                    <thead>
                                        <tr>
                                         
                                            <th>CANDIDATE ID</th>
                        <th> NAME</th>
                         <th> LAST NAME</th>
                        <th>ELECTION NAME</th>
                         <th>BATCH</th>
                         <th>REASON</th>
                        <th> IMAGE</th>
                       
                        
                        
                        
                                           
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
<?php

    $actions=array(
   // 'edit'=>array('label'=>'APPLY','link'=>'CACCEPT.php','params'=>array('id'=>'c_id'),'attributes'=>array('class'=>'btn btn-success')),
    
    //'delete'=>array('label'=>'REJECT','link'=>'CREJECT.php','params'=>array('id'=>'c_id'),'attributes'=>array('class'=>'btn btn-success'))
    
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
$condition="c_status='REJECTED'";
   
   $join=array(
         'post as pt'=>array('pt.post_id=c.post_id','join'),'batch as b'=>array('b.batch_id=c.batch_id','join'),
    ); 
	 $fields=array('c_id','c_name','c_lastname','post_name','batch_name','c_reason','cand_image');

    $users=$dao->selectAsTable($fields,'candidate as c',$condition,$join,$actions,$config);
    
    echo $users;?>
             
                </table>
            </div>    

            
            </div>
                       
   
            
            <?php include ('script.php');?>
       