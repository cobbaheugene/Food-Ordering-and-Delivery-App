<?php
    require_once "./functions/output.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mc Jean's Food</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="index.css">

</head>


<body>
    <section class="order" id="order">

        <h3 class="sub-heading"> order now</h3>
        <h1 class="heading"> Fill the form to confirm your order </h1>
        <p class="sub-heading"><?php create_order(); ?></p>
        <form action="" method="POST" autocomplete="off">
    
            <div class="inputBox">
                <div class="input">
                    <span>Full Name</span>
                    <input type="text" name="name" placeholder="enter your name" required>
                </div>
                <div class="input">
                    <span>Phone Number</span>
                    <input type="number" name="phone" placeholder="enter your number" required>
                </div>
            </div>
            <div class="inputBox">
            </div>
            <div class="inputBox">
                <div class="input">
                    <span>Email</span>
                    <input type="email" name="email" placeholder="enter your email address" required>
                </div>
                <div class="input">
                    <span>Quantity</span>
                    <input type="number" name="qty" placeholder="how many orders" required>
                </div>
            </div>
            <div class="inputBox">
                <div class="input">
                    <span>Address</span>
                    <textarea name="address" placeholder="enter your address" id="" cols="30" rows="10" required></textarea>
                </div>
                <div class="input">
                    <span>Additional Message</span>
                    <textarea name="message" placeholder="enter your message" id="" cols="30" rows="10" required></textarea>
                </div>
            </div>
    
            <input type="submit" name="btn_order" value="order now" class="btn">
    
        </form>
    
    </section>

    
    <section class="footer">
        <div class="container text-center">
            <h3>All rights reserved. Designed By <link rel="stylesheet" href="https://www.github.com/cobbaheugene">Eugene Cobbah</h3>
        </div>
    </section>
    
</body>
</html>