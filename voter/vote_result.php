<?php include ('vhead.php');?>
<?php include ('sess.php');?>

<body>

    <div id="row">
        <?php 
			
			if(ISSET($_POST['submit']))
				{
					if(!ISSET($_POST['pres_id']))
					{
						$_SESSION['pres_id'] = "";
					}
					else
					{
						$_SESSION['pres_id'] = $_POST['pres_id'];
					}
					if(!ISSET($_POST['chair_id']))
					{
						$_SESSION['chair_id'] = "";
					}
					else
					{
						$_SESSION['chair_id'] = $_POST['chair_id'];
					}
					
					
					if(!ISSET($_POST['vpinternal_id']))
					{
						$_SESSION['vpinternal_id'] = "";
					}
					else
					{
						$_SESSION['vpinternal_id'] = $_POST['vpinternal_id'];
					}
					if(!ISSET($_POST['internal_id']))
					{
						$_SESSION['internal_id'] = "";
					}
					else
					{
						$_SESSION['internal_id'] = $_POST['internal_id'];
					}
					if(!ISSET($_POST['arts_id']))
					{
						$_SESSION['arts_id'] = "";
					}
					else
					{
						$_SESSION['arts_id'] = $_POST['arts_id'];
					}
					if(!ISSET($_POST['magazine_id']))
					{
						$_SESSION['magazine_id'] = "";
					}
					else
					{
						$_SESSION['magazine_id'] = $_POST['magazine_id'];
					}
				}
		?>
    </div>
			<center>
		  <div class="col-lg-8" style = "margin-left:240px;" >
		
            
            
            
            
            
            
            
            
            
            
             <div class = "alert alert-success" >
			<label>CHAIRPERSON</label>
			<br />
			<?php
				if(!$_SESSION['chair_id'])
					{
						
					}
				else
					{   
				
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `c_id` = '$_SESSION[chair_id]'")->fetch_array();
						echo $fetch['c_name']." ".$fetch['c_lastname']." "."<img src = '../upload/".$fetch['cand_image']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			</div>
            
            <div class = "alert alert-success" >
			<label>Vice Chairman</label>
			<br />
			<?php
				if(!$_SESSION['vpinternal_id'])
					{
						
					}
				else
					{   
				
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `c_id` = '$_SESSION[vpinternal_id]'")->fetch_array();
						echo $fetch['c_name']." ".$fetch['c_lastname']." "."<img src = '../upload/".$fetch['cand_image']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			</div>
            
            
            <div class = "alert alert-success" >
			<label>GENERAL SECRATARY</label>
			<br />
			<?php
				if(!$_SESSION['internal_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `c_id` = '$_SESSION[internal_id]'")->fetch_array();
						echo $fetch['c_name']." ".$fetch['c_lastname']." "."<img src = '../upload/".$fetch['cand_image']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			</div>
			
            
            
         <div class = "alert alert-success" >
			<label>ARTS CLUB SECRETARY</label>
			<br />
			<?php
				if(!$_SESSION['arts_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `c_id` = '$_SESSION[arts_id]'")->fetch_array();
						echo $fetch['c_name']." ".$fetch['c_lastname']." "."<img src = '../upload/".$fetch['cand_image']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			</div>    
            
            <div class = "alert alert-success" >
			<label>MAGAZINE EDITOR</label>
			<br />
			<?php
				if(!$_SESSION['magazine_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `c_id` = '$_SESSION[magazine_id]'")->fetch_array();
						echo $fetch['c_name']." ".$fetch['c_lastname']." "."<img src = '../upload/".$fetch['cand_image']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			</div>    
            
            
            
            
            
            
            
            
			
			
			
			<a href = "submit_vote.php"><button type = "submit" data-toggle = "modal" data-target = "#result" class = "btn btn-primary" >SUBMIT FINAL VOTE</button>
            <a href = "VOTE.php"><button type = "submit" data-toggle = "modal" data-target = "#result" class = "btn btn-info" >BACK</button>
		</div>
	</center>
	<div class="modal fade" id = "result" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
											<h4 class="modal-title" id="myModalLabel">         
												
											</h4>
										</div>
										
										
                                        
									
									</div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                        

</body>
 <hr>
<?php include ('script.php')?>
</html>
