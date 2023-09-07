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
							<h4 class = "alert alert-info">COLLEGE UNION MEMBERS 2021-2022</h4>	
                        </div>
						
					<br/>
                      &nbsp;	
			<button type="button" onClick="window.print();" style = "margin-right:14px;" id ="print" class = "pull-right btn btn-primary"><i class = "fa fa-print"></i>PRINT</button>
			<br>
			
                        <div class="panel-body">
                            
						
			
		
        
    <table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "alert alert-info">CANDIDATE FOR CHAIRPERSON</td>
						<td style = "width:200px;" class = "alert alert-info">Image</td>
						<td class = "alert alert-info">Total</td>
					
					</thead>
					<?php
			require 'dbcon.php';
			$query1 = $conn->query(" select c_name ,c_lastname,cand_image, v.c_id ,post_id  ,count(voter_id) c1 from vote v ,candidate c where post_id=6 and v.c_id =c.c_id group by c_name , c_lastname ,cand_image ,v.c_id ,post_id  order by c1 desc limit 1
                      ");
			
			
			$fetch1 = $query1->fetch_assoc();
			
	?>
					<tbody> 
						<td><?php echo $fetch1 ['c_name']. " ".$fetch1 ['c_lastname'];?></td>
						<td><img src = "../upload/<?php echo $fetch1 ['cand_image'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['c1'];?></button>	</td>
					<?php ?>
					</tbody>
					
					
					
			</table>	
			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:60px;"class = "alert alert-info">CANDIDATE FOR VICE CHAIRMAN</td>
						<td style = "width:20px;" class = "alert alert-info">Image</td>
						<td class = "alert alert-info">Total</td>
					
					</thead>
					<?php
			require 'dbcon.php';
			//$query = $conn->query("SELECT * FROM post WHERE post_name = 'VICE CHAIRMAN'");
			$query1 = $conn->query(" select c_name ,c_lastname,cand_image, v.c_id ,post_id  ,count(voter_id) c1 from vote v ,candidate c where post_id=2 and v.c_id =c.c_id group by c_name , c_lastname ,cand_image ,v.c_id ,post_id  order by c1 desc limit 1
                      ");
			
			
			$fetch1 = $query1->fetch_assoc();
			
	?>
					<tbody> 
						<td><?php echo $fetch1 ['c_name']. " ".$fetch1 ['c_lastname'];?></td>
						<td><img src = "../upload/<?php echo $fetch1 ['cand_image'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['c1'];?></button>	</td>
					<?php ?>
					</tbody>
					
					
					
			</table>	
			
			
			
			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:60px;"class = "alert alert-info">CANDIDATE FOR GENERAL SECRETARY</td>
						<td style = "width:20px;" class = "alert alert-info">Image</td>
						<td class = "alert alert-info">Total</td>
					
					</thead>
					<?php
			require 'dbcon.php';
			//$query = $conn->query("SELECT * FROM post WHERE post_name = 'VICE CHAIRMAN'");
			$query1 = $conn->query(" select c_name ,c_lastname,cand_image, v.c_id ,post_id  ,count(voter_id) c1 from vote v ,candidate c where post_id=3 and v.c_id =c.c_id group by c_name , c_lastname ,cand_image ,v.c_id ,post_id  order by c1 desc limit 1
                      ");
			
			
			$fetch1 = $query1->fetch_assoc();
			
	?>
					<tbody> 
						<td><?php echo $fetch1 ['c_name']. " ".$fetch1 ['c_lastname'];?></td>
						<td><img src = "../upload/<?php echo $fetch1 ['cand_image'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['c1'];?></button>	</td>
					<?php ?>
					</tbody>
					
					
			</table>	
			
            <table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:60px;"class = "alert alert-info">CANDIDATE FOR ARTS CLUB SECRETARY</td>
						<td style = "width:20px;" class = "alert alert-info">Image</td>
						<td class = "alert alert-info">Total</td>
					
					</thead>
					<?php
			require 'dbcon.php';
			//$query = $conn->query("SELECT * FROM post WHERE post_name = 'VICE CHAIRMAN'");
			//$query = $conn->query("SELECT * FROM post JOIN candidate ON post.post_id=candidate.post_id  WHERE post_name = 'ARTS CLUB SECRETARY' AND c_status = 'ACCEPTED'");
		//while($fetch = $query->fetch_array())
		//{
			//$id = $fetch['c_id'];
			$query1 = $conn->query(" select c_name ,c_lastname,cand_image, v.c_id ,post_id  ,count(voter_id) c1 from vote v ,candidate c where post_id=4 and v.c_id =c.c_id group by c_name , c_lastname ,cand_image ,v.c_id ,post_id  order by c1 desc limit 1
                      ");
			
			
			$fetch1 = $query1->fetch_assoc();
			
	?>
					<tbody> 
						<td><?php echo $fetch1 ['c_name']. " ".$fetch1 ['c_lastname'];?></td>
						<td><img src = "../upload/<?php echo $fetch1 ['cand_image'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['c1'];?></button>	</td>
					<?php ?>
					</tbody>
					
					
			</table>	
            
			
			 <table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:60px;"class = "alert alert-info">CANDIDATE FOR MAGAZINE EDITOR</td>
						<td style = "width:20px;" class = "alert alert-info">Image</td>
						<td class = "alert alert-info">Total</td>
					
					</thead>
                    
                    
                    
                    
                    
					<?php
			require 'dbcon.php';
			//$query = $conn->query("SELECT * FROM post WHERE post_name = 'VICE CHAIRMAN'");
			//$query = $conn->query(" select  v.c_id ,post_id  ,count(voter_id) c1 from vote v ,candidate c where post_id=5 and v.c_id =c.c_id group by v.c_id ,post_id  order by c1 desc limit 1
                  //  ");
			
			
		//while($fetch = $query->fetch_array())
		//{
			//$id = $fetch['c_id'];
			$query1 = $conn->query(" select c_name ,c_lastname,cand_image, v.c_id ,post_id  ,count(voter_id) c1 from vote v ,candidate c where post_id=5 and v.c_id =c.c_id group by c_name , c_lastname ,cand_image ,v.c_id ,post_id  order by c1 desc limit 1
                      ");
			
			
			$fetch1 = $query1->fetch_assoc();
			
	?>
					<tbody> 
						<td><?php echo $fetch1 ['c_name']. " ".$fetch1 ['c_lastname'];?></td>
						<td><img src = "../upload/<?php echo $fetch1 ['cand_image'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['c1'];?></button>	</td>
					<?php ?>
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

