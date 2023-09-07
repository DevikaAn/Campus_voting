<?php require('../config/autoload.php'); ?>

<?php
$dao=new DataAccess();
?>
<?php include('ahead.php'); ?>

  <!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">ELECTION TIMETABLE FOR 2021</h4>
                
                            </div>

        </div> 
         <a href="ELECTION.php" class = "btn btn-info btn-outline"><i class = "fa fa-share"></i> EVENT DATES UPDATES </a> 
         <a href="TIME.php" class = "btn btn-info btn-outline"><i class = "fa fa-folder"></i> TIME UPDATES </a> 
         <a href="NOMINI_DATE.php" class = "btn btn-info btn-outline"><i class = "fa fa-dashboard"></i>NOMINATION SUBMISSION UPDATES </a> <hr>
  									
                  <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                          ELECTION GUIDELINE
                        </div>
                         <div class="panel-body">
                            <div class="table-responsive">
                            <br>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                               
                                    <thead>
                    <tr>
                         <th>SL NO.</th>
                       
                        <th>Poll Events</th>
                         <th>Date</th>
                          
                         
                          <th>EDIT</th>
                        
                        
                        
                     
                      
                    </tr>   </thead>
<?php
    
    $actions=array(
    
   'edit'=>array('label'=>'EDIT','link'=>'EDIT_ELECTION.php','params'=>array('id'=>'d_id'),'attributes'=>array('class'=>'btn btn-info'))//
    
    );

    $config=array(
        
        
    );

   
   $join=array(
        
    );  $fields=array('d_id','e_name','e_date');

    $users=$dao->selectAsTable($fields,'date as el',1,NULL,$actions,null);
    
    echo $users;
                    
                    
                   
    
?>
             
                </table>
            </div>   </div>   </div>   </div>    

            
            
														
													    <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-6">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
														NOMINATION GUIDELINES
													</div>    
												
                        
                         <div class="panel-body">
                            <div class="table-responsive">
                            <br>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                               
                                    <thead>
                    <tr>
                         <th>SL NO.</th>
                       
                        <th>Nomination  Opens</th>
                         <th>Nomination Due Date</th>
                          
                         
                          <th>EDIT</th>
                        
                        
                        
                     
                      
                    </tr>   </thead>
<?php
    
    $actions=array(
    
   'edit'=>array('label'=>'EDIT','link'=>'NOMINI_EDIT.php','params'=>array('id'=>'e_id'),'attributes'=>array('class'=>'btn btn-info'))//
    
    );

    $config=array(
        
        
    );

   
   $join=array(
        
    );  $fields=array('e_id','from_date','to_date');

    $users=$dao->selectAsTable($fields,'election as el',1,NULL,$actions,null);
    
    echo $users;
                    
                    
                   
    
?>
             
                </table>
            </div>   </div>   </div>   </div>    

            
            									<div class="col-md-6">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
														ELECTION TIME
													</div>    
												
                        
                         <div class="panel-body">
                            <div class="table-responsive">
                            <br>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                               
                                    <thead>
                    <tr>
                         <th>SL NO.</th>
                       
                        <th>Poll Event</th>
                         <th>Time</th>
                          
                         
                          <th>EDIT</th>
                        
                        
                        
                     
                      
                    </tr>   </thead>
<?php
    
    $actions=array(
    
   'edit'=>array('label'=>'EDIT','link'=>'TIME_EDIT.php','params'=>array('id'=>'t_id'),'attributes'=>array('class'=>'btn btn-info'))//
    
    );

    $config=array(
        
        
    );

   
   $join=array(
        
    );  $fields=array('t_id','e_name','poll_time');

    $users=$dao->selectAsTable($fields,'time as el',1,NULL,$actions,null);
    
    echo $users;
                    
                    
                   
    
?>
             
                </table>
            </div>   </div>   </div>   </div>    

            
                
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
<?php include('foot_ca.php'); ?>