<?php require('../config/autoload.php'); ?>

<?php
$dao=new DataAccess();
?>
<?php include('head.php'); ?>

    
    <div class="container_gray_bg" id="home_feat_1">
    <div class="container">
    	<div class="row-md-8">
        
            <div class="col-md-8">
            <div class="row-lg-6">
           <center> <h2 class="main-title" class="text-center p-3">ELECTION POSITIONS</h2></center>
                <table  border="1" class="table" style="margin-top:100px;">
                    <tr>
                        
                        <th>ELECTION ID</th>
                        <th>ELECTION NAME</th>
                        
                        
                        
                     
                      
                    </tr>
<?php
    
    $actions=array(
    //'edit'=>array('label'=>'Edit','link'=>'EDITPOST.php','params'=>array('id'=>'post_id'),'attributes'=>array('class'=>'btn btn-success')),
    
   // 'delete'=>array('label'=>'Delete','link'=>'EDITDEP.php','params'=>array('id'=>'dep_id'),'attributes'=>array('class'=>'btn btn-success'))//
    
    );

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('post_id')
        
        
    );

   
   $join=array(
        
    );  $fields=array('post_id','post_name');

    $users=$dao->selectAsTable($fields,'post as pt',1,NULL,null,$config);
    
    echo $users;
                    
                    
                   
    
?>
             
                </table>
            </div>    

             <div class="row-md-3">
            <div class="col-md-6">
    <a href="VIEWELECTION.php" class="button solid-color">BACK</a>
    </div>
    </div>
            
              
            
        </div><!-- End row -->
    </div><!-- End container -->
    
    </div><!-- End container_gray_bg -->
    
   
