<?php include ('vhead.php');?>
<?php include ('dbcon.php');?>
<?php include ('sess.php');?>


<body>
    
	<form method = "POST" action = "vote_result.php">
     <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">BALLOT BOX</h4>
                
                            </div>

        </div> 
             
             
              </div>
              <!--/.ROW--> 
            
                             <div class="col-md-7">
    <div class="row-md-9">         
                    <div class="row">
           
               <div class="panel panel-primary">
                        <div class="panel-heading"><center>
                           CHAIRPERSON</center>
                        </div>
                        <div class="panel-body">
                        <div class="form-group"><div class="form-group">
						<?php
							$query = $conn->query("SELECT * FROM `post` JOIN `candidate` ON post.post_id=candidate.post_id WHERE `post_name` = 'CHAIRPERSON' AND c_status = 'ACCEPTED'") or die(mysqli_errno());
							while($fetch = $query->fetch_array()){
						?>
		<div id = "position">
         
						
			<img src = "../upload/<?php echo $fetch['cand_image']?>" style ="border-radius:2px;" height ="200px" width= "200px" class = "img" />
            <center><button type="button" class="btn btn-primary" style = "border-radius:20px;margin-top:60px;"><?php echo $fetch['c_name']." ".$fetch['c_lastname']?></button></div></center>
		
			<center><input type = "radio" value = "<?php echo $fetch['c_id'] ?>" name = "chair_id" class = "chair"></center>
		</div>
						<?php    
							}
						?>

						</div></div>
                       
                    </div>
                </div>
                            
                 <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading"><center>
                          VICE  CHAIRMAN</center>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
						<?php
							$query = $conn->query("SELECT * FROM `post` JOIN `candidate` ON post.post_id=candidate.post_id WHERE `post_name` = 'VICE CHAIRMAN' AND c_status = 'ACCEPTED'") or die(mysqli_errno());
							while($fetch = $query->fetch_array()){
						?>
		<div id = "position">
         
						
			<img src = "../upload/<?php echo $fetch['cand_image']?>" style ="border-radius:2px;" height ="200px" width= "200px" class = "img" />
            <center><button type="button" class="btn btn-primary" style = "border-radius:20px;margin-top:60px;"><?php echo $fetch['c_name']." ".$fetch['c_lastname']?></button></div></center>
		
			<center><input type = "radio" value = "<?php echo $fetch['c_id'] ?>" name = "vpinternal_id" class = "vpinternal"></center>
		</div>
						<?php    
							}
						?>

						</div>
                       
                    </div>
                </div>
	
    
	 <div class="col-md-7">
    <div class="row-md-9">
                
               <div class="panel panel-primary">
                        <div class="panel-heading"><center>
                          GENERAL SECRATARY</center>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
						<?php
							$query = $conn->query("SELECT * FROM `post` JOIN `candidate` ON post.post_id=candidate.post_id WHERE `post_name` = 'GENERAL SECRETARY' AND c_status = 'ACCEPTED'") or die(mysqli_errno());
							while($fetch = $query->fetch_array()){
						?>
		<div id = "position">
         
						
			<img src = "../upload/<?php echo $fetch['cand_image']?>" style ="border-radius:4px;" height ="200px" width= "200px" class = "img" />
            <center><button type="button" class="btn btn-primary" style = "border-radius:20px;margin-top:60px;"><?php echo $fetch['c_name']." ".$fetch['c_lastname']?></button></div></center>
		
			<center><input type = "radio" value = "<?php echo $fetch['c_id'] ?>" name = "internal_id" class = "internal"></center>
		</div>
						<?php    
							}
						?>

						</div>
                       
                    </div>
                </div>

	
	 
             <!--/.ROW-->
             <div class="row">
              <div class="row">
             
              
    <div class="col-md-8">
    <div class="row-md-8">
                 <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading"><center>
                         ARTS CLUB SECRATARY</center>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
						<?php
							$query = $conn->query("SELECT * FROM `post` JOIN `candidate` ON post.post_id=candidate.post_id WHERE `post_name` = 'ARTS CLUB SECRETARY' AND c_status = 'ACCEPTED'") or die(mysqli_errno());
							while($fetch = $query->fetch_array()){
						?>
		<div id = "position">
         
						
			<img src = "../upload/<?php echo $fetch['cand_image']?>" style ="border-radius:2px;" height ="200px" width= "200px" class = "img" />
            <center><button type="button" class="btn btn-primary" style = "border-radius:20px;margin-top:60px;"><?php echo $fetch['c_name']." ".$fetch['c_lastname']?></button></div></center>
		
			<center><input type = "radio" value = "<?php echo $fetch['c_id'] ?>" name = "arts_id" class = "arts"></center>
		</div>
						<?php    
							}
						?>

						</div>
                       
                    </div>
                </div>
	
	
	
	
	 <!--/.ROW-->
             <div class="row">
              <div class="row">
               <div class="row">
                <div class="row">
              
    <div class="col-md-8">
    <div class="row-md-9">
                 
               <div class="panel panel-primary">
                        <div class="panel-heading"><center>
                       MAGAZINE EDITOR  </center>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
						<?php
							$query = $conn->query("SELECT * FROM `post` JOIN `candidate` ON post.post_id=candidate.post_id WHERE `post_name` = 'MAGAZINE EDITOR' AND c_status = 'ACCEPTED'") or die(mysqli_errno());
							while($fetch = $query->fetch_array()){
						?>
		<div id = "position">
         
						
			<img src = "../upload/<?php echo $fetch['cand_image']?>" style ="border-radius:2px;" height ="200px" width= "200px" class = "img" />
            <center><button type="button" class="btn btn-primary" style = "border-radius:20px;margin-top:60px;"><?php echo $fetch['c_name']." ".$fetch['c_lastname']?></button></div></center>
		
			<center><input type = "radio" value = "<?php echo $fetch['c_id'] ?>" name = "magazine_id" class = "magazine"></center>
		</div>
						<?php    
							}
						?>

						</div>
                       
                    </div>
                </div>
               
                
               
	<hr><hr>
	
		<div class="col-md-8">
    <div class="row-md-9">
                 
		<center><button class = "btn btn-success ballot" type = "submit" name = "submit">SUBMIT BALLOT</button></center>
		</form>
       
        
             <hr><br>

