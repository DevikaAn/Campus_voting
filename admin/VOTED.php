<?php require('../config/autoload.php'); ?>
<?php include ('SESSION.php');?>
<?php include ('vhead.php');?>

<body>
     <div id="wrapper">
 <!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line"> VOTED<?php $count2 = $conn->query("SELECT COUNT(*) as total FROM `voter` WHERE `status` = 'Voted'")->fetch_array(); ?>
                    <a href="" class = ""></i> (<?php echo $count2['total']?>)</a></h4>
					
                </div>
				
				
				 
               
				
				
				&nbsp;	
			<button type="button" onClick="window.print();" style = "margin-right:14px;" id ="print" class = "pull-right btn btn-info"><i class = "fa fa-print"></i>PRINT</button>
			<br>
			
				
                   
				
                 <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                
                            </div>

        </div>  
				
                 
				
				<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                         REPORT LIST
                        </div>
                         <div class="panel-body">
                            <div class="table-responsive">
                            <br>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                               
                                    <thead>
                                        <tr>
                                         
                                            <th>username</th>
                                            <th>Name</th>
                                            <th>batch</th>
                                            <th>status</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php 
											require 'dbcon.php';
											
											$query = $conn->query("SELECT * FROM voter where status ='voted' ORDER BY voter_id DESC");
											while($row1 = $query->fetch_array()){
											$voter_id=$row1['voter_id'];
										?>
                                      
											<tr>
												<td><?php echo $row1 ['v_username'];?></td>
												<td><?php echo $row1 ['v_name'];?></td>
												 <?php 
											 $abc=$row1 ['batch_id'];
$batch=mysqli_query($conn,"select batch_name from batch where batch_id='$abc' ");
$f = mysqli_fetch_array($batch); ?>
                                            <td><?php echo $f ['batch_name'];?></td>
												<td><?php echo $row1 ['status'];?></td>		
											</tr>
										
                                       <?php } ?>
                                    </tbody>
                                </table>
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
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->



    </div>
    <!-- /#wrapper -->

   

</body>

</html>

