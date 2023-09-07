<?php $conn = new mysqli("localhost","root", "", "vote"); ?>
<?php
$voter_id = $_GET['id'];
$sql = "delete from voter where voter_id=".$voter_id;

$conn->query($sql);

echo "<script> confirm('Voter Deleted'); </script>";
    echo "<script> location.replace('VIEWVOTER.php'); </script>";



?>