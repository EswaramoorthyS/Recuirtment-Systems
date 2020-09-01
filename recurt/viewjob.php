<?php
    require_once("connection.php");

    $query="select * from jobs";
    $result=mysqli_query($con,$query);
	
?>

<!DOCTYPE html>
<html>

<head>
    <title>Job</title>
    <link rel="stylesheet" href="CSS/style.css">

</head>

<body>
    <div class="bg">
        <div class="base">

                <h1 class="clr">View Jobs</h1>
                <table style="width: 100%" bordercolor="blue" bgcolor="whitesmoke" border="2" cellpadding="6" cellspacing="10">
                	<tr>
                        <th>ID</th>
                		<th>Job Title</th>
                		<th>Qualification</th>
                		<th>Mobile Number</th>
                		<th>Address</th>
                	</tr>

<?php
    while($row=mysqli_fetch_assoc($result))
    {       
        $id = $row['id'];
        $title = $row['title'];
        $qual = $row['qual'];
        $number = $row['number'];
        $address = $row['address'];

    ?>
                <tr>
                    <th><?php echo $id ?></th>
                    <th><?php echo $title ?></th>
                    <th><?php echo $qual ?></th>
                    <th><?php echo $number ?></th>
                    <th><?php echo $address ?></th>
                </tr>
 <?php
}
?>
            </table>

        </div>
    </div>
</body>

</html>