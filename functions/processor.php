<?php

function get_menu()
{
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
  $sql = "SELECT * FROM tbl_food";//we want to select all students Firstname,Lastname and email
  $result = $conn->query($sql);//put the query($sql) results in a variable called $result
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc())
    {
      echo "

      <div class='box'>
        <div class='image'>
            <img src='images/".$row['img_url']."' alt=''>
            <a href='#' class='fas fa-heart'></a>
        </div>
        <div class='content'>
            <div class='stars'>
                <i class='fas fa-star'></i>
                <i class='fas fa-star'></i>
                <i class='fas fa-star'></i>
                <i class='fas fa-star'></i>
                <i class='fas fa-star-half-alt'></i>
            </div>
            <h3>".$row['name']."</h3>
            <p>".$row['description']."</p>
            <a href=order.php?menu='".$row['id']."' class='btn'>order</a>
            <span class='price'>GHS ".$row['price']."</span>
        </div>
    </div>
      
      ";
    }
  }
}
?>