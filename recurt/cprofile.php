<?php

 require_once("connection.php");
	session_start();

	//echo "string " .$_SESSION['email'];
	//echo "<br>string " .$_SESSION['password'];

	$email=$_SESSION['email'];
	$sel="select * from cregtbl where email='".$email."'";
	$we=mysqli_query($con,$sel);

	$row=mysqli_fetch_assoc($we);

	if($row['email']==$email)
	{
        $name = $row['name'];
        $email = $row['email'];
        $number = $row['number'];
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
        	<a class="editprof" href="cmpedit.php">Edit profile</a>

         <font size="5px" color="white">

                    <h2><?php echo "Company Name : ".$name ?></h2>
                    <p><?php echo "Email : ".$email ?></p>
                    <p><?php echo "Mobile Number : ".$number ?></p>
                   <!-- <?php echo "Password : ".$password ?> -->
		 </font>
        	<a class="search" href="cpost.html">Post job</a><br><br><br>
            <a class="search" href="viewjob.php">See Posted job</a>


            <br><br><br>
            <br><br><br>
			<br><br><br>
           <a class="ibtn" href="cmplogin.html">  Logout  </a>
            <a class="ibtn" href="cmpdelete.php?email=<?php echo $email ?>">Delete Profile</a>
<br><br><br>
         </div>
    </div>
</body>
</html>

