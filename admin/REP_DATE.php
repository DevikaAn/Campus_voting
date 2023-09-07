<?php $conn = new mysqli("localhost","root", "", "vote"); ?><?php 

 require('../config/autoload.php'); 
	include("vhead.php");

$date=date("Y-m-d");
$time=date('h:i a');

?>
<html>
<head>
</head>
<body>

 <form action="" method="POST" >
 <!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">ELECTION DATE REPORT 2021</h4>
                
                            </div>

 <!--/.ROW-->&nbsp;	
			<button type="button" onClick="window.print();" style = "margin-right:14px;" id ="print" class = "pull-right btn btn-info"><i class = "fa fa-print"></i>PRINT</button>
			<br>
			
             <div class="row">
                 <div class="col-md-12 col-sm-6 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                          NOMINATION SUBMISSION DATES
                        </div>
                        <?php
            $query=mysqli_query($conn,"select * from election");
            while($f=mysqli_fetch_array($query))
                {
                 $efdate=$f['from_date'];
                 $etdate=$f['to_date'];
               }
			           if ($date < $etdate)
			           { $to_da=$date;}
			           else 
			           { $to_da=$etdate;}
			   ?>
                        <div class="panel-body">
                            <div class="form-group"><form action="" method="POST">
                    From:<input type="date" name="from_date" min="<?php echo $efdate; ?>" max="<?php echo $to_da; ?>">
                To:<input type="date" name="to_date" min="<?php echo $efdate; ?>" max="<?php echo $to_da; ?>">
                <input type="submit" class="btn btn-info" name="submit1" value="Sort">
             
            


</form>

    <table class="table table-hover personal-task">
                 <tbody>
                   <?php


            
            
            if(isset($_POST['submit1']))
            {

              $from_date=$_POST['from_date'];
              $to_date=$_POST['to_date'];
			  
              if($from_date>$to_date)
                  {
                    echo"<script>window.alert('Please enter a valied from and to date')</script>";  
                     die();
                  }

                  else
                  {
                             
              $f1=mysqli_query($conn,"select * from candidate  where s_date between '$from_date' and '$to_da' and c_status='ACCEPTED' ");}
              
              ?>

                               <hr>         <tr>
                                         <th><i class="icon_calendar"></i>Candidate ID</th> 
                                            <th><i class="icon_calendar"></i>Candidate Name</th>  
                                            <th><i class="icon_calendar"></i> Last Name</th>
                                            <th><i class="icon_calendar"></i>Submission date</th>
                                            <th><i class="icon_calendar"></i>Status</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php 
											 while($f=mysqli_fetch_array($f1))
                                             {
										?>
                                      
											<tr>
                                            <td><?php echo $f['c_id'];?></td>
												<td><?php echo $f['c_name'];?></td>
												<td><?php echo $f ['c_lastname'];?></td>
												<td><?php echo $f ['s_date'];?></td>
												<td><?php echo $f ['c_status'];?></td>		
											</tr>
										 <?php } ?>
                                       <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
              
              


</body>

</html>
     
                    
                    
                    
                    
                    
                    
                    