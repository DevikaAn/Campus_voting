<?php
 session_start();
 session_destroy();
 echo "<script> location.href='cand_login.php'; </script>";
?>