<?php
    require_once("connection.php");

    $query="select * from cregtbl";
    $result=mysqli_query($con,$query);
	
?>

<!DOCTYPE html>
<html>

<head>
    <title>Companies</title>
    <link rel="stylesheet" href="CSS/style.css">

</head>

<body>
    <div class="bg">
        <div class="base">

                <h1 class="clr">Companies List</h1>
                <table style="width: 100%" bordercolor="blue" bgcolor="whitesmoke">
                	<tr>
                        <th>ID</th>
                		<th>Name</th>
                		<th>Email</th>
                		<th>Mobile Number</th>
                		<th>Padword</th>
                	</tr>

<?php
    while($row=mysqli_fetch_assoc($result))
    {       
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $number = $row['number'];
        $password = $row['password'];

    ?>
                <tr>
                    <th><?php echo $id ?></th>
                    <th><?php echo $name ?></th>
                    <th><?php echo $email ?></th>
                    <th><?php echo $number ?></th>
                    <th><?php echo $password ?></th>
                </tr>
 <?php
}
?>
            </table>

        </div>
    </div>
</body>

</html>