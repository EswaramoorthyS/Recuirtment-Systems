<?php
    require_once("connection.php");
    
    session_start();
    $email=$_SESSION['email'];

    $query="select * from cregtbl where email='".$email."'";
    $result=mysqli_query($con,$query);
    $row=mysqli_fetch_assoc($result);

    if($row['email']==$email)
    {  
        $name = $row['name'];
        $email = $row['email'];
        $number = $row['number'];
        $password = $row['password'];
    }
?>

<html>
<head>
<title>Compay Edit</title>
<link rel="stylesheet" href="CSS/style.css">

</head>
<body>

 <div class="bg">
        <div class="base">
            <form action="cmpupdate.php?email=<?php echo $email ?>" method="post">

                    <h3 class="clr">Edit Here</h3>

                <label>Company Name</label><br>
                <input type="text" name="name" required placeholder="Enter your Company name.." value="<?php echo $name ?>"><br>

                <label>Email</label><br>
                <input type="Email" name="email" required placeholder="Enter Your Company Email.." value="<?php echo $email ?>"><br>

                <label>Mobile Number</label><br>
                <input type="text"  name="number" required maxlength="10" placeholder="Enter Company Mobile Number.." value="<?php echo $number ?>"><br>

                <label>Password</label><br>
                <input type="password" name="password" required placeholder="Your Password.." value="<?php echo $password ?>"><br><br>

                <input type="submit" value="UPDATE" name="update">
            </form>
        </div>
    </div>


</body>
</html>