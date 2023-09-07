<?php require('../config/autoload.php'); ?>
<?php include ('SESSION.php');?>
<?php include ('ahead.php');?>

<body>

    <div id="wrapper">

        

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    
					
                </div>
				
				
				
				
				<hr/>
				
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="modal-title" id="myModalLabel">         
												<div class="panel panel-primary">
							<?php
									require 'dbcon.php';
									//$sort=$_SESSION['position'];
									//echo "$sort";
									$post_name = $_POST['position'];
									
									$sort = $post_name;
									$query = $conn->query("SELECT * FROM post WHERE post_name = '$sort' ");
									
									$fetch = $query->fetch_array();
									{
										
										
								?>
					<div class="panel-heading">
							<center><?php echo $fetch ['post_name'];?>
								<?php }?>
								
					</div>  </center>  
									
												</div>
											</h4>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<a href = "result.php" id="back" class = "btn btn-warning" ><i class = "fa fa-refresh"> </i> Back</a>
						<button onClick="window.print();" style = "margin-right:14px; margin-bottom:12px;" id ="print" class = "pull-right btn btn-info"><i class = "fa fa-print"></i> Print</button>	
                            <div class="table-responsive">
                              <table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;" class = "alert alert-success">Candidate </td>
						<td style = "width:200px;"class = "alert alert-success">Image</td>
						<td class = "alert alert-success">Total</td>
					
					</thead>
					<?php
		require 'dbcon.php';
		//$sort=$_SESSION['position'];
		$post_name = $_POST['position'];
		$sort = $post_name;
		
		//$query = $conn->query("SELECT * FROM post WHERE post_name = '$sort'");
		//$condition="c_status='ACCEPTED'";
		$query = $conn->query("SELECT * FROM post p JOIN candidate c ON c.post_id=p.post_id WHERE post_name = '$sort' and c_status='ACCEPTED' ");
		while($fetch = $query->fetch_array())
		{    
			$id = $fetch['c_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `vote` WHERE c_id = '$id'");
			$fetch1 = $query1->fetch_assoc();
			
	?>
					<tbody> 
						<td><?php echo $fetch ['c_name']. " ".$fetch ['c_lastname'];?></td>
						<td><img src = "../upload/<?php echo $fetch ['cand_image'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>
					
					
			</table>	
			
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
              
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->



    </div>
    <!-- /#wrapper -->

    
</body>

</html>

