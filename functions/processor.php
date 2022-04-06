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
            <a href=order.php?id=".$row['id']." class='btn'>order</a>
            <span class='price'>GHS ".$row['price']."</span>
        </div>
    </div>
      
      ";
    }
  }

  $conn->close();
}
function get_comments()
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
  $sql = "SELECT * FROM comments";//we want to select all students Firstname,Lastname and email
  $result = $conn->query($sql);//put the query($sql) results in a variable called $result
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc())
    {
      echo "

      <div class='swiper-slide slide'>
        <i class='fas fa-quote-right'></i>
        <div class='user'>
            <img src='images/pic-1.png' alt=''>
            <div class='user-info'>
                <h3>".$row['name']."</h3>
                <div class='stars'>
                    <i class='fas fa-star'></i>
                    <i class='fas fa-star'></i>
                    <i class='fas fa-star'></i>
                    <i class='fas fa-star'></i>
                    <i class='fas fa-star-half-alt'></i>
                </div>
            </div>
        </div>
        <p>".$row['message']."</p>
    </div>
      
      ";
    }
  }

  $conn->close();
}

function create_comment()
{
  if(isset($_POST['btn_comment']))
  {
    $comment = $_POST['comment'];
    $name = $_POST['name'];
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

    $sql = "INSERT INTO comments (`message`, `name`) VALUES ('$comment', '$name') ";
    $result = $conn->query($sql);
    if($result)
    {
      echo "THANK YOU FOR YOUR COMMENT!";
    }

    $conn->close();
  }
}


function create_order()
{
  if(isset($_POST['btn_order']))
  {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['phone'];
    $qty = $_POST['qty'];
    $address = $_POST['address'];
    $message = $_POST['message'];
    $fid = $_GET['id'];
    $date = date("Y-m-d h:i:s");
    $status = "processing";

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

    $sql = 
    "INSERT INTO `tbl_order`( `food_id`, `quantity`, `order_date`, `status`, `customer_name`, `customer_contact`, `customer_email`, `customer_address`, `message`) VALUES ('$fid','$qty','$date','$status','$name','$phone','$email','$address', '$message')";
    $result = $conn->query($sql);
    if($result)
    {
      echo "THANK YOU FOR YOUR ORDER!";
    }

    $conn->close();
  }
}
?>