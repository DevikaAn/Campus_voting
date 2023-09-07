<?php require('../config/autoload.php'); ?>

<?php
$dao=new DataAccess();
?>
<?php include('ahead.php'); ?>

    
	
				<div id="wrapper">
 <!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line"> BATCH LIST</h4>
                
                            </div>

        </div>  
				
				<a href="BATCH.php" class = "btn btn-info btn-outline"><i class = "fa fa-folder"></i> ADD BATCH</a><hr>
                
				
				<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
														BATCH
													</div>    
												
                        
                         <div class="panel-body">
                            <div class="table-responsive">
                            <br>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                               
                                    <thead>
    
               
                    <tr>
                        
                        <th>BATCH ID</th>
                        <th>BATCH NAME</th>
                        
                        
                        <th>EDIT</th>
                     
                      
                    </tr></thead>
<?php
    
    $actions=array(
    'edit'=>array('label'=>'Edit','link'=>'EDITBATCH.php','params'=>array('id'=>'batch_id'),'attributes'=>array('class'=>'btn btn-info')),
     'delete'=>array('label'=>'DELETE','link'=>'DELETE_BATCH.php','params'=>array('id'=>'batch_id'),'attributes'=>array('class'=>'btn btn-info')),
    
   //'ADD'=>array('label'=>'ADD','link'=>'BATCH.php','params'=>array('id'=>'batch_id'),'attributes'=>array('class'=>'btn btn-success'))//
    
    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('batch_id')
        
        
    );

   
   $join=array(
        
    );  $fields=array('batch_id','batch_name');

    $users=$dao->selectAsTable($fields,'batch as b',1,NULL,$actions,$config);
    
    echo $users;
                    
                    
                   
    
?>
             
                </table>
            </div>    
 </div></div>    

            
            </div></div>    

            
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
    
    
