<?php
//$a=mysqli_connect("localhost","root","","db1");
//mysql_select_db("db1",$a);
   require_once("connection.php");

$sel="delete  from eregtbl where email='".$_GET['email']."'";
$we=mysqli_query($con,$sel);
echo "Delete Succesfully";
//header("location:iew.php");
?>