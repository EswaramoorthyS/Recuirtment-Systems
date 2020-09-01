<?php
    require_once("connection.php");
    session_start();
    $email=$_SESSION['email'];

    $query="select * from eregtbl where email='".$email."'";
    $result=mysqli_query($con,$query);
    $row=mysqli_fetch_assoc($result);

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

<html>
<head>
<title>Employee Edit</title>
<link rel="stylesheet" href="CSS/style.css">

</head>
<body>

 <div class="bg">
        <div class="base">
            <form action="empupdate.php?email=<?php echo $email ?>" method="post">

                    <h3 class="clr">Edit Here</h3>

                <label>First Name</label><br>
                <input type="text" name="firstName" required placeholder="Your name.."  value="<?php echo $firstName ?>"><br>

                <label>Last Name</label><br>
                <input type="text" name="lastName" placeholder="Your last name.." value="<?php echo $lastName ?>"><br>

                <label>Email</label><br>
                <input type="email" name="email" required placeholder="Your Email.." value="<?php echo $email ?>"><br>

                <label>Mobile Number</label><br>
                <input type="text" name="number" required maxlength="10" placeholder="Your Mobile Number.." value="<?php echo $number ?>"><br>

                <label>Gender</label>
                <input type="radio" name="gender" required value="<?php echo $gender ?>"/>
                <label>Male</label>
                <input type="radio" name="gender" required value="<?php echo $gender ?>"/>
                <label>Female</label>
                <input type="radio" name="gender" required value="<?php echo $gender ?>"/>
                <label>Other</label><br><br/>

                <label>Password</label><br>
                <input type="password" name="password" required placeholder="Your Password.."  value="<?php echo $password ?>"><br><br>

                <input type="submit" value="UPDATE" name="update">
            </form>
        </div>
    </div>


</body>
</html>