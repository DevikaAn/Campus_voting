<?php $conn = new mysqli("localhost","root", "", "vote"); ?>
<?php
 
include("vhead.php");

?><?php
 
 $submitrequest = 9;


 $sql = "SELECT count(voter_id) FROM voter";
 $result = $conn->query($sql);
 $row = mysqli_fetch_row($result);
 $submit21 = $row[0];
 //$submit1 = $row[0];

 $sql = "SELECT * FROM voter where status='voted'";
 $result = $conn->query($sql);
 $totaltech = $result->num_rows;
 
 
 
 $sql = "SELECT * FROM voter where status='Unvoted'";
 $result = $conn->query($sql);
 $totaltech = $result->num_rows;

?><br><br>

    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">ADMIN DASHBOARD</h4>
                
                            </div>

        </div>
             
             <div class="row">
            
                 <div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="alert alert-info back-widget-set text-center">
                            <i class="fa fa-laptop fa-5x"></i>
                            <h3> <?php echo $submitrequest; ?> </h3>
                          Total Voters
                        </div>
                        
                    </div>
              <div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="alert alert-info back-widget-set text-center">
                            <i class="fa fa-folder fa-5x"></i>
                            <h3> 6</h3>
                            Voted
                        </div>
                         <a class="btn btn-info" href="VOTED.php">View</a>
                    </div>
               <div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="alert alert-info back-widget-set text-center">
                            <i class="fa fa-user fa-5x"></i>
                            <h3><?php echo $totaltech; ?></h3>
                           Unvoted
                        </div>
                        <a class="btn btn-info" href="UNVOTED.php">View</a>
                    </div>
               <div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="alert alert-info back-widget-set text-center">
                            <i class="fa fa-share fa-5x"></i>
                            <h3>30+ Issues </h3>
                            Accepted Candidates
                        </div>
                    </div>

        </div>              
       
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
  
</body>
</html>