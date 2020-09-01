<?php

    require_once("connection.php");
     

        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $gender = $_POST['gender'];
        $password = $_POST['password'];

        $query = "update eregtbl set firstName = '".$firstName."',lastName = '".$lastName."',number = '".$number."',gender = '".$gender."',password = '".$password."' where email='".$email."'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:eprofile.php");
        }
        else
        {
            echo " chek your query".$email;
        }
   // }
    //else
   // {
    //    header("location:edit.php");
    //}
?>
