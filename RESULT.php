<?php require('../config/autoload.php'); ?>
<?php $conn = new mysqli("localhost","root", "", "vote"); ?>
<?php include ('ahead.php');?>

<body>

    <div id="wrapper">

       

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-9">
                    
					
                </div>
				
				
				
				
				<hr/>
				
   <!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
            <h2 class="main-title" class="text-center p-5"><center>VICTORIA INSTITUTE OF SCIENCE AND TECHNOLOGY , ANGAMALY</center></h2>
<h2 class="main-title" class="text-center p-5"><center> COLLEGE UNION ELECTION 2020-2021 </center></h2><h3 style="font-size:20px;"><center>RESULT</center></h3><br>
                    <div class="panel panel-default">
                        <div class="panel-heading">
							
			
			<h4 class = "alert alert-info">COLLEGE UNION MEMBERS 2021-2022</h4>	
                        </div>
						
					<br/>
                      
                        <div class="panel-body">
                            
						
			
						
						
					
				
       
    <table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:60px;"class = "alert alert-info">NAME OF CANDIDATE </td>
						<td style = "width:20px;" class = "alert alert-info">CHAIRPERSON</td>
						
					</thead>
					<?php
			require 'dbcon.php';
			$query1 = $conn->query(" select c_name ,c_lastname,cand_image, v.c_id ,post_id  ,count(voter_id) c1 from vote v ,candidate c where post_id=6 and v.c_id =c.c_id group by c_name , c_lastname ,cand_image ,v.c_id ,post_id  order by c1 desc limit 1
                      ");
			
			
			$fetch1 = $query1->fetch_assoc();
			
	?>
					<tbody> 
						<td><?php echo $fetch1 ['c_name']. " ".$fetch1 ['c_lastname'];?></td>
						<td><img src = "upload/<?php echo $fetch1 ['cand_image'];?>" style ="width:150px; height:150px; border-radius:500px; " >
						
					<?php ?>
					</tbody>
					
					
					
			</table>	
			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:60px;"class = "alert alert-info">NAME OF CANDIDATE </td>
						<td style = "width:20px;" class = "alert alert-info">VICE CHAIRMAN</td>
						
					
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
						<td><img src = "upload/<?php echo $fetch1 ['cand_image'];?>" style = "width:150px; height:150px; border-radius:500px; " >
						
					<?php ?>
					</tbody>
					
					
					
			</table>	
			
			
			
			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:60px;"class = "alert alert-info">NAME OF CANDIDATE</td>
						<td style = "width:20px;" class = "alert alert-info">GENERAL SECRETARY</td>
						
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
						<td><img src = "upload/<?php echo $fetch1 ['cand_image'];?>" style = "width:150px; height:150px; border-radius:500px; " >
						
					<?php ?>
					</tbody>
					
					
			</table>	
			
            <table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:60px;"class = "alert alert-info">NAME OF CANDIDATEARTS </td>
						<td style = "width:20px;" class = "alert alert-info">CLUB SECRETARY</td>
						
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
						<td><img src = "upload/<?php echo $fetch1 ['cand_image'];?>" style = "width:150px; height:150px; border-radius:500px; " >
						
					<?php ?>
					</tbody>
					
					
			</table>	
            
			
			 <table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:60px;"class = "alert alert-info">NAME OF CANDIDATE </td>
						<td style = "width:20px;" class = "alert alert-info">MAGAZINE EDITOR</td>
						
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
						<td><img src = "upload/<?php echo $fetch1 ['cand_image'];?>" style = "width:150px; height:150px; border-radius:500px; " >
						
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

 <div class="row">
                <div class="col-md-12">
             <hr>
<?php include('FOOT.php'); ?></div></div>