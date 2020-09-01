<?php
   require_once("connection.php");

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$number = $_POST['number'];
$gender = $_POST['gender'];
$password = $_POST['password'];
// if (!empty($firstName)  || !empty($lastName) || !empty($email) || !empty($number)  || !empty($gender)  || !empty($password)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "db1";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From eregtbl Where email = ? Limit 1";
     $INSERT = "INSERT Into eregtbl (firstName, lastName, email, number, gender, password) values(?, ?, ?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssiss", $firstName, $lastName, $email, $number, $gender, $password);
      $stmt->execute();
     // echo "<script>alert('ok')</script>";
      header("location:emplogin.html");
     // echo "New record inserted sucessfully";
     } else {
      echo "<script>alert('Someone already register using this email')</script>";
     }
     $stmt->close();
     $conn->close();
    }
    /*
} else {
 echo "All field are required";
 die();
}
*/
?>