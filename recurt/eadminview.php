
<?php
    require_once("connection.php");

    $query="select * from eregtbl";
    $result=mysqli_query($con,$query);
	
?>

<html>
    <head>
        <title>view</title>
    <link rel="stylesheet" href="CSS/style.css">

    </head>
    <body>
    <div class="bg">

        <div class="base">

            <h1 class="clr">View Form</h1>
               <table width="100%" border="2" bordercolor="red" bgcolor="whitesmoke"cellpadding="2" cellspacing="2">
               
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Number</th>
                    <th>Gender</th>
                    <th>Password</th>
                   <!-- <th>Edit</th>
                    <th>Delete</th> -->
                </tr>
<?php
    while($row=mysqli_fetch_assoc($result))
    {       
        $id = $row['id'];
        $firstName = $row['firstName'];
        $lastName = $row['lastName'];
        $email = $row['email'];
        $number = $row['number'];
        $gender = $row['gender'];
        $password = $row['password'];
?>
                <tr>
                    <td><?php echo $id ?></td>
                    <th><?php echo $firstName ?></th>
                    <th><?php echo $lastName ?></th>
                    <th><?php echo $email ?></th>
                    <th><?php echo $number ?></th>
                    <th><?php echo $gender ?></th>
                    <th><?php echo $password ?></th>

                 <!--   <td><a href="edit.php?id=<?php echo $id ?>">Edit</a></td>

                    <td>&nbsp;&nbsp;<a href="delete.php?id=<?php echo $id ?>">Delete</a></td>  -->
                </tr>
 <?php
}
?>
            </table>
            <br>
        </div>
    </div>
    </body>
</html>
