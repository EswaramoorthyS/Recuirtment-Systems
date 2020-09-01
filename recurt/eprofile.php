<?php

 require_once("connection.php");
	session_start();

	//echo "string " .$_SESSION['email'];
	//echo "<br>string " .$_SESSION['password'];

	$email=$_SESSION['email'];
	$sel="select * from eregtbl where email='".$email."'";
	$we=mysqli_query($con,$sel);

	$row=mysqli_fetch_assoc($we);

	if($row['email']==$email)
	{
        $firstName = $row['firstName'];
        $lastName = $row['lastName'];
        $email = $row['email'];
        $number = $row['number'];
        $gender = $row['gender'];
        $password = $row['password'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
        		<div class="bg">
        			<div class="base">
        				<br>
        	<a class="editprof" href="edit.php">Edit profile</a>

         <font size="5px" color="white">

                    <h2><?php echo "First Name : ".$firstName ?></h2>
                    <p><?php echo "Last Name : ".$lastName ?></p>
                    <p><?php echo "Email : ".$email ?></p>
                    <p><?php echo "Mobile Number : ".$number ?></p>
                    <p><?php echo "Gender : ".$gender ?></p>
                    <!--<?php echo "Password : " .$password ?> -->
		 </font>
        	<a class="search" href="viewjob.php">Search job</a>

            <br><br><br>
            <br><br><br>
			<br><br><br>   
            <a class="ibtn" href="emplogin.html">Logout </a>
            <a class="ibtn" href="delete.php?email=<?php echo $email ?>">Delete Profile</a>
<br><br><br>
         </div>
    </div>
</body>
</html>

