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
                <h4 class="header-line"> VIEW SETTINGS </h4>
                
                            </div>

        </div>  
				
                 <a href="settings.php" class = "btn btn-info btn-outline"><i class = "fa fa-folder"></i> NEW PASSWORD </a><hr>
				
				<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                          SETTINGS
                        </div>
                         <div class="panel-body">
                            <div class="table-responsive">
                            <br>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                               
                                    <thead>
                    <tr>
                        
                        <th>ADMIN ID</th>
                        <th>USERNAME</th>
                        
                        
                        <th>PASSWORD</th>
                     
                      <th>EDIT</th>
                    </tr> </thead>
<?php
    
    $actions=array(
    'edit'=>array('label'=>'CHANGE PASSWORD','link'=>'EDIT_SETTING.php','params'=>array('id'=>'admin_id'),'attributes'=>array('class'=>'btn btn-info')),
    
    //'delete'=>array('label'=>'Delete','link'=>'EDITDEP.php','params'=>array('id'=>'dep_id'),'attributes'=>array('class'=>'btn btn-success'))//
    
    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('admin_id')
        
        
    );

   
   $join=array(
        
    );  $fields=array('admin_id','adm_username','adm_password');

    $users=$dao->selectAsTable($fields,'admin_login as dt',1,NULL,$actions,$config);
    
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
