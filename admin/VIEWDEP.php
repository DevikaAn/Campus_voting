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
                <h4 class="header-line"> DEPARTMENT LIST</h4>
                
                            </div>

        </div>  
				
                 <a href="DEPARTMENT.php" class = "btn btn-info btn-outline"><i class = "fa fa-folder"></i> ADD DEPARTMENT </a><hr>
				
				<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                          DEPARTMENTS
                        </div>
                         <div class="panel-body">
                            <div class="table-responsive">
                            <br>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                               
                                    <thead>
                    <tr>
                        
                        <th>DEPARTMENT ID</th>
                        <th>DEPARTMENT NAME</th>
                        
                        
                        <th>EDIT</th>
                     
                      
                    </tr> </thead>
<?php
    
    $actions=array(
    'edit'=>array('label'=>'Edit','link'=>'EDITDEP.php','params'=>array('id'=>'dep_id'),'attributes'=>array('class'=>'btn btn-info')),
     'delete'=>array('label'=>'DELETE','link'=>'DELETE_DEP.php','params'=>array('id'=>'dep_id'),'attributes'=>array('class'=>'btn btn-info')),
    //'delete'=>array('label'=>'Delete','link'=>'EDITDEP.php','params'=>array('id'=>'dep_id'),'attributes'=>array('class'=>'btn btn-success'))//
    
    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('dep_id')
        
        
    );

   
   $join=array(
        
    );  $fields=array('dep_id','dep_name');

    $users=$dao->selectAsTable($fields,'dept as dt',1,NULL,$actions,$config);
    
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
