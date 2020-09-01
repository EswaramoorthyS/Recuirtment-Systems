<?php
   require_once("connection.php");

$sel="delete  from cregtbl where email='".$_GET['email']."'";
$we=mysqli_query($con,$sel);
echo "Delete Succesfully";
//header("location:iew.php");
?>