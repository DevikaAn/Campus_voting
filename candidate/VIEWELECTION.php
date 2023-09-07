<?php require('../config/autoload.php'); ?>

<?php
$dao=new DataAccess();
?>
<?php include('chead.php'); ?>
<div class="h2-wrap" >
      <div class="container">
        <div class="row">
        <div class="col-md-12">
          <h4 class="standard-block">ELECTION TIMETABLE</h4>
          </div>
        </div>
      </div>
    </div>
     <!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
            <h2 class="main-title" class="text-center p-5"><center>VICTORIA COLLEGE OF SCIENCE AND TECHNOLOGY</center></h2>
<h2 class="main-title" class="text-center p-5"><center> COLLEGE UNION ELECTION 2020-2021 </center></h2><br>
<hr>
                <h3 >  Schedule for College Students Union Election</h3><br>
                <P>Elections shall be fair, transparent, accessible and provide for freedom of choice; voting shall be
confidential.</P>
                <p>Candidates who are intrested to contest college student's union election 2020-2021 may get the nomination forms from online website itself register those students as candidates. Nomination forms must fill and Submit before Due date.</p>
                <p>They must attach their Photo of current academic Session. </p>
               
                            </div>

        </div> 
   
													<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-success">
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
                          
                         
                         
                        
                        
                        
                     
                      
                    </tr>   </thead>
<?php
    
    $actions=array(
    
   //'edit'=>array('label'=>'EDIT','link'=>'EDIT_ELECTION.php','params'=>array('id'=>'d_id'),'attributes'=>array('class'=>'btn btn-info'))//
    
    );

    $config=array(
         'srno'=>true,
        'hiddenfields'=>array('d_id')
        
        
    );

   
   $join=array(
        
    );  $fields=array('d_id','e_name','e_date');

    $users=$dao->selectAsTable($fields,'date as el',1,NULL,null,$config);
    
    echo $users;
                    
                    
                   
    
?>
             
                </table>
            </div>   </div>   </div>   </div>    

            
            
														
													    <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-6">
                    <!-- Advanced Tables -->
                    <div class="panel panel-danger">
                        <div class="panel-heading">
														NOMINATION GUIDELINE
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
                          
                         
                         
                        
                        
                        
                     
                      
                    </tr>   </thead>
<?php
    
    $actions=array(
    
  // 'edit'=>array('label'=>'EDIT','link'=>'NOMINI_EDIT.php','params'=>array('id'=>'e_id'),'attributes'=>array('class'=>'btn btn-info'))//
    
    );

    $config=array(
         'srno'=>true,
        'hiddenfields'=>array('e_id')
        
        
    );

   
   $join=array(
        
    );  $fields=array('e_id','from_date','to_date');

    $users=$dao->selectAsTable($fields,'election as el',1,NULL,null,$config);
    
    echo $users;
                    
                    
                   
    
?>
             
                </table>
            </div>   </div>   </div>   </div>    

            
            									<div class="col-md-6">
                    <!-- Advanced Tables -->
                    <div class="panel panel-success">
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
                          
                         
                         
                        
                        
                        
                     
                      
                    </tr>   </thead>
<?php
    
    $actions=array(
    
  // 'edit'=>array('label'=>'EDIT','link'=>'TIME_EDIT.php','params'=>array('id'=>'t_id'),'attributes'=>array('class'=>'btn btn-info'))//
    
    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('t_id')
        
    );

   
   $join=array(
        
    );  $fields=array('t_id','e_name','poll_time');

    $users=$dao->selectAsTable($fields,'time as el',1,NULL,null,$config);
    
    echo $users;
                    
                    
                   
    
?>
             
                </table>
            </div>   </div>   </div>   </div>    

            
            
            
            
            
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->
    &nbsp; &nbsp; &nbsp;
    </div>
   
    <hr><br><br><br>
     <?php include ('foot.php');?>
