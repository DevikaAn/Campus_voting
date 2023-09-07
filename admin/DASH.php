<?php $conn = new mysqli("localhost","root", "", "vote"); ?>
<?php
 
include("vhead.php");

?><?php
 
 $submitrequest = 9;


 $sql = "SELECT count(voter_id) FROM voter";
 $result = $conn->query($sql);
 $row = mysqli_fetch_row($result);
 $submit = $row[0];

 $sql = "SELECT * FROM voter where status='Voted'";
 $result = $conn->query($sql);
 $totaltech = $result->num_rows;

?><br><br>
<div class="col-sm-9 col-md-10">
  <div class="row mx-5 text-center">
    <div class="col-sm-4 mt-5">
      <div class="card text-green bg-danger mb-3" style="max-width: 18rem;">
        <div class="card-header"> All Reports</div>
        <div class="card-body">
          <h4 class="card-title">
            <?php echo $submitrequest; ?>
          </h4>
          <a class="btn btn-success" href="vhead.php">View</a>
        </div>
      </div>
    </div>
	  
   <div class="col-sm-4 mt-5">
      <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
        <div class="card-header"> voters</div>
        <div class="card-body">
          <h4 class="card-title">
            <?php echo $submit; ?>
          </h4>
          <a class="btn btn-success" href="VIEWVOTER.php">View</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4 mt-5">
      <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
        <div class="card-header">UNVOTED</div>
        <div class="card-body">
          <h4 class="card-title">
            <?php echo $totaltech; ?>
          </h4>
          <a class="btn btn-success" href="view_approved_employees.php">View</a>
        </div>
      </div>
    </div>
  </div>
	
	
	
  <div class="mx-5 mt-5 text-center">
	  
    <!--Table-->
    
    <?php
   /* $sql = "SELECT * FROM customer";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
 echo '<table class="table">
  <thead>     <h4 class="main-title" class="text-center p-5"> List of Customers  </h4><br>
   <tr>
    <th scope="col">Customer Name</th>
    <th scope="col">Address </th>
    <th scope="col">Email </th>
    
   </tr>
  </thead>
  <tbody>';
  while($row = $result->fetch_assoc()){
   echo '<tr>';
   // echo '<th scope="row">'.$row["r_login_id"].'</th>';
    echo '<td>'. $row["cust_firstname"].'</td>';
    echo '<td>'.$row["cust_address"].'</td>';
    echo '<td>'.$row["cust_email"].'</td>';
  }
 echo '</tbody>
 </table>';
} else {
  echo "0 Result";
}*/
	  
?>
  </div>
</div>
</div>
</div>
<?php
 
include("adfooter.php");

?>