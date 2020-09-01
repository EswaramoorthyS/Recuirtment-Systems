
<?php

   require_once("connection.php");
    
   session_start();

if(isset($_POST['submit'])){

    $email = $_POST["email"];
    $password = $_POST["password"];

    $qry="select * from cregtbl where email='".$email."' and password = '".$password."'";

    $row=mysqli_query($con,$qry);
    $total=mysqli_num_rows($row);
    if($total>0)
    {
         $_SESSION['email']=$email;
        $_SESSION['password']=$password;

            header("location:cprofile.php");
        }
        else{
            echo "<script>alert('Incorect')</script>";
        }
}


?>