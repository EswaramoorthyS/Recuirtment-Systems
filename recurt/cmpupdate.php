<?php

    require_once("connection.php");
     
        $name = $row['name'];
        $email = $row['email'];
        $number = $row['number'];
        $password = $row['password'];

        $query = "update cregtbl set name = '".$name."',number = '".$number."',password = '".$password."' where email='".$email."'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:cprofile.php");
        }
        else
        {
            echo " chek your query".$email;
        }
?>
