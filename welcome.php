<?php
$servername="localhost:7884";
$username="root";
$password="";
$database="swd";

//create connection
$conn = new mysqli($servername, $username, $password, $database);

//check connection
if($conn->connect_error){
    die("connectoin failed: ". $conn->connect_error);
} 
echo "Connected Succesfully";

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$password=$_POST["password"];
$car=$_POST["car"];

//prepare and bind
$stmt = $conn->prepare("INERT INTO personal information(First Name, Last Name, Password, Email, Car) VALUES (?,?,?,?,?");
$stmt ->bind_param("sssss", $fname, $lname,$password, $email, $car);
$stmt ->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Welcome user, your details are;<br>
    First name: <?php echo $_POST["fname"]; ?><br>
    Last name : <?php echo $_POST["lname"];?><br>
    Email     : <?php echo $_POST["email"]; ?><br>
    Password  : <?php echo $_POST["password"] ?><br>
    Cars      : <?php echo $_POST ["car"] ?><br>
    
</body>
</html>