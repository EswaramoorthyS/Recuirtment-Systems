<?php
   require_once("connection.php");

if(isset($_POST['post']))
{
 if(!empty($title) || !empty($qual) || !empty($number)  || !empty($address)) 
     {
        echo "Fill all field";
     }
    else
    {  
    $title = $_POST['title'];
    $qual = $_POST['qual'];
    $number = $_POST['number'];
    $address = $_POST['address'];

    $query= "insert into jobs(title,qual,number,address) values('$title','$qual','$number','$address')";
    $result = mysqli_query($con,$query);

    if($result)
    {
        header("location:cprofile.php");
    }
    else
    {
        echo "Query error";
    }
  }
}
?>