</body>

  
  <script type = "text/javascript">
		$(document).ready(function(){
			
			
			$(".chairperson").on("change", function(){
				if($(".chairperson:checked").length == 1)
					{
						$(".chairperson").attr("disabled", "disabled");
						$(".chairperson:checked").removeAttr("disabled");
					}
				else
					{
						$(".chairperson").removeAttr("disabled");
					}
			});
			
			$(".vicechairman").on("change", function(){
				if($(".vicechairman:checked").length == 1)
					{
						$(".vicechairman").attr("disabled", "disabled");
						$(".vicechairman:checked").removeAttr("disabled");
					}
				else
					{
						$(".vicechairman").removeAttr("disabled");
					}
			});
			
			
			$(".generalsec").on("change", function(){
				if($(".generalsec:checked").length == 1)
					{
						$(".generalsec").attr("disabled", "disabled");
						$(".generalsec:checked").removeAttr("disabled");
					}
				else
					{
						$(".generalsec").removeAttr("disabled");
					}
			});
			
			$(".arts").on("change", function(){
				if($(".arts:checked").length == 1)
					{
						$(".arts").attr("disabled", "disabled");
						$(".arts:checked").removeAttr("disabled");
					}
				else
					{
						$(".arts").removeAttr("disabled");
					}
			});
			
			
			$(".magazine").on("change", function(){
				if($(".magazine:checked").length == 1)
					{
						$(".magazine").attr("disabled", "disabled");
						$(".magazine:checked").removeAttr("disabled");
					}
				else
					{
						$(".magazine").removeAttr("disabled");
					}
			});
			
			
	</script>
  
</html>

    
