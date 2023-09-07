<?php $conn = new mysqli("localhost","root", "", "vote"); ?>
<?php
$dep_id = $_GET['id'];
$sql = "delete from dept where dep_id=".$dep_id;

$conn->query($sql);

echo "<script> confirm('Department Deleted'); </script>";
    echo "<script> location.replace('VIEWDEP.php'); </script>";



?>