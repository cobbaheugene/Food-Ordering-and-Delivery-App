<?php
//we begin by defining database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SWD";//create a database called SWD in phymyadmin if you have not done so

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);//connecting to the database with specified credentials
// Check connection
if ($conn->connect_error) {//checking if there are errors
  die("Connection failed: " . $conn->connect_error);//Display this if there are errors
}

?>