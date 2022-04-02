<!DOCTYPE html>
<html>
<head>
<style>
/*css styling*/
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<!--Here will be a php code to display an information from a database table-->

<?php

//this code is for outputing information from the  database to the frontend by Fred

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
//before we select from a table called student,create it in SWD with fields Firstname,Lastname and Email if you dont have it created in phpmyadmin
$sql = "SELECT Firstname, Lastname, Email FROM student";//we want to select all students Firstname,Lastname and email
$result = $conn->query($sql);//put the query($sql) results in a variable called $result
	echo "<table border='1'><tr><th>First name</th><th>Last name</th><th>Email</th></tr>";//define table heading for the records
	//NB:when ever we want to output html element in php we print it like a string statement using echo
  if ($result->num_rows > 0) {// check to see if records(number of rows)  for the query results in the database table is 1 or more,this implies results/records where found in the table

  // output data of each row
  	while($row = $result->fetch_assoc()) { //getting all record of each row by using the fetch_assoc to out them in table rows and columns
    echo "<tr><td>". $row["Firstname"]."</td><td>". $row["Lastname"]. "</td><td>" . $row["Email"]. "</td></tr>";
  	}
  	echo "</table>"; 
	}

 else {//if no recordss retrieved
  echo "0 results";
}
$conn->close();
?>

</body>
</html>