<?php $conn = new mysqli("localhost","root", "", "vote"); ?>
<?php
$batch_id = $_GET['id'];
$sql = "delete from batch where batch_id=".$batch_id;

$conn->query($sql);

echo "<script> confirm('Batch Deleted'); </script>";
    echo "<script> location.replace('VIEWBATCH.php'); </script>";



?>