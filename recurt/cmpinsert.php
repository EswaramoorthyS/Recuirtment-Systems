<?php
   require_once("connection.php");

if(isset($_POST['submit']))
{
 if(!empty($name) || !empty($email) || !empty($number) || !empty($password)) 
     {
        echo "Fill all field";
     }
    else
    {  
        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $password = $_POST['password'];

    $query= "insert into cregtbl(name,email,number,password) values('$name','$email','$number','$password')";
    $result = mysqli_query($con,$query);

    if($result)
    {
        header("location:cmplogin.html");
    }
    else
    {
        echo "Query error";
    }
  }
}
?>