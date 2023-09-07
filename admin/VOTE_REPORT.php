<?php require('../config/autoload.php'); ?>
<?php include ('SESSION.php');?>
<?php include ('vhead.php');?>

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
							<h4 class = "alert alert-success">VOTE REPORT</h4>	
                        </div>
						
					<br/>
			
			&nbsp;
			&nbsp;	
			<button type="button" onClick="window.print();" style = "margin-right:14px;" id ="print" class = "pull-right btn btn-info"><i class = "fa fa-print"></i>PRINT</button>
			<br>
			<br>
</form>	
                        <div class="panel-body">
                            
						
			
			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "alert alert-success">Candidate for CHAIRPERSON</td>
						<td style = "width:200px;" class = "alert alert-success">Image</td>
						<td class = "alert alert-success">Total</td>
					
					</thead>
					<?php
			require 'dbcon.php';
			$query = $conn->query("SELECT * FROM post JOIN candidate ON post.post_id=candidate.post_id  WHERE post_name ='CHAIRPERSON' AND c_status = 'ACCEPTED'");
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
            
            
							
			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "alert alert-success">Candidate for Vice Chairman</td>
						<td style = "width:200px;" class = "alert alert-success">Image</td>
						<td class = "alert alert-success">Total</td>
					
					</thead>
					<?php
			require 'dbcon.php';
			$query = $conn->query("SELECT * FROM post JOIN candidate ON post.post_id=candidate.post_id  WHERE post_name ='Vice Chairman' AND c_status = 'ACCEPTED'");
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
            
            
            
       		<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;" class = "alert alert-success">Candidate for GENERAL SECRETARY</td>
						<td style = "width:200px;"class = "alert alert-success">Image</td>
						<td class = "alert alert-success">Total</td>
					
					</thead>
					<?php
		require 'dbcon.php';
			$query = $conn->query("SELECT * FROM post JOIN candidate ON post.post_id=candidate.post_id  WHERE post_name ='GENERAL SECRETARY' AND c_status = 'ACCEPTED'");
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
			     
            
            
                
       		<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;" class = "alert alert-success">Candidate for ARTS CLUB SECRETARY</td>
						<td style = "width:200px;"class = "alert alert-success">Image</td>
						<td class = "alert alert-success">Total</td>
					
					</thead>
					<?php
		require 'dbcon.php';
			$query = $conn->query("SELECT * FROM post JOIN candidate ON post.post_id=candidate.post_id  WHERE post_name ='ARTS CLUB SECRETARY' AND c_status = 'ACCEPTED'");
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
            
            
            
            
        
                
       		<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;" class = "alert alert-success">Candidate for MAGAZINE EDITOR</td>
						<td style = "width:200px;"class = "alert alert-success">Image</td>
						<td class = "alert alert-success">Total</td>
					
					</thead>
					<?php
		require 'dbcon.php';
			$query = $conn->query("SELECT * FROM post JOIN candidate ON post.post_id=candidate.post_id  WHERE post_name ='MAGAZINE EDITOR' AND c_status = 'ACCEPTED'");
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